<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// // Demo routes
// Route::get('/datatables', 'PagesController@datatables');
// Route::get('/ktdatatables', 'PagesController@ktDatatables');
// Route::get('/select2', 'PagesController@select2');
// Route::get('/jquerymask', 'PagesController@jQueryMask');
// Route::get('/icons/custom-icons', 'PagesController@customIcons');
// Route::get('/icons/flaticon', 'PagesController@flaticon');
// Route::get('/icons/fontawesome', 'PagesController@fontawesome');
// Route::get('/icons/lineawesome', 'PagesController@lineawesome');
// Route::get('/icons/socicons', 'PagesController@socicons');
// Route::get('/icons/svg', 'PagesController@svg');

// // Quick search dummy route to display html elements in search dropdown (header search)



// ****************************** Page URLs ********************************************
// dashboard
Route::get('/', 'PagesController@index')->name('dashboard');
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');
// token
Route::get('/token/{address?}', 'PagesController@token')->name('dashboard.token');
// clear cache
Route::post('/clear_cache', 'PagesController@clear_cache_data')->name('ajax.clear.cache');

// ****************************** API Test URLs ****************************************
// trust wallet
Route::get('/wallet_metadata/{address?}', 'PagesController@test_wallet_metadata');
// bscscan
Route::get('/bscscan_metadata/{address?}', 'PagesController@test_bscscan_metadata');
Route::get('/bscscan_holders/{address?}', 'PagesController@test_bscscan_holders');
Route::get('/bscscan_transactions/{address?}', 'PagesController@test_bscscan_transactions');
// coingecko
Route::get('/coingecko_data/{address?}', 'PagesController@test_coingecko_data');
// coinmarketcap
Route::get('/coinmarketcap_data/{symbol?}', 'PagesController@test_coinmarketcap_data');
// bitquery
Route::get('/query_metadata/{address?}', 'PagesController@test_query_metadata');
Route::get('/query_transactions/{address?}', 'PagesController@test_query_transactions');
