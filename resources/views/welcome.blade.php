@extends('layouts.app')
@section('content')

    <!-- Slider Start -->
    <div class="slider-area height-100vh slider-padding-1 pt-100 pb-100 d-flex align-items-center bg-img" style="background-image: url({{asset('public/images/bg/bg.jpg')}});">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="slider-text-8">
                        <h1 class="mb-3">Mega World Centre</h1>
                        {{--                        <p class="">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctelit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
                        <div class="slider-btn-6 mt-50">
                            <a class="default-btn animated btn-hover" href="javascript:void(0)">Contact us now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-search start -->

    <!-- summary-info start -->
    {{--<div class="summary-info sidebar-active">
        <div class="wrap-sidebar">
            <div class="sidebar-nav-icon">
                <button class="op-sidebar-close"><span class="ti-close"></span></button>
            </div>
            <div class="summary-info-all">
                <div class="summary-logo">
                    <a href="index.html">
                        <img src="assets/img/logo/logo-3.png" alt="">
                    </a>
                </div>
                <div class="summary-list-wrap">
                    <p>Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    <div class="summary-list">
                        <ul>
                            <li><i class="ti-hand-point-right"></i>Project Management</li>
                            <li><i class="ti-hand-point-right"></i>Portfolio Showcasing</li>
                            <li><i class="ti-hand-point-right"></i>Blogs & Content Sharing</li>
                            <li><i class="ti-hand-point-right"></i>Social Work Management</li>
                            <li><i class="ti-hand-point-right"></i>eCommerce Shop Management</li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-contact">
                    <h5>Fell Free To contact Us</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor incididu.</p>
                    <div class="sidebar-contact-list">
                        <ul>
                            <li><i class="ti-location-pin"></i>123 - 45678910</li>
                            <li><i class="ti-email"></i><a href="#">info@example.com</a></li>
                            <li><i class="ti-location-pin"></i>115 5th Ave, New York</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}

    <div class="works-area pt-215 pb-245">
        <div class="container">
            <div class="section-title text-center mb-78">
                <h2>About Us</h2>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="works-video-img mr-20">
                        <img src="{{asset('public/img/banner/banner-4.jpg')}}" alt="">
                        <div class="works-video">
                            <a class="video-btn video-popup" href="http://localhost/megaWorldProject/public/Hosanna by KODA.mp4/">
                                <i class="ti-control-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="tools-content ml-20">
                        <h4>Our Mission</h4>
                        <p style="font-size: 15px; line-height: 20px">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulp utate cursus a sit amet mauris accumsan velit.</p>
                    </div>

                    <div class="tools-content ml-20">
                        <h4 class="mt-10">Our Vision</h4>
                        <p style="font-size: 15px; line-height: 20px">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulp utate cursus a sit amet mauris accumsan velit.</p>
                    </div>

                    <div class="tools-content ml-20">
                        <h4 class="mt-10">Our Values</h4>
                        <p style="font-size: 15px; line-height: 20px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci expedita ipsam ipsum iure optio qui vero. Ad asperiores ducimus ea excepturi iste magni odit quas quo sit suscipit. Dolor, voluptatem?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-area section-padding-1 gray-bg-4 pt-20 pb-90">
        <div class="container-fluid">
            <div class="section-title text-center mb-78">
                <h2>Our Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">

                    <div class="single-service-wrap service-wrap-2 mb-30 text-center">
                        <div class="single-service service-style-2">
                            <img class="img-fluid" height="auto" width="150" src="{{asset('public/images/bg/azzura.jpg')}}">
                            <h4>Felce Azzurra Products</h4>
                            <p>
                                Bath and Body Products types with different fragrances from Italy consisting of Paglieri, Powder, Soaps, Toilet soaps, Deodorant, Talco, Talcum...
                            </p>
                            <a href="{{route('sub_categories.show',1)}}" class="btn btn-sm btn-primary mt-55"> Read More    </a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-service-wrap service-wrap-2 mb-30 text-center">
                        <div class="single-service service-style-2">
                            <img class="img-fluid" height="auto" width="150" src="{{asset('public/images/bg/solar.jpg')}}">
                            <h4>Solar Panels</h4>
                            <p>Solar panel is a set of solar photovoltaic modules electrically connected & fixed on a structure to provide solar energy.</p>
                            <a href="{{route('solar_systems')}}" class="btn btn-sm btn-primary mt-30"> Read More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-service-wrap service-wrap-2 mb-30 text-center">
                        <div class="single-service service-style-2">
                            <img class="img-fluid" height="auto" width="150" src="{{asset('public/images/bg/consult.jpg')}}">
                            <h4>Samsung Customer Care</h4>
                            <p>Mega World Centre is a multinational (IT) service, consulting & business solutions in Ghana.</p>
                            <a href="{{route('sumsung_services')}}" class="btn btn-sm btn-primary mt-30"> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="single-service-wrap service-wrap-2 mb-30 text-center">
                        <div class="single-service service-style-2">
                            <img class="img-fluid" height="auto" width="150" src="{{asset('public/images/bg/hosting.jpg')}}">
                            <h4>Web Hosting & Domain</h4>
                            <p>Compare 2014's Lowest Priced Hosts. Award-winning Web Hosting - $6.50/mo
                            </p>

                            <a href="https://www.megaworldcentre.net" class="btn btn-sm btn-primary mt-50" target="_blank">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection