<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mega World Centre</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href=/img/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/responsive.css')}}">
    <script src="{{asset('public/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body class="wrapper" style="background: ghostwhite">
<!-- header start -->
<header class="header-area transparent-bar sticky-bar header-padding header-black header-hm6 mobile-menu-black">
    <div class="container-fluid">
        <div class="header-wrap header-flex">
            <div class="logo mt-45 logo-hm8">
                <a href="{{route('welcome')}}">
                    Mega World Centre
                </a>
            </div>
            <div class="main-menu">
                <nav>
                    <ul>
                        <li>
                            <a href="{{route('welcome')}}">home</a>
                        </li>
                        <li><a href="javascript:void(0)">Products</a>
                            <ul class="mega-menu mega-menu-white-bg">
                                <li>
                                    <ul>
                                        <li class="mega-menu-title"><a href="javascript:void(0)" class="font-weight-bold">Body care</a></li>
                                        @foreach($bodyCare as $sub)
                                            <li>
                                                <a style="line-height: 1px;" href="{{route('sub_categories.show',$sub->id)}}">{{$sub->name}}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li class="mega-menu-title"><a href="javascript:void(0)" class="font-weight-bold">Home Care</a></li>
                                        @foreach($homeCare as $sub)
                                            <li>
                                                <a style="line-height: 1px;" href="{{route('sub_categories.show',$sub->id)}}">{{$sub->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <ul >
                                        <li class="mega-menu-title mb-5"><a href="javascript:void(0)" class="font-weight-bold">Cleaning Line</a></li>
                                        @foreach($cleaningLine as $sub)
                                            <li>
                                                <a style="line-height: 1px;" href="{{route('sub_categories.show',$sub->id)}}">{{$sub->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <ul >
                                        <li class="mega-menu-title mb-5"><a href="javascript:void(0)" class="font-weight-bold">Laundry Line</a></li>
                                        @foreach($laundryLine as $sub)
                                            <li>
                                                <a style="line-height: 1px;" href="{{route('sub_categories.show',$sub->id)}}">{{$sub->name}}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('solar_systems')}}">Solar Systems</a>
                        </li>
                        <li>
                            <a href="https://www.megaworldcentre.net/" target="_blank">Web Hosting</a>
                        </li>
                        <li>
                            <a href="{{route('sumsung_services')}}">Services</a>
                        </li>
                        <li>
                            <a href="{{route('contact_us')}}">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-right-wrap mt-50">
                <div class="header-search mr-20">
                    <button class="sidebar-trigger-search">
                        <span class="ti-search"></span>
                    </button>
                </div>
                {{--<div class="bar-icon">
                    <button class="header-navbar-active">
                        <span class="ti-menu"></span>
                    </button>
                </div>--}}
            </div>
        </div>
        <div class="mobile-menu-area">
            <div class="mobile-menu">
                <nav id="mobile-menu-active">
                    <ul class="menu-overflow">
                        <li>
                            <a href="{{route('welcome')}}">home</a>
                        </li>
                        <li><a href="javascript:void(0)">Products</a>
                            <ul class="mega-menu mega-menu-white-bg">
                                <li>
                                    <ul>
                                        <li class="mega-menu-title"><a href="javascript:void(0)" class="font-weight-bold">Body care</a></li>
                                        @foreach($bodyCare as $sub)
                                            <li>
                                                <a style="line-height: 1px;" href="{{route('sub_categories.show',$sub->id)}}">{{$sub->name}}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li class="mega-menu-title"><a href="javascript:void(0)" class="font-weight-bold">Home Care</a></li>
                                        @foreach($homeCare as $sub)
                                            <li>
                                                <a style="line-height: 1px;" href="{{route('sub_categories.show',$sub->id)}}">{{$sub->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <ul >
                                        <li class="mega-menu-title mb-5"><a href="javascript:void(0)" class="font-weight-bold">Cleaning Line</a></li>
                                        @foreach($cleaningLine as $sub)
                                            <li>
                                                <a style="line-height: 1px;" href="{{route('sub_categories.show',$sub->id)}}">{{$sub->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <ul >
                                        <li class="mega-menu-title mb-5"><a href="javascript:void(0)" class="font-weight-bold">Laundry Line</a></li>
                                        @foreach($laundryLine as $sub)
                                            <li>
                                                <a style="line-height: 1px;" href="{{route('sub_categories.show',$sub->id)}}">{{$sub->name}}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('solar_systems')}}">Solar Systems</a>
                        </li>
                        <li>
                            <a href="https://www.megaworldcentre.net/" target="_blank">Web Hosting</a>
                        </li>
                        <li>
                            <a href="{{route('sumsung_services')}}">Services</a>
                        </li>
                        <li>
                            <a href="{{route('contact_us')}}">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<div class="main-search-active">
    <div class="sidebar-search-icon">
        <button class="search-close"><span class="ti-close"></span></button>
    </div>
    <div class="sidebar-search-input">
        <form action="{{route('searchResult')}}" method="post">
            @csrf
            <div class="form-search">
                <input required id="search" class="input-text" name="search" placeholder="Enter product name to Search" type="text">
                <button>
                    <i class="ti-search"></i>
                </button>
            </div>
        </form>
    </div>
</div>
@yield('content')
<footer class="footer-area theme-bg pt-70 pb-50">
    <div class="container">
        <div class="footer-top border-bottom-1">
            <div class="row">
                <div class="col-12">
                    <div class="support-text text-center">
                        <h2>Always Ready to Help You 24/7</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle pt-65">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <div class="footer-widget mb-40">
                        <div class="footer-title mb-20">
                            <h4>contact Us</h4>
                        </div>
                        <ul>

                            <li class="d-inline">

                                <p class="text-white">
                                    <i class="ti-mobile text-white mr-2"></i>
                                    031 203 41 16,
                                    +233 203 070 001
                                </p>
                            </li>
                        </ul>
                        <ul>
                            <li class="d-inline-block"><i class="ti-email text-white mr-2"></i></li>
                            <li class="d-inline-block">
                                <p class="text-white">
                                    P.O. Box AX 369,Takordi-Ghana W/A
                                </p>
                            </li>
                        </ul>
                        <ul>
                            <li class="d-inline-block"><i class="ti-location-pin text-white mr-2"></i></li>
                            <li class="d-inline-block">
                                <p class="text-white">
                                    Anthony Mosi Street Apowa
                                    HNo WR20A/01
                                </p>
                            </li>
                        </ul>
                        <ul>
                            <li class="d-inline-block"><i class="ti-email text-white mr-2"></i></li>
                            <li class="d-inline-block">
                                <p class="text-white">
                                    info@megaworldcentre.com
                                </p>
                            </li>
                        </ul>

                        <ul>
                            <li class="d-inline-block"><i class="ti-world text-white mr-2"></i></li>
                            <li class="d-inline-block">
                                <p class="text-white">
                                    www.megaworldcentre.com
                                </p>
                            </li>
                        </ul>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"> <i class="ti-facebook"></i></a></li>
                                <li><a href="#"> <i class="ti-instagram"></i></a></li>
                                <li><a href="#"> <i class="ti-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom pt-25">
            <div class="row">
                <div class="col-12">
                    <div class="copyright text-center">
                        <p>
                            ©
                            <a href="#">Mega World Centre Ghana Limited</a>
                            . All Right Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- all js here -->
<script src="{{asset('public/js/vendor/jquery-1.12.0.min.js')}}"></script>
<script src="{{asset('public/js/popper.js')}}"></script>
<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/js/ajax-mail.js')}}"></script>
<script src="{{asset('public/js/plugins.js')}}"></script>
<script src="{{asset('public/js/main.js')}}"></script>
</body>
</html>
