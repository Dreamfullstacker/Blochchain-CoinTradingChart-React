{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <!--begin::Subheader-->
    <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">SafeWojak Main Dashboard</h2>
                    <!--end::Page Title-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center flex-wrap">
                <!--begin::Button-->
                <a href="#" class="btn button-color btn-fixed-height font-weight-bold px-2 px-lg-5 mr-2">
                    <span class="svg-icon svg-icon-lg">
                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo3\dist/../src/media/svg/icons\Shopping\Safe.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <path d="M6.5,16 L7.5,16 C8.32842712,16 9,16.6715729 9,17.5 L9,19.5 C9,20.3284271 8.32842712,21 7.5,21 L6.5,21 C5.67157288,21 5,20.3284271 5,19.5 L5,17.5 C5,16.6715729 5.67157288,16 6.5,16 Z M16.5,16 L17.5,16 C18.3284271,16 19,16.6715729 19,17.5 L19,19.5 C19,20.3284271 18.3284271,21 17.5,21 L16.5,21 C15.6715729,21 15,20.3284271 15,19.5 L15,17.5 C15,16.6715729 15.6715729,16 16.5,16 Z" fill="#000000" opacity="0.3"/>
                            <path d="M5,4 L19,4 C20.1045695,4 21,4.8954305 21,6 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6 C3,4.8954305 3.8954305,4 5,4 Z M15.5,15 C17.4329966,15 19,13.4329966 19,11.5 C19,9.56700338 17.4329966,8 15.5,8 C13.5670034,8 12,9.56700338 12,11.5 C12,13.4329966 13.5670034,15 15.5,15 Z M15.5,13 C16.3284271,13 17,12.3284271 17,11.5 C17,10.6715729 16.3284271,10 15.5,10 C14.6715729,10 14,10.6715729 14,11.5 C14,12.3284271 14.6715729,13 15.5,13 Z M7,8 L7,8 C7.55228475,8 8,8.44771525 8,9 L8,11 C8,11.5522847 7.55228475,12 7,12 L7,12 C6.44771525,12 6,11.5522847 6,11 L6,9 C6,8.44771525 6.44771525,8 7,8 Z" fill="#000000"/>
                            </g>
                        </svg><!--end::Svg Icon-->
                    </span>
                    <span class="d-none d-md-inline">Buy $WOJAK</span>
                </a>
                <!--end::Button-->
                <!--begin::Button-->
                <a href="#" id="connect_wallet" class="btn btn-primary btn-fixed-height font-weight-bold px-2 px-lg-5 mr-2">
                    <span class="svg-icon svg-icon-lg">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Files/File.svg-->
                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo3\dist/../src/media/svg/icons\Shopping\Wallet2.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <rect fill="#000000" opacity="0.3" x="2" y="2" width="10" height="12" rx="2"/>
                            <path d="M4,6 L20,6 C21.1045695,6 22,6.8954305 22,8 L22,20 C22,21.1045695 21.1045695,22 20,22 L4,22 C2.8954305,22 2,21.1045695 2,20 L2,8 C2,6.8954305 2.8954305,6 4,6 Z M18,16 C19.1045695,16 20,15.1045695 20,14 C20,12.8954305 19.1045695,12 18,12 C16.8954305,12 16,12.8954305 16,14 C16,15.1045695 16.8954305,16 18,16 Z" fill="#000000"/>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="d-none d-md-inline name">Connect Wallet</span>
                </a>
                <!--end::Button-->
                <!--begin::Button-->
                <a href="#" class="btn btn-primary btn-icon font-weight-bold" data-toggle="modal" data-target="#kt_chat_modal">
                    <span class="svg-icon svg-icon-lg">
                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo3\dist/../src/media/svg/icons\Code\Settings4.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                            <path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>
                            </g>
                        </svg><!--end::Svg Icon-->
                    </span>
                </a>
                <!--end::Button-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Dashboard-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-4">
                    
                    <!--begin::Mixed Widget 16-->
                    <div class="card card-custom gutter-b" style="background-position: center; background-size: 150% auto; background-image: url({{ asset('/images/wojak-index-analyzing-catalogue.jpg') }})">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <div class="card-title">
                                <div class="card-label">
                                    <div class="font-weight-bolder">Wojak Index</div>
                                    <div class="font-size-sm text-muted mt-2">Past 7 Days (Updated Daily)</div>
                                </div>
                            </div>
                            <div class="card-toolbar">
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <!--begin::Chart-->
                            <div class="flex-grow-1"> 
                                <div class="font-weight-bold text-muted font-size-sm">
                                <span class="text-dark-75 font-weight-bolder font-size-h2 mr-2">87%</span>Level: Analyzing Catalog Images</div>
                                    <div class="progress progress-xs mt-7 bg-warning-r-60">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 87%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>    
                            </div>
                            <!--end::Chart-->
                            <!--begin::Items-->
                            <div class="mt-10 mb-5">
                                <div class="row row-paddingless mb-10">
                                    <!--begin::Item-->
                                    <div class="col">
                                        <div class="d-flex align-items-center mr-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45 symbol-light-danger mr-4 flex-shrink-0">
                                                <div class="symbol-label">
                                                    <span class="svg-icon svg-icon-lg svg-icon-danger">
                                                    <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                        <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo3\dist/../src/media/svg/icons\Code\Lock-overturning.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="#000000" opacity="0.3"/>
                                                                    <path d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z" fill="#000000"/>
                                                                </g>
                                                            </svg><!--end::Svg Icon--></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="font-size-h4 text-dark-75 font-weight-bolder">948 BNB</div>
                                                <div class="font-size-sm text-muted font-weight-bold mt-1">Rugged</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="col">
                                        <div class="d-flex align-items-center mr-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45 symbol-light-danger mr-4 flex-shrink-0">
                                                <div class="symbol-label">
                                                    <span class="svg-icon svg-icon-lg svg-icon-danger">
                                                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo3\dist/../src/media/svg/icons\General\Trash.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
                                                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                                                                </g>
                                                            </svg><!--end::Svg Icon-->
                                                        </span>
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="font-size-h4 text-dark-75 font-weight-bolder">2294 BNB</div>
                                                <div class="font-size-sm text-muted font-weight-bold mt-1">Dumped (Nuked)</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <div class="row row-paddingless">
                                    <!--begin::Item-->
                                    <div class="col">
                                        <div class="d-flex align-items-center mr-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45 symbol-light-danger mr-4 flex-shrink-0">
                                                <div class="symbol-label">
                                                    <span class="svg-icon svg-icon-lg svg-icon-danger">
                                                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo3\dist/../src/media/svg/icons\Code\Time-schedule.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <path d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z" fill="#000000"/>
                                                                <path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="#000000" opacity="0.3"/>
                                                            </g>
                                                        </svg><!--end::Svg Icon--></span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="font-size-h4 text-dark-75 font-weight-bolder">3259 BNB</div>
                                                <div class="font-size-sm text-muted font-weight-bold mt-1">Slow Rugged</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="col">
                                        <div class="d-flex align-items-center mr-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45 symbol-light-danger mr-4 flex-shrink-0">
                                                <div class="symbol-label">
                                                    <span class="svg-icon svg-icon-lg svg-icon-danger">
                                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo3\dist/../src/media/svg/icons\Design\Bucket.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <path d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z" fill="#000000" fill-rule="nonzero" transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000) "/>
                                                                <path d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z" fill="#000000" opacity="0.3"/>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="font-size-h4 text-dark-75 font-weight-bolder">1728 BNB</div>
                                                <div class="font-size-sm text-muted font-weight-bold mt-1">Honeypotted</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                </div>
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 16-->
                    
                    <!--begin::Stats Widget 2-->
                    <div class="card card-custom bgi-no-repeat gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('/media/svg/shapes/abstract-2.svg') }})">
                        <!--begin::Body-->
                        <div class="card-body">
                            <a href="#" class="card-title font-weight-bold text-muted text-hover-primary font-size-h5">Emergency Bulletins</a>
                            <div class="font-weight-bold text-success mt-9 mb-5">17 June 2021</div>
                            <p class="text-dark-75 font-weight-bolder font-size-h5 m-0">RECENT SCAM DETECTED: ELONMOON
                            <br />Token is now considered dangerous.</p>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 2-->
                    
                        <div class="row">
                            <div class="col-xl-6">
                                <!--begin::Tiles Widget 11-->
                                <div class="card card-custom bg-success gutter-b" style="height: 150px">
                                    <div class="card-body">
                                        <span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <div class="text-inverse-success font-weight-bolder font-size-h2 mt-3">1184</div>
                                        <a href="#" class="text-inverse-success font-weight-bold font-size-lg mt-1">Added Contracts</a>
                                    </div>
                                </div>
                                <!--end::Tiles Widget 11-->
                            </div>
                            <div class="col-xl-6">
                                <!--begin::Tiles Widget 12-->
                                <div class="card card-custom gutter-b" style="height: 150px">
                                    <div class="card-body">
                                        <span class="svg-icon svg-icon-3x svg-icon-success">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <div class="text-dark font-weight-bolder font-size-h2 mt-3">10,284</div>
                                        <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">Users Served</a>
                                    </div>
                                </div>
                                <!--end::Tiles Widget 12-->

                            </div>
                        </div>
                    <!--begin::List Widget 10-->
                    <div class="card card-custom gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <h3 class="card-title font-weight-bolder text-dark">Upcoming Timeline Events</h3>
                            <div class="card-toolbar">
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-ver"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Naviigation-->
                                        <ul class="navi">
                                            <li class="navi-header font-weight-bold py-5">
                                                <span class="font-size-lg">Add New:</span>
                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-shopping-cart-1"></i>
                                                    </span>
                                                    <span class="navi-text">Order</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="navi-icon flaticon2-calendar-8"></i>
                                                    </span>
                                                    <span class="navi-text">Members</span>
                                                    <span class="navi-label">
                                                        <span class="label label-light-danger label-rounded font-weight-bold">3</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="navi-icon flaticon2-telegram-logo"></i>
                                                    </span>
                                                    <span class="navi-text">Project</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="navi-icon flaticon2-new-email"></i>
                                                    </span>
                                                    <span class="navi-text">Record</span>
                                                    <span class="navi-label">
                                                        <span class="label label-light-success label-rounded font-weight-bold">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer pt-5 pb-4">
                                                <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More options</a>
                                                <a class="btn btn-clean font-weight-bold btn-sm d-none" href="#" data-toggle="tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                            </li>
                                        </ul>
                                        <!--end::Naviigation-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <!--begin::Item-->
                            <div class="mb-6">
                                <!--begin::Content-->
                                <div class="d-flex align-items-center flex-grow-1">
                                    <!--begin::Checkbox-->
                                    <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                        <input type="checkbox" value="1" />
                                        <span></span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column align-items-cente py-2 w-75">
                                            <!--begin::Title-->
                                            <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Platform Delivery (P1)</a>
                                            <!--end::Title-->
                                            <!--begin::Data-->
                                            <span class="text-muted font-weight-bold">SafeWojak ($WOJAK)</span>
                                            <!--end::Data-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Label-->
                                        <span class="label label-lg label-light-primary label-inline font-weight-bold py-4">Finished</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mb-6">
                                <!--begin::Content-->
                                <div class="d-flex align-items-center flex-grow-1">
                                    <!--begin::Checkbox-->
                                    <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                        <input type="checkbox" value="1" />
                                        <span></span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column align-items-cente py-2 w-75">
                                            <!--begin::Title-->
                                            <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Partnership Disclosure (P4)</a>
                                            <!--end::Title-->
                                            <!--begin::Data-->
                                            <span class="text-muted font-weight-bold">MoonBets ($MBET)</span>
                                            <!--end::Data-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Label-->
                                        <span class="label label-lg label-light-warning label-inline font-weight-bold py-4">Late</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mb-6">
                                <!--begin::Content-->
                                <div class="d-flex align-items-center flex-grow-1">
                                    <!--begin::Checkbox-->
                                    <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                        <input type="checkbox" value="1" />
                                        <span></span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column align-items-cente py-2 w-75">
                                            <!--begin::Title-->
                                            <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Full Team Disclosure (P3)</a>
                                            <!--end::Title-->
                                            <!--begin::Data-->
                                            <span class="text-muted font-weight-bold">NotElon ($NOTEL)</span>
                                            <!--end::Data-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Label-->
                                        <span class="label label-lg label-light-success label-inline font-weight-bold py-4">Confirming</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mb-6">
                                <!--begin::Content-->
                                <div class="d-flex align-items-center flex-grow-1">
                                    <!--begin::Checkbox-->
                                    <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                        <input type="checkbox" value="1" />
                                        <span></span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column align-items-cente py-2 w-75">
                                            <!--begin::Title-->
                                            <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">NFT Platform</a>
                                            <!--end::Title-->
                                            <!--begin::Data-->
                                            <span class="text-muted font-weight-bold">IntangibleTrash ($TRASH)</span>
                                            <!--end::Data-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Label-->
                                        <span class="label label-lg label-light-danger label-inline font-weight-bold py-4">Rejected</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end: Item-->
                            <!--begin: Item-->
                            <div class="">
                                <!--begin::Content-->
                                <div class="d-flex align-items-center flex-grow-1">
                                    <!--begin::Checkbox-->
                                    <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                        <input type="checkbox" value="1" />
                                        <span></span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column align-items-cente py-2 w-75">
                                            <!--begin::Title-->
                                            <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Airdrop Event</a>
                                            <!--end::Title-->
                                            <!--begin::Data-->
                                            <span class="text-muted font-weight-bold">SportsVCards ($VCARD)</span>
                                            <!--end::Data-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Label-->
                                        <span class="label label-lg label-light-warning label-inline font-weight-bold py-4">Late</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end: Item-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end: Card-->
                    <!--end: List Widget 10-->
                </div>
                <div class="col-xl-8">
                    <!--begin::Engage Widget 15-->
                    <div class="card card-custom">
                        <div class="card-body rounded p-0 d-flex bg-light">
                            <div class="d-flex flex-column flex-lg-row-auto w-auto w-lg-350px w-xl-450px w-xxl-650px py-10 py-md-14 px-10 px-md-20 pr-lg-0">
                                <h1 class="font-weight-bolder text-dark mb-0">Use SafeWojak to determine if a contract is</h1>
                                <div class="font-size-h4 mb-8">a rug, slow rug, honeypot, flash loan, and more.</div>
                                <!--begin::Form-->
                                <form class="d-flex flex-center py-2 px-6 bg-white rounded">
                                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <input type="text" class="form-control border-0 font-weight-bold pl-2" placeholder="Token contract address (token name for existing entries)" />
                                </form>
                                <!--end::Form-->
                            </div>
                            <div class="d-none d-md-flex flex-row-fluid bgi-no-repeat bgi-position-y-center bgi-position-x-left bgi-size-cover" style="background-image: url({{ asset('/images/wojak-crypto-token-scanner-bsc-smart-chain.png') }});"></div>
                        </div>
                    </div>
                    <!--end::Engage Widget 15-->
                    <!--begin::Base Table Widget 1-->
                    <div class="card card-custom gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder text-dark">Trending Token Contract Searches</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">Updated daily and aggregated by real searches</span>
                            </h3>
                            <div class="card-toolbar">
                                <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_1_1">7 Days</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_1_2">2 Days</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_1_3">1 Day</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-2 pb-0 mt-n3">
                            <div class="tab-content mt-5" id="myTabTables1">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_tab_pane_1_1" role="tabpanel" aria-labelledby="kt_tab_pane_1_1">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-vertical-center">
                                            <thead>
                                                <tr>
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-200px"></th>
                                                    <th class="p-0 min-w-100px"></th>
                                                    <th class="p-0 min-w-40px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/FairStake.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </th>
                                                    <td class="py-6 pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Fair Stake ($FAIR)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: May 29, 2021</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-100 mr-2">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-muted mr-2 font-size-sm font-weight-bold">71%</span>
                                                                <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                            </div>
                                                            <div class="progress progress-xs w-100">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 71%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/media/svg/misc/014-kickstarter.svg') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </th>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">KingCoin ($KING)</a>
                                                        <span class="text-muted font-weight-bold d-block">Amazing Templates</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-100 mr-2">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-muted mr-2 font-size-sm font-weight-bold">50%</span>
                                                                <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                            </div>
                                                            <div class="progress progress-xs w-100">
                                                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/TeamTrees.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">TeamTrees ($TREE)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: June 4, 2021</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-100 mr-2">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-muted mr-2 font-size-sm font-weight-bold">65%</span>
                                                                <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                            </div>
                                                            <div class="progress progress-xs w-100">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/BabyDoge.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </th>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">BabyDoge ($BDOGE)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: June 1, 2021</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-100 mr-2">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-muted mr-2 font-size-sm font-weight-bold">83%</span>
                                                                <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                            </div>
                                                            <div class="progress progress-xs w-100">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/SuperMission.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </th>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">SUPERMISSION ($SUPER)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: May 15, 2021</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-100 mr-2">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-muted mr-2 font-size-sm font-weight-bold">47%</span>
                                                                <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                            </div>
                                                            <div class="progress progress-xs w-100">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 47%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_tab_pane_1_2" role="tabpanel" aria-labelledby="kt_tab_pane_1_2">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-vertical-center">
                                            <thead>
                                                <tr>
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-200px"></th>
                                                    <th class="p-0 min-w-100px"></th>
                                                    <th class="p-0 min-w-40px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/BabyDoge.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </th>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">BabyDoge ($BDOGE)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: June 1, 2021</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-100 mr-2">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-muted mr-2 font-size-sm font-weight-bold">83%</span>
                                                                <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                            </div>
                                                            <div class="progress progress-xs w-100">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/SuperMission.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </th>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">SUPERMISSION ($SUPER)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: May 15, 2021</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-100 mr-2">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-muted mr-2 font-size-sm font-weight-bold">47%</span>
                                                                <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                            </div>
                                                            <div class="progress progress-xs w-100">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 47%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/FairStake.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </th>
                                                    <td class="py-6 pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Fair Stake ($FAIR)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: May 29, 2021</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-100 mr-2">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-muted mr-2 font-size-sm font-weight-bold">71%</span>
                                                                <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                            </div>
                                                            <div class="progress progress-xs w-100">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 71%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/TeamTrees.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">TeamTrees ($TREE)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: June 4, 2021</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-100 mr-2">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-muted mr-2 font-size-sm font-weight-bold">65%</span>
                                                                <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                            </div>
                                                            <div class="progress progress-xs w-100">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/media/svg/misc/014-kickstarter.svg') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </th>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">KingCoin ($KING)</a>
                                                        <span class="text-muted font-weight-bold d-block">Amazing Templates</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-100 mr-2">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-muted mr-2 font-size-sm font-weight-bold">50%</span>
                                                                <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                            </div>
                                                            <div class="progress progress-xs w-100">
                                                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_tab_pane_1_3" role="tabpanel" aria-labelledby="kt_tab_pane_1_3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-vertical-center">
                                            <thead>
                                                <tr>
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-200px"></th>
                                                    <th class="p-0 min-w-100px"></th>
                                                    <th class="p-0 min-w-40px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/TeamTrees.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">TeamTrees ($TREES)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: June 4, 2021</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-100 mr-2">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-muted mr-2 font-size-sm font-weight-bold">80%</span>
                                                                <span class="text-muted font-size-sm font-weight-bold">Safe</span>
                                                            </div>
                                                            <div class="progress progress-xs w-100">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/BabyDoge.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </th>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">BabyDoge ($BDOGE)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: June 1, 2021</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-100 mr-2">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-muted mr-2 font-size-sm font-weight-bold">85%</span>
                                                                <span class="text-muted font-size-sm font-weight-bold">Safe</span>
                                                            </div>
                                                            <div class="progress progress-xs w-100">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/SuperMission.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </th>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">SUPERMISSION ($SUPER)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: May 15, 2021</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-100 mr-2">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-muted mr-2 font-size-sm font-weight-bold">55%</span>
                                                                <span class="text-muted font-size-sm font-weight-bold">Malicious</span>
                                                            </div>
                                                            <div class="progress progress-xs w-100">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 55%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/FairStake.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </th>
                                                    <td class="py-6 pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Fair Stake ($FAIR)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: May 29, 2021</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-100 mr-2">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-muted mr-2 font-size-sm font-weight-bold">65%</span>
                                                                <span class="text-muted font-size-sm font-weight-bold">Questionable</span>
                                                            </div>
                                                            <div class="progress progress-xs w-100">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/media/svg/misc/014-kickstarter.svg') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </th>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">KingCoin ($KING)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: May 24, 2021</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-100 mr-2">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-muted mr-2 font-size-sm font-weight-bold">30%</span>
                                                                <span class="text-muted font-size-sm font-weight-bold">Malicious</span>
                                                            </div>
                                                            <div class="progress progress-xs w-100">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 30%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                        </div>
                    </div>
                    <!--end::Base Table Widget 1-->
                    <!--begin::Charts Widget 6-->
                    <div class="card card-custom gutter-b">
                        <!--begin::Header-->
                        <div class="card-header h-auto border-0">
                            <div class="card-title py-5">
                                <h3 class="card-label">
                                    <span class="d-block text-dark font-weight-bolder">Rekt Wojak Market Analysis</span>
                                    <span class="d-block text-muted mt-2 font-size-sm">Past 7 days on the Binance Smart Chain (BSC) Network</span>
                                </h3>
                            </div>
                            <div class="card-toolbar">
                                <span class="mr-5 d-flex align-items-center font-weight-bold">
                                <i class="label label-dot label-xl label-danger mr-2"></i>Rugs</span>
                                <span class="d-flex align-items-center font-weight-bold">
                                <i class="label label-dot label-xl label-warning mr-2"></i>Honeypots</span>
                                <span class="mr-5 d-flex align-items-center font-weight-bold">
                                <i class="label label-dot label-xl label-info mr-2"></i>Slow Rugs</span>
                                <span class="mr-5 d-flex align-items-center font-weight-bold">
                                <i class="label label-dot label-xl label-info mr-2"></i>Dumped</span>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 d-flex flex-column">
                                    <!--begin::Block-->
                                    <div class="bg-light-warning p-8 rounded-xl">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <div class="symbol symbol-circle symbol-white symbol-30 flex-shrink-0 mr-3">
                                                <div class="symbol-label">
                                                    <span class="svg-icon svg-icon-md svg-icon-danger">
                                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo3\dist/../src/media/svg/icons\Code\Lock-overturning.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="#000000" opacity="0.3"/>
                                                                    <path d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z" fill="#000000"/>
                                                                </g>
                                                            </svg><!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-size-sm font-weight-bold">948 BNB</div>
                                                <div class="font-size-sm text-muted">Rugged past 7 days</div>
                                            </div>
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <div class="symbol symbol-circle symbol-white symbol-30 flex-shrink-0 mr-3">
                                                <div class="symbol-label">
                                                    <span class="svg-icon svg-icon-md svg-icon-info">
                                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo3\dist/../src/media/svg/icons\Design\Bucket.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <path d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z" fill="#000000" fill-rule="nonzero" transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000) "/>
                                                                    <path d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z" fill="#000000" opacity="0.3"/>
                                                                </g>
                                                            </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-size-sm font-weight-bold">1728 BNB</div>
                                                <div class="font-size-sm text-muted">Honeypotted past 7 days</div>
                                            </div>
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <div class="symbol symbol-circle symbol-white symbol-30 flex-shrink-0 mr-3">
                                                <div class="symbol-label">
                                                    <span class="svg-icon svg-icon-md svg-icon-warning">
                                                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo3\dist/../src/media/svg/icons\Code\Time-schedule.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <path d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z" fill="#000000"/>
                                                                <path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="#000000" opacity="0.3"/>
                                                            </g>
                                                        </svg><!--end::Svg Icon--></span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-size-sm font-weight-bold">3259 BNB</div>
                                                <div class="font-size-sm text-muted">Slow rugged past 7 days</div>
                                            </div>
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <div class="symbol symbol-circle symbol-white symbol-30 flex-shrink-0 mr-3">
                                                <div class="symbol-label">
                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo3\dist/../src/media/svg/icons\General\Trash.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
                                                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                                                            </g>
                                                        </svg><!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-size-sm font-weight-bold">2294 BNB</div>
                                                <div class="font-size-sm text-muted">Dumped past 7 days</div>
                                            </div>
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-5">
                                            <div class="symbol symbol-circle symbol-white symbol-30 flex-shrink-0 mr-3">
                                                <div class="symbol-label">
                                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo3\dist/../src/media/svg/icons\Shopping\Calculator.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <rect fill="#000000" opacity="0.3" x="7" y="4" width="10" height="4"/>
                                                            <path d="M7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,20 C19,21.1045695 18.1045695,22 17,22 L7,22 C5.8954305,22 5,21.1045695 5,20 L5,4 C5,2.8954305 5.8954305,2 7,2 Z M8,12 C8.55228475,12 9,11.5522847 9,11 C9,10.4477153 8.55228475,10 8,10 C7.44771525,10 7,10.4477153 7,11 C7,11.5522847 7.44771525,12 8,12 Z M8,16 C8.55228475,16 9,15.5522847 9,15 C9,14.4477153 8.55228475,14 8,14 C7.44771525,14 7,14.4477153 7,15 C7,15.5522847 7.44771525,16 8,16 Z M12,12 C12.5522847,12 13,11.5522847 13,11 C13,10.4477153 12.5522847,10 12,10 C11.4477153,10 11,10.4477153 11,11 C11,11.5522847 11.4477153,12 12,12 Z M12,16 C12.5522847,16 13,15.5522847 13,15 C13,14.4477153 12.5522847,14 12,14 C11.4477153,14 11,14.4477153 11,15 C11,15.5522847 11.4477153,16 12,16 Z M16,12 C16.5522847,12 17,11.5522847 17,11 C17,10.4477153 16.5522847,10 16,10 C15.4477153,10 15,10.4477153 15,11 C15,11.5522847 15.4477153,12 16,12 Z M16,16 C16.5522847,16 17,15.5522847 17,15 C17,14.4477153 16.5522847,14 16,14 C15.4477153,14 15,14.4477153 15,15 C15,15.5522847 15.4477153,16 16,16 Z M16,20 C16.5522847,20 17,19.5522847 17,19 C17,18.4477153 16.5522847,18 16,18 C15.4477153,18 15,18.4477153 15,19 C15,19.5522847 15.4477153,20 16,20 Z M8,18 C7.44771525,18 7,18.4477153 7,19 C7,19.5522847 7.44771525,20 8,20 L12,20 C12.5522847,20 13,19.5522847 13,19 C13,18.4477153 12.5522847,18 12,18 L8,18 Z M7,4 L7,8 L17,8 L17,4 L7,4 Z" fill="#000000"/>
                                                            </g>
                                                        </svg><!--end::Svg Icon-->
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-size-sm font-weight-bold">8229 BNB Total Loss</div>
                                                <div class="font-size-sm text-muted">Avoidable BNB losses</div>
                                            </div>
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Block-->
                                </div>
                                <div class="col-8">
                                    <div id="kt_charts_widget_6_chart" style= "height: 250px; "></div>
                                </div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Charts Widget 6-->
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-xl-12">
                        </div>
                        <div class="col-xl-12">
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">									
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-lg-12 col-xxl-12">
                    <!--begin::Advance Table Widget 9-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder text-dark">Agents Stats</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                            </h3>
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-info font-weight-bolder font-size-sm mr-3">New Arrivals</a>
                                <a href="#" class="btn btn-danger font-weight-bolder font-size-sm">Create</a>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0 pb-3">
                            <div class="tab-content">
                                <!--begin::Table-->
                                <div class="table-responsive">
                                    <table class="table table-head-custom table-vertical-center table-head-bg table-borderless">
                                        <thead>
                                            <tr class="text-left">
                                                <th style="min-width: 250px" class="pl-7">
                                                    <span class="text-dark-75">products</span>
                                                </th>
                                                <th style="min-width: 120px">earnings</th>
                                                <th style="min-width: 100px">comission</th>
                                                <th style="min-width: 100px">company</th>
                                                <th style="min-width: 100px">rating</th>
                                                <th style="min-width: 100px"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="pl-0 py-8">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50 symbol-light mr-4">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/media/svg/avatars/001-boy.svg') }}" class="h-75 align-self-end" alt="" />
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Brad Simmons</a>
                                                            <span class="text-muted font-weight-bold d-block">HTML, JS, ReactJS</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$8,000,000</span>
                                                    <span class="text-muted font-weight-bold">In Proccess</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$520</span>
                                                    <span class="text-muted font-weight-bold">Paid</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Intertico</span>
                                                    <span class="text-muted font-weight-bold">Web, UI/UX Design</span>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('/media/logos/stars.png') }}" alt="image" style="width: 5rem" />
                                                    <span class="text-muted font-weight-bold d-block">Best Rated</span>
                                                </td>
                                                <td class="pr-0 text-right">
                                                    <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Offer</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pl-0 py-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50 symbol-light mr-4">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/media/svg/avatars/018-girl-9.svg') }}" class="h-75 align-self-end" alt="" />
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Jessie Clarcson</a>
                                                            <span class="text-muted font-weight-bold d-block">C#, ASP.NET, MS SQL</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$23,000,000</span>
                                                    <span class="text-muted font-weight-bold">Pending</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$1,600</span>
                                                    <span class="text-muted font-weight-bold">Late</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Agoda</span>
                                                    <span class="text-muted font-weight-bold">Houses &amp; Hotels</span>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('/media/logos/stars.png') }}" alt="image" style="width: 5rem" />
                                                    <span class="text-muted font-weight-bold d-block">Above Average</span>
                                                </td>
                                                <td class="pr-0 text-right">
                                                    <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Offer</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pl-0 py-8">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50 symbol-light mr-4">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/media/svg/avatars/047-girl-25.svg') }}" class="h-75 align-self-end" alt="" />
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Lebron Wayde</a>
                                                            <span class="text-muted font-weight-bold d-block">PHP, Laravel, VueJS</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$34,000,000</span>
                                                    <span class="text-muted font-weight-bold">Paid</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$6,700</span>
                                                    <span class="text-muted font-weight-bold">Paid</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">RoadGee</span>
                                                    <span class="text-muted font-weight-bold">Transportation</span>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('/media/logos/stars.png') }}" alt="image" style="width: 5rem" />
                                                    <span class="text-muted font-weight-bold d-block">Best Rated</span>
                                                </td>
                                                <td class="pr-0 text-right">
                                                    <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Offer</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pl-0 py-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50 symbol-light mr-4">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/media/svg/avatars/014-girl-7.svg') }}" class="h-75 align-self-end" alt="" />
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Natali Trump</a>
                                                            <span class="text-muted font-weight-bold d-block">Python, PostgreSQL, ReactJS</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,600,000</span>
                                                    <span class="text-muted font-weight-bold">Paid</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$14,000</span>
                                                    <span class="text-muted font-weight-bold">Pending</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">The Hill</span>
                                                    <span class="text-muted font-weight-bold">Insurance</span>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('/media/logos/stars.png') }}" alt="image" style="width: 5rem" />
                                                    <span class="text-muted font-weight-bold d-block">Average</span>
                                                </td>
                                                <td class="pr-0 text-right">
                                                    <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Offer</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Advance Table Widget 9-->
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-6">
                    
                </div>
                <div class="col-xl-6">
                    
                    <!--end::Base Table Widget 1-->
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-lg-4">
                    <!--begin::List Widget 8-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <h3 class="card-title font-weight-bolder text-dark">Trends</h3>
                            <div class="card-toolbar">
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-ver"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header pb-1">
                                                <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-shopping-cart-1"></i>
                                                    </span>
                                                    <span class="navi-text">Order</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-calendar-8"></i>
                                                    </span>
                                                    <span class="navi-text">Event</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-graph-1"></i>
                                                    </span>
                                                    <span class="navi-text">Report</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="navi-text">Post</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-writing"></i>
                                                    </span>
                                                    <span class="navi-text">File</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <!--begin::Item-->
                            <div class="mb-10">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45 symbol-light mr-5">
                                        <span class="symbol-label">
                                            <img src="{{ asset('/images/TeamTrees.png') }}" class="h-75 align-self-center" alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Text-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">TeamTrees ($TREE)</a>
                                        <span class="text-muted font-weight-bold">5 day ago</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Desc-->
                                <p class="text-dark-50 m-0 pt-5 font-weight-normal">A brief write up about the TeamTrees ($TREE) that fits within this section</p>
                                <!--end::Desc-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mb-10">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45 symbol-light mr-5">
                                        <span class="symbol-label">
                                            <img src="{{ asset('/images/BabyDoge.png') }}" class="h-75 align-self-center" alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Text-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">BabyDoge ($BDOGE)</a>
                                        <span class="text-muted font-weight-bold">5 day ago</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Desc-->
                                <p class="text-dark-50 m-0 pt-5 font-weight-normal">A brief write up about the BabyDoge ($BDOGE) that fits within this section</p>
                                <!--end::Desc-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45 symbol-light mr-5">
                                        <span class="symbol-label">
                                            <img src="{{ asset('/media/svg/misc/014-kickstarter.svg') }}" class="h-75 align-self-center" alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Text-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">SUPERMISSION ($SUPER)</a>
                                        <span class="text-muted font-weight-bold">5 day ago</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Desc-->
                                <p class="text-dark-50 m-0 pt-5 font-weight-normal">A brief write up about the SUPERMISSION ($SUPER) that fits within this section</p>
                                <!--end::Desc-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end: Card-->
                    <!--end::List Widget 8-->
                </div>
                <div class="col-lg-8">
                    <!--begin::Base Table Widget 2-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder text-dark">New Arrivals</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                            </h3>
                            <div class="card-toolbar">
                                <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_2_1">Month</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_2_2">Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_2_3">Day</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-2 pb-0 mt-n3">
                            <div class="tab-content mt-5" id="myTabTables2">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_tab_pane_2_1" role="tabpanel" aria-labelledby="kt_tab_pane_2_1">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-vertical-center">
                                            <thead>
                                                <tr>
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-140px"></th>
                                                    <th class="p-0 min-w-120px"></th>
                                                    <th class="p-0 min-w-40px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/TeamTrees.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">TeamTrees ($TREE)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: June 4, 2021</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">ReactJs, HTML</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">4600 Users</span>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/media/svg/misc/014-kickstarter.svg') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">KingCoin ($KING)</a>
                                                        <span class="text-muted font-weight-bold d-block">Amazing Templates</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">ReactJS, Ruby</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">354 Users</span>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/BabyDoge.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">BabyDoge ($BDOGE)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: June 1, 2021</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">Python, MySQL</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">7200 Users</span>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/SuperMission.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">SUPERMISSION ($SUPER)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: May 15, 2021</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">Laravel, Metronic</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">890 Users</span>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/FairStake.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Fair Stake ($FAIR)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: May 29, 2021</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">AngularJS, C#</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">6370 Users</span>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_tab_pane_2_2" role="tabpanel" aria-labelledby="kt_tab_pane_2_2">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-vertical-center">
                                            <thead>
                                                <tr>
                                                    <th class="p-0" style="width: 50px"></th>
                                                    <th class="p-0" style="min-width: 150px"></th>
                                                    <th class="p-0" style="min-width: 140px"></th>
                                                    <th class="p-0" style="min-width: 120px"></th>
                                                    <th class="p-0" style="min-width: 40px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/BabyDoge.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">BabyDoge ($BDOGE)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: June 1, 2021</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">Python, MySQL</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">7200 Users</span>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/SuperMission.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">SUPERMISSION ($SUPER)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: May 15, 2021</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">Laravel, Metronic</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">890 Users</span>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/FairStake.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Fair Stake ($FAIR)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: May 29, 2021</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">AngularJS, C#</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">6370 Users</span>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/TeamTrees.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">TeamTrees ($TREE)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: June 4, 2021</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">ReactJs, HTML</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">4600 Users</span>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/media/svg/misc/014-kickstarter.svg') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">KingCoin ($KING)</a>
                                                        <span class="text-muted font-weight-bold d-block">Amazing Templates</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">ReactJS, Ruby</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">354 Users</span>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_tab_pane_2_3" role="tabpanel" aria-labelledby="kt_tab_pane_2_3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-vertical-center">
                                            <thead>
                                                <tr>
                                                    <th class="p-0" style="width: 50px"></th>
                                                    <th class="p-0" style="min-width: 150px"></th>
                                                    <th class="p-0" style="min-width: 140px"></th>
                                                    <th class="p-0" style="min-width: 120px"></th>
                                                    <th class="p-0" style="min-width: 40px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/TeamTrees.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">TeamTrees ($TREE)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: June 4, 2021</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">ReactJs, HTML</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">4600 Users</span>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/BabyDoge.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">BabyDoge ($BDOGE)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: June 1, 2021</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">Python, MySQL</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">7200 Users</span>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/SuperMission.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">SUPERMISSION ($SUPER)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: May 15, 2021</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">Laravel, Metronic</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">890 Users</span>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/images/FairStake.png') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Fair Stake ($FAIR)</a>
                                                        <span class="text-muted font-weight-bold d-block">Liquidity first added on: May 29, 2021</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">AngularJS, C#</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">6370 Users</span>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('/media/svg/misc/014-kickstarter.svg') }}" class="h-75 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">KingCoin ($KING)</a>
                                                        <span class="text-muted font-weight-bold d-block">Amazing Templates</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">ReactJS, Ruby</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-muted font-weight-bold">354 Users</span>
                                                    </td>
                                                    <td class="text-right pr-0">
                                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Base Table Widget 2-->
                </div>
            </div>
            <!--end::Row-->
            <!--end::Dashboard-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->

@endsection

{{-- Styles Section --}}
@section('styles')
    <link href="{{ asset('css/pages/dashboard.css') }}" rel="stylesheet" type="text/css"/>
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/dashboard.js') }}" type="text/javascript"></script>
@endsection
