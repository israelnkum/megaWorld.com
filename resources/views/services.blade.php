@extends('layouts.app')
@section('content')
    <!-- breadcrumb area -->
    <div class="breadcrumb-area bg-img pt-230 pb-152 default-overlay-2" style="background-image: url({{asset('public/images/bg/customer_care.jpg')}});background-size: cover">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="text-uppercase">Samsung customer care Centre</h2>
            </div>
        </div>
    </div>
    <!-- main-search start -->
    <div class="works-area pt-80 pb-245">
        <div class="container">
            <div class="section-title text-center mb-25">
                <h2>What We Do</h2>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <div class="tools-content ml-20 text-dark">
                        <p style="font-size: 15px; font-weight: 500; line-height: 20px" class="mb-5  text-dark">
                            The Samsung Customer Service Centre is into the Sales and repairs of all Samsung Electronics product and other brands such as Chigo, Gamma LG etc.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="works-area pt-20 pb-245">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="works-video-img mr-20">
                        <img src="{{asset('public/images/bg/phone.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="tools-content ml-20 text-dark">
                        <h5  class="mb-5 display-4 text-dark">
                            We Sell all Kinds of Sumsung Phones
                        </h5>
                    </div>
                </div>
            </div>

            <div class="row pt-150 d-flex align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="tools-content ml-20 text-dark">
                        <h5  class="mb-5 display-4 text-dark">
                            We Repair all Kinds of Sumsung Phones
                        </h5>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="works-video-img mr-20">
                        <img src="{{asset('public/images/bg/repairs.jpg')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="row pt-150 d-flex align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="works-video-img mr-20">
                        <img src="{{asset('public/images/bg/electronic.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="tools-content ml-20 text-dark">
                        <h5  class="mb-5 display-4 text-dark">
                            We also Sell all Kinds of Sumsung Products
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection