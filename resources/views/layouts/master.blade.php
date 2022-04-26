<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template"/>
    <meta name="author" content="potenzaglobalsolutions.com"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    @include('layouts.head')
</head>

<body>

<div class="wrapper" style="font-family: 'Cairo', sans-serif">

    <!--=================================
preloader -->

    {{--<div id="pre-loader">
        --}}{{--        <img src="{{ URL::asset('assets/images/pre-loader/loader-01.svg') }}" alt="">--}}{{--
        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="12" viewBox="0 0 44 12">
            <defs>
                <style>
                    .dot {
                        transform-origin: 50% 50%;
                        -webkit-transform-origin: 50% 50%;
                        -webkit-animation: bouncedelay 1s infinite ease-in-out both;
                        animation: bouncedelay 1s infinite ease-in-out both;
                    }

                    .dot-1 {
                        -webkit-animation-delay: -.54s;
                        animation-delay: -.54s
                    }

                    .dot-2 {
                        -webkit-animation-delay: -.48s;
                        animation-delay: -.48s
                    }

                    .dot-3 {
                        -webkit-animation-delay: -.32s;
                        animation-delay: -.32s
                    }

                    @-webkit-keyframes bouncedelay {
                        0%, 80%, 100% {
                            -webkit-transform: scale(0.8);
                        }
                        40% {
                            -webkit-transform: scale(1);
                        }
                    }

                    @keyframes bouncedelay {
                        0%, 80%, 100% {
                            transform: scale(0.8);
                        }
                        40% {
                            transform: scale(1);
                        }
                    }
                </style>
            </defs>
            <circle class="dot dot-1" cx="6" cy="6" r="6"/>
            <circle class="dot dot-2" cx="22" cy="6" r="6"/>
            <circle class="dot dot-3" cx="38" cy="6" r="6"/>
        </svg>
    </div>--}}

    <!--=================================
preloader -->

@include('layouts.main-header')
@include('layouts.main-sidebar')

<!--=================================
 Main content -->
    <!-- main-content -->
    <div class="content-wrapper">

        @yield('page-header')
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="mb-0" style="font-family: 'Cairo', sans-serif">@yield('PageTitle')</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"
                                                       class="default-color">الرئيسية</a></li>
                        <li class="breadcrumb-item active">@yield('PageTitle')</li>
                    </ol>
                </div>
            </div>
            {{--<div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <h4 class="card-text text-dark">17</h4>
                                    <h3>عدد الإجازات</h3>
                                </div>
                                <div class="float-right text-right">
                                     <span class="text-primary">
                                        <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> التفاصيل
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <h4 class="card-text text-dark">13</h4>
                                    <h3>عدد الشيوخ</h3>
                                </div>
                                <div class="float-right text-right">
                                     <span class="text-primary">
                                        <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> التفاصيل
                            </p>
                        </div>
                    </div>
                </div>
            </div>--}}

        @yield('content')

        <!--=================================
 wrapper -->

            <!--=================================
 footer -->

            @include('layouts.footer')
        </div><!-- main content wrapper end-->
    </div>
</div>
</div>

<!--=================================
footer -->

@include('layouts.footer-scripts')


</body>

</html>
