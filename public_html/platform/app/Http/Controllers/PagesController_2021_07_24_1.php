<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Client;

class PagesController extends Controller
{
    public function index()
    {
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        return view('pages.dashboard', compact('page_title', 'page_description'));
    }

    public function token($address = null)
    {
        $page_title = 'Token';
        $page_description = 'Token dashboard';
        if (Cache::has($address) == false) { // set cache data
            $this->set_cache_data($address);
        } 
        $token = $this->get_cache_data($address);
        return view('pages.token', compact('page_title', 'page_description', 'token'));
    }

    private function get_cache_data($address)
    {
        return Cache::get($address);
    }

    private function set_cache_data($address)
    {
        $metadata = $this->get_api_data($address);
        Cache::put($address, $metadata);
    }

    private function get_api_data($address)
    {
        $metadata = array();

        //===============================> bscscan api <=======================================

        try {
            $url = "https://api.bscscan.com/api?module=token&action=tokeninfo&contractaddress=".$address."&apikey=EK9HJ8BUHGVANHPECHAIDERCDYVQJDGPE9";
            $content = $this->send_request($url)->content;
            $status = $content->status;
            if ($status == 0)
            {
                return $metadata;
            }
            $metadata = (object)($content->result[0]);
            $metadata->holders = number_format(23435);
        } catch(ClientException $ex) {
            // abort(500, 'Invalid bscscan API');
            return $metadata;
        }

        
        //===============================> wallet api <=======================================

        try {
            $url = "https://raw.githubusercontent.com/trustwallet/assets/master/blockchains/smartchain/assets/".$address."/logo.png";
            $response = $this->send_request($url);
            $metadata->logo = $url;
        } catch(ClientException $ex) {
            // abort(500, 'Invalid bscscan API');
            $metadata->logo = '';
        }

        //===============================> coingecko api <=====================================

        try {
            $url = "https://api.coingecko.com/api/v3/coins/binance-smart-chain/contract/".$address;
            $content = $this->send_request($url)->content;
            if ($metadata->logo == '' && $content->image != '')
            {
                $metadata->logo = $content->image->large;
            }
            // $metadata->market_data = $content->market_data;
    
            // set diluted market cap
            if (property_exists($content->market_data->fully_diluted_valuation, 'usd'))
            {
                $metadata->diluted_market_cap = number_format($content->market_data->fully_diluted_valuation->usd);
            }
            else if (is_numeric($content->market_data->max_supply))
            {
                $metadata->diluted_market_cap = number_format($content->market_data->current_price->usd * $content->market_data->max_supply);
            }
            else if (is_numeric($content->market_data->total_supply))
            {
                $metadata->diluted_market_cap = number_format($content->market_data->current_price->usd * $content->market_data->total_supply);
            }
            else
            {
                $metadata->diluted_market_cap = 0;
            }
            // set expenses
            if (property_exists($content->market_data->total_volume, 'bnb'))
            {
                $metadata->expenses = number_format($content->market_data->total_volume->bnb);
            }
            else
            {
                $metadata->expenses = 0;
            }
        } catch(ClientException $ex) {
            // abort(500, 'Invalid coingecko API');
            $metadata->logo = '';
            $metadata->diluted_market_cap = 'N/A';
            $metadata->expenses = 'N/A';
        }

        //==============================> coinmarketcap api <==================================

        $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/map';
        $parameters = [
            'symbol' => $metadata->symbol
        ];
        $headers = [
            'Accepts: application/json',
            'X-CMC_PRO_API_KEY: 4a93eb16-7adf-41ef-8b4d-41892193ff87'
        ];
        $qs = http_build_query($parameters); // query string encode the parameters
        $request = "{$url}?{$qs}"; // create the request URL

        $curl = curl_init(); // Get cURL resource
        // Set cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => $request,            // set the request URL
            CURLOPT_HTTPHEADER => $headers,     // set the headers 
            CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
        ));
        $response = curl_exec($curl); // Send the request, save the response
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if ($httpcode == 200)
        {
            $metadata->coinmarketcap_slug = json_decode($response)->data[0]->slug;
        }

        // ===========================> bitQuery <===============================================

        $query = 'query MyQuery {
          ethereum(network: bsc) {
            transactions(any: {txTo: {is: "'.$address.'"}}) {
              count
            }
            smartContractCalls(
              smartContractAddress: {is: "'.$address.'"}
              smartContractMethod: {is: "Contract Creation"}
              smartContractType: {is: Token}
            ) {
              block {
                timestamp {
                  time
                }
              }
            }
            arguments(
              smartContractAddress: {in: ["0xBCfCcbde45cE874adCB698cC183deBcF17952812", "0xcA143Ce32Fe78f1f7019d7d551a6402fC5350c73"]}
              smartContractEvent: {is: "PairCreated"}
              options: {asc: "block.height", limit: 1}
            ) {
              block {
                height
                timestamp {
                  time
                }
              }
              any(
                of: argument_value
                argument: {is: "token0"}
                value: {in: "'.$address.'"}
              )
              transaction {
                txFrom {
                  address
                }
                hash
              }
            }
          }
        }';
        $query_result = $this->run_query($query);
        if ($query_result == null)
        {
            $metadata->transactionCount = 'N/A';
            $metadata->deployedOn   = 'N/A';
            $metadata->LPaddedOn    = 'N/A';  
        }
        else
        {
            $query_data = $query_result->data->ethereum;
            $metadata->transactionCount = (count($query_data->transactions) > 0) ? number_format($query_data->transactions[0]->count) : 0;
            $metadata->deployedOn   = (count($query_data->smartContractCalls) > 0) ? date("d M, Y", strtotime($query_data->smartContractCalls[0]->block->timestamp->time)) : 'N/A';
            $metadata->LPaddedOn    = (count($query_data->arguments) > 0) ? date("d M, Y", strtotime($query_data->arguments[0]->block->timestamp->time)) : 'N/A';  
        }
        $metadata->transactions = $this->get_transactions($address);
        // dd($metadata);
        return $metadata;
    }

    private function get_transactions($address, $offset = 0, $limit = 10)
    {
        $query = 'query MyQuery {
          ethereum(network: bsc) {
            transactions(
              txTo: {is: "'.$address.'"}
              options: {offset: '.$offset.', limit: '.$limit.', desc: "block.timestamp.time"}
            ) {
              amount
              gasValue
              sender {
                address
              }
              block {
                timestamp {
                  time
                }
                height
              }
              hash
            }
          }
        }';

        $query_result = $this->run_query($query);
        if ($query_result == null)
        {
            $query_data = [];
        }
        else
        {
            $query_data = $query_result->data->ethereum->transactions;
        }

        return $query_data;
    }

    public function test_bscscan_metadata($address)
    {
        $url = "https://api.bscscan.com/api?module=token&action=tokeninfo&contractaddress=".$address."&apikey=EK9HJ8BUHGVANHPECHAIDERCDYVQJDGPE9";
        $response = $this->send_request($url);
        dd($response);
    }

    public function test_wallet_metadata($address)
    {
        $metadata = (object)array();
        $client = new Client();
        // get metadata
        $url = "https://raw.githubusercontent.com/trustwallet/assets/master/blockchains/smartchain/assets/".$address."/info.json";
        $response = $this->send_request($url);
        if ($response->result == "OK")
        {
            $metadata = $response->content;
            // get logo
            $url = "https://raw.githubusercontent.com/trustwallet/assets/master/blockchains/smartchain/assets/".$address."/logo.png";
            $response_img = $this->send_request($url);
            if ($response_img->result == "OK")
            {
                $metadata->logo = $url;
            }
        }
        dd($metadata);
    }

    public function test_bscscan_holders($address)
    {
        $url = "https://api.bscscan.com/api?module=token&action=tokenholderlist&contractaddress=".$address."&page=1&offset=1000&apikey=EK9HJ8BUHGVANHPECHAIDERCDYVQJDGPE9";
        $response = $this->send_request($url);
        dd($response);
    }

    public function test_bscscan_transactions($address)
    {
        $url = "https://api.bscscan.com/api?module=account&action=txlist&address=".$address."&startblock=999999&endblock=9999999&sort=asc&apikey=EK9HJ8BUHGVANHPECHAIDERCDYVQJDGPE9";
        $response = $this->send_request($url);
        dd($response);
    }

    public function test_coingecko_data($address)
    {
        $url = "https://api.coingecko.com/api/v3/coins/binance-smart-chain/contract/".$address;
        $response = $this->send_request($url);
        dd($response);
    }

    public function test_coinmarketcap_data($symbol)
    {
        $data = array();
        // get slug option
        $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/map';
        $parameters = [
            'symbol' => $symbol
        ];

        $headers = [
            'Accepts: application/json',
            'X-CMC_PRO_API_KEY: 4a93eb16-7adf-41ef-8b4d-41892193ff87'
        ];
        $qs = http_build_query($parameters); // query string encode the parameters
        $request = "{$url}?{$qs}"; // create the request URL

        $curl = curl_init(); // Get cURL resource
        // Set cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => $request,            // set the request URL
            CURLOPT_HTTPHEADER => $headers,     // set the headers 
            CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
        ));
        $response = curl_exec($curl); // Send the request, save the response
        // dd(json_decode($response));
        if (property_exists(json_decode($response)->status, 'error_code'))
        {
            dd(json_decode($response));
        }
        $slug_data = json_decode($response)->data[0];

        // get metadata
        $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/info';
        $parameters = [
            // 'id'     => $slug_data->id,
            // 'symbol' => $slug_data->symbol,
            'slug'   => $slug_data->slug
        ];

        $headers = [
            'Accepts: application/json',
            'X-CMC_PRO_API_KEY: 4a93eb16-7adf-41ef-8b4d-41892193ff87'
        ];
        $qs = http_build_query($parameters); // query string encode the parameters
        $request = "{$url}?{$qs}"; // create the request URL

        $curl = curl_init(); // Get cURL resource
        // Set cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => $request,            // set the request URL
            CURLOPT_HTTPHEADER => $headers,     // set the headers 
            CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
        ));

        $response = curl_exec($curl); // Send the request, save the response
        if (property_exists(json_decode($response), 'error_code'))
        {
            dd(json_decode($response));
        }
        $info_data = ((array)(json_decode($response)->data))[$slug_data->id];
        // dd($info_data);
        $data = array_merge((array)$slug_data, (array)$info_data);
        dd($data);
        curl_close($curl); // Close request
    }

    public function test_query_metadata($address)
    {
        $query = 'query MyQuery {
                ethereum(network: bsc) {
                transactions(any: {txTo: {is: "'.$address.'"}}) {
                  count
                }
                smartContractCalls(
                  smartContractAddress: {is: "'.$address.'"}
                  smartContractMethod: {is: "Contract Creation"}
                  smartContractType: {is: Token}
                ) {
                  block {
                    timestamp {
                      time
                    }
                  }
                }
                arguments(
                  smartContractAddress: {in: ["0xBCfCcbde45cE874adCB698cC183deBcF17952812", "0xcA143Ce32Fe78f1f7019d7d551a6402fC5350c73"]}
                  smartContractEvent: {is: "PairCreated"}
                  options: {asc: "block.height", limit: 1}
                ) {
                  block {
                    height
                    timestamp {
                      time
                    }
                  }
                  any(
                    of: argument_value
                    argument: {is: "token0"}
                    value: {in: "'.$address.'"}
                  )
                  transaction {
                    txFrom {
                      address
                    }
                    hash
                  }
                }
              }
            }';
        
        dd($this->run_query($query));
    }

    public function test_query_transactions($address)
    {
        $query = 'query MyQuery {
          ethereum(network: bsc) {
            transactions(
              txTo: {is: "'.$address.'"}
              options: {offset: 10, limit: 10, desc: "block.timestamp.time"}
            ) {
              amount
              gasValue
              sender {
                address
              }
              block {
                timestamp {
                  time
                }
                height
              }
              hash
            }
          }
        }';

        dd($this->run_query($query));
    }

    private function send_request($url, $method = 'GET')
    {
        $client = new Client();
        $response = $client->request($method, $url);
        $status = $response->getStatusCode(); // 200
        $result = $response->getReasonPhrase(); // OK
        $content = json_decode($response->getBody());
        return (object)array('result' => $result, 'content' => $content);
    }

    private function run_query($query)
    {
        $url = 'https://graphql.bitquery.io/';
        $headers = [
            'Accepts: application/json',
            'X-API-KEY: BQYRew9XOUZIo4vwsiZeK5givc52tyCr'
        ];

        $data = ['query' => $query];

        $curl = curl_init(); // Get cURL resource
        // Set cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,            // set the request URL
            CURLOPT_HTTPHEADER => $headers, // set the headers 
            CURLOPT_RETURNTRANSFER => 1,    // ask for raw response instead of bool
            CURLOPT_POSTFIELDS => $data
        ));
        $response = curl_exec($curl); // Send the request, save the response
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if ($httpcode != 200 || property_exists(json_decode($response), 'error')) // error handler
        {
            return null;
        }
        curl_close($curl); // Close request
        return json_decode($response);
    }

    /**
     * Demo methods below
     */

    // Datatables
    public function datatables()
    {
        $page_title = 'Datatables';
        $page_description = 'This is datatables test page';

        return view('pages.datatables', compact('page_title', 'page_description'));
    }

    // KTDatatables
    public function ktDatatables()
    {
        $page_title = 'KTDatatables';
        $page_description = 'This is KTdatatables test page';

        return view('pages.ktdatatables', compact('page_title', 'page_description'));
    }

    // Select2
    public function select2()
    {
        $page_title = 'Select 2';
        $page_description = 'This is Select2 test page';

        return view('pages.select2', compact('page_title', 'page_description'));
    }

    // jQuery-mask
    public function jQueryMask()
    {
        $page_title = 'jquery-mask';
        $page_description = 'This is jquery masks test page';

        return view('pages.jquery-mask', compact('page_title', 'page_description'));
    }

    // custom-icons
    public function customIcons()
    {
        $page_title = 'customIcons';
        $page_description = 'This is customIcons test page';

        return view('pages.icons.custom-icons', compact('page_title', 'page_description'));
    }

    // flaticon
    public function flaticon()
    {
        $page_title = 'flaticon';
        $page_description = 'This is flaticon test page';

        return view('pages.icons.flaticon', compact('page_title', 'page_description'));
    }

    // fontawesome
    public function fontawesome()
    {
        $page_title = 'fontawesome';
        $page_description = 'This is fontawesome test page';

        return view('pages.icons.fontawesome', compact('page_title', 'page_description'));
    }

    // lineawesome
    public function lineawesome()
    {
        $page_title = 'lineawesome';
        $page_description = 'This is lineawesome test page';

        return view('pages.icons.lineawesome', compact('page_title', 'page_description'));
    }

    // socicons
    public function socicons()
    {
        $page_title = 'socicons';
        $page_description = 'This is socicons test page';

        return view('pages.icons.socicons', compact('page_title', 'page_description'));
    }

    // svg
    public function svg()
    {
        $page_title = 'svg';
        $page_description = 'This is svg test page';

        return view('pages.icons.svg', compact('page_title', 'page_description'));
    }

    // Quicksearch Result
    public function quickSearch()
    {
        return view('layout.partials.extras._quick_search_result');
    }
}
