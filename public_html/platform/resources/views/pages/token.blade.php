{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

   

@if(count((array)$token) == 0)
    <div class="alert alert-custom alert-primary fade show" role="alert">
        <div class="alert-icon"><i class="flaticon-warning"></i></div>
            <div class="alert-text">
                <h3>Sorry, this token is not available. Please input valid token address !</h3>
               
            </div>
        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="ki ki-close"></i></span>
            </button>
        </div>
    </div>
@else
    <!--begin::Overview-->
    <div class="card card-custom gutter-b">
        <div class="card-body">
            <div class="d-flex">
                <!--begin: Pic-->
                <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                    <div class="symbol symbol-50 symbol-lg-120">
                    
                        <img alt="Pic" src="<?=$token->logo?>" />
                    </div>
                    <div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">
                        <span class="font-size-h3 symbol-label font-weight-boldest">JM</span>
                    </div>
                    <div class="text-center mt-5">
                        <!--begin::Button-->
                        <a href="#" id="clear_cache_item" class="btn btn-block btn-light-success btn-hover-primary ml-2 h-40px flex-shrink-0">
                            <input type="hidden" id="metadata_address" value="<?=$token->contractAddress?>">
                            <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/General/Half-heart.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M14,7 C13.6666667,10.3333333 12.6666667,12.1167764 11,12.3503292 C11,12.3503292 12.5,6.5 10.5,3.5 C10.5,3.5 10.287918,6.71444735 8.14498739,10.5717225 C7.14049032,12.3798172 6,13.5986793 6,16 C6,19.428689 9.51143904,21.2006583 12.0057195,21.2006583 C14.5,21.2006583 18,20.0006172 18,15.8004732 C18,14.0733981 16.6666667,11.1399071 14,7 Z" fill="#000000"/>
                                    </g>
                                </svg><!--end::Svg Icon-->
                            </span>
                        </a>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end: Pic-->
                <!--begin: Info-->
                <div class="flex-grow-1">
                    <!--begin: Title-->
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <div class="mr-3">
                            <!--begin::Name-->
                            <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3"><?=$token->tokenName.'('.$token->symbol.')'?>
                            <i class="flaticon2-correct text-success icon-md ml-2"></i></a>
                            <!--end::Name-->
                            <!--begin::Contacts-->
                            <div class="d-flex flex-wrap my-2">
                                @if($token->email)
                                <a href="<?=$token->email?>" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                            <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span><?=$token->email?></a>
                                @endif
                                <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <mask fill="white">
                                                <use xlink:href="#path-1" />
                                            </mask>
                                            <g />
                                            <path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>Locked Liquidity</a>
                                @if($token->website)
                                <a href="<?=$token->website?>" class="text-muted text-hover-primary font-weight-bold">
                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span><?=$token->website?></a>
                                @endif
                            </div>
                            <!--end::Contacts-->
                        </div>
                        <div class="my-lg-0 my-1">
                            @if(property_exists($token, 'contractAddress'))
                                <a href="https://www.bscscan.com/token/<?=$token->contractAddress?>" class="btn btn-sm btn-light-success font-weight-bolder text-uppercase mr-3">BSCSCAN</a>
                            @endif
                            @if(property_exists($token, 'coinmarketcap_slug'))
                                <a href="https://coinmarketcap.com/currencies/<?=$token->coinmarketcap_slug?>" class="btn btn-sm btn-info font-weight-bolder text-uppercase">COINMARKETCAP</a>
                            @endif
                        </div>
                    </div>
                    <!--end: Title-->
                    <!--begin: Content-->
                    <div class="d-flex align-items-center flex-wrap justify-content-between">
                        <div class="flex-grow-1 font-weight-bold text-dark-50 py-5 py-lg-2 mr-5"><?=$token->description?></div>
                        <div class="d-flex flex-wrap align-items-center py-2">
                            <div class="d-flex align-items-center mr-10">
                                <div class="mr-6">
                                    <div class="font-weight-bold mb-2">Deployed on</div>
                                    <span class="btn btn-sm btn-text btn-light-primary text-uppercase font-weight-bold"><?=$token->deployedOn?></span>
                                </div>
                                <div class="">
                                    <div class="font-weight-bold mb-2">LP Added on</div>
                                    <span class="btn btn-sm btn-text btn-light-danger text-uppercase font-weight-bold"><?=$token->LPaddedOn?></span>
                                </div>
                            </div>
                        </div>
                        <div class="social-links">
                            @if($token->blog)
                                <a href="<?=$token->blog?>">
                                    <i class="fa fa-pencil text-success mr-5"></i>
                                </a>
                            @endif
                            @if($token->telegram)
                                <a href="<?=$token->telegram?>">
                                    <i class="fa fa-send text-primary mr-5"></i>
                                </a>
                            @endif
                            @if($token->github)
                                <a href="<?=$token->github?>">
                                    <i class="socicon-github text-primary mr-5"></i>
                                </a>
                            @endif
                            @if($token->reddit)
                                <a href="<?=$token->reddit?>">
                                    <i class="socicon-reddit text-primary mr-5"></i>
                                </a>
                            @endif
                            @if($token->facebook)
                                <a href="<?=$token->facebook?>">
                                    <i class="socicon-facebook text-danger mr-5"></i>
                                </a>
                            @endif 
                            @if($token->twitter)
                                <a href="<?=$token->twitter?>">
                                    <i class="socicon-twitter text-danger mr-5"></i>
                                </a>
                            @endif
                            @if($token->wechat)
                                <a href="<?=$token->wechat?>">
                                    <i class="fa fa-wechat text-danger mr-5"></i>
                                </a>
                            @endif
                            @if($token->linkedin)
                                <a href="<?=$token->linkedin?>">
                                    <i class="socicon-linkedin text-danger mr-5"></i>
                                </a>
                            @endif
                            @if($token->discord)
                                <a href="<?=$token->discord?>">
                                    <i class="socicon-discord text-danger mr-5"></i>
                                </a>
                            @endif
                            @if($token->whitepaper)
                                <a href="<?=$token->whitepaper?>">
                                    <i class="fa fa-file-text text-danger mr-5"></i>
                                </a>
                            @endif
                            @if($token->bitcointalk)
                                <a href="<?=$token->bitcointalk?>">
                                    <i class="fa fa-bitcoin text-danger mr-5"></i>
                                </a>
                            @endif
                            @if($token->slack)
                                <a href="<?=$token->slack?>">
                                    <i class="fa fa-slack text-danger mr-5"></i>
                                </a>
                            @endif

                        </div>
                    </div>
                    <!--end: Content-->
                </div>
                <!--end: Info-->
            </div>
            <div class="separator separator-solid my-7"></div>
            <!--begin: Items-->
            <div class="d-flex align-items-center flex-wrap">
                <!--begin: Item-->
                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                    <span class="mr-4">
                        <i class="flaticon-piggy-bank icon-2x text-muted font-weight-bold"></i>
                    </span>
                    <div class="d-flex flex-column text-dark-75">
                        <span class="font-weight-bolder font-size-sm">Diluted Market Cap</span>
                        <span class="font-weight-bolder font-size-h5">
                        <span class="text-dark-50 font-weight-bold">$</span><?=$token->diluted_market_cap?></span>
                    </div>
                </div>
                <!--end: Item-->
                <!--begin: Item-->
                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                    <span class="mr-4">
                        <i class="flaticon-confetti icon-2x text-muted font-weight-bold"></i>
                    </span>
                    <div class="d-flex flex-column text-dark-75">
                        <span class="font-weight-bolder font-size-sm">Expenses</span>
                        <span class="font-weight-bolder font-size-h5">
                        <span class="text-dark-50 font-weight-bold">$</span><?=$token->expenses?></span>
                    </div>
                </div>
                <!--end: Item-->
                <!--begin: Item-->
                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                    <span class="mr-4">
                        <i class="flaticon-pie-chart icon-2x text-muted font-weight-bold"></i>
                    </span>
                    <div class="d-flex flex-column text-dark-75">
                        <span class="font-weight-bolder font-size-sm">Holders</span>
                        <span class="font-weight-bolder font-size-h5"></span><?=$token->holders?></span>
                    </div>
                </div>
                <!--end: Item-->
                <!--begin: Item-->
                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                    <span class="mr-4">
                        <i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
                    </span>
                    <div class="d-flex flex-column flex-lg-fill">
                        <span class="text-dark-75 font-weight-bolder font-size-sm">Transactions</span>
                        <a href="#" class="text-primary font-weight-bolder"><?=$token->transactionCount?></a>
                    </div>
                </div>
                <!--end: Item-->
                <!--begin: Item-->
                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                    <span class="mr-4">
                        <i class="flaticon-chat-1 icon-2x text-muted font-weight-bold"></i>
                    </span>
                    <div class="d-flex flex-column">
                        <span class="text-dark-75 font-weight-bolder font-size-sm">648 Comments</span>
                        <a href="#" class="text-primary font-weight-bolder">View</a>
                    </div>
                </div>
                <!--end: Item-->
                <!--begin: Item-->
                <!-- <div class="d-flex align-items-center flex-lg-fill my-1">
                    <span class="mr-4">
                        <i class="flaticon-network icon-2x text-muted font-weight-bold"></i>
                    </span>
                    <div class="symbol-group symbol-hover">
                        <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Mark Stone">
                            <img alt="Pic" src="assets/media/users/300_25.jpg" />
                        </div>
                        <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Charlie Stone">
                            <img alt="Pic" src="assets/media/users/300_19.jpg" />
                        </div>
                        <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Luca Doncic">
                            <img alt="Pic" src="assets/media/users/300_22.jpg" />
                        </div>
                        <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Nick Mana">
                            <img alt="Pic" src="assets/media/users/300_23.jpg" />
                        </div>
                        <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Teresa Fox">
                            <img alt="Pic" src="assets/media/users/300_18.jpg" />
                        </div>
                        <div class="symbol symbol-30 symbol-circle symbol-light">
                            <span class="symbol-label font-weight-bold">5+</span>
                        </div>
                    </div>
                </div> -->
                <!--end: Item-->
            </div>
            <!--begin: Items-->
        </div>
    </div>
    <!--end::Overview-->
    <!-- begin::Transaction -->
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Transactions
                    <div class="text-muted pt-2 font-size-sm">Show the transaction history</div>
                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="#" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <circle fill="#000000" cx="9" cy="15" r="6"/>
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>Trade History</a>
                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <!--begin::Search Form-->
            <div class="mt-2 mb-5 mt-lg-5 mb-lg-10">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query"/>
                                    <span><i class="flaticon2-search-1 text-muted"></i></span>
                                </div>
                            </div>

                            <div class="col-md-4 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Show:</label>
                                    <select class="form-control" id="kt_datatable_search_status">
                                        <option value="0">All</option>
                                        <option value="50">Last 50</option>
                                        <option value="100">Last 100</option>
                                        <option value="500">Last 500</option>
                                        <option value="1000">Last 1000</option>
                                        <option value="2500">Last 2500</option>
                                        <option value="5000">Last 5000</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                        <a href="#" class="btn btn-light-primary px-6 font-weight-bold">
                            Search
                        </a>
                    </div>
                </div>
            </div>
            <!--end::Search Form-->
            <table class="table table-bordered table-hover" id="kt_datatable">
                <thead>
                    <tr>
                        <th>Txn Hash</th>
                        <th>Block</th>
                        <th>Date</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Value</th>
                        <th>Tx Fee</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                     @if($token->transactions)
                       @foreach($token->transactions as $transaction)
                        <tr>
                            <td width="15%" class="datatable-column"><?=$transaction->hash?></td>
                            <td width="10%" class="datatable-column"><?=$transaction->block->height?></td>
                            <td width="15%" class="datatable-column"><?=$transaction->block->timestamp->time?></td>
                            <td width="15%" class="datatable-column"><?=$transaction->sender->address?></td>
                            <td width="15%" class="datatable-column"><?=$token->contractAddress?></td>
                            <td width="10%" class="datatable-column"><?=$transaction->amount?></td>
                            <td width="10%" class="datatable-column"><?=$transaction->gasValue?></td>
                            <td width="10%" class="datatable-column"></td>
                        </tr>
                       @endforeach
                    @endif
                
                </tbody>
            </table>
        </div>
    </div>
    <!-- end::Transactions -->
@endif

@endsection

{{-- Styles Section --}}
@section('styles')
    <link href="{{ asset('css/pages/token.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ asset('js/scripts.bundle.js') }}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Datatable Vendors(used by this page)-->
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript"></script>
    <!--end::Datatable Vendors-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('js/pages/widgets.js') }}"></script>
    <script src="{{ asset('js/pages/token.js') }}"></script>
    <!--end::Page Scripts-->
@endsection
