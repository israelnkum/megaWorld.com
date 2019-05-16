@extends('layouts.app')
@section('content')
    <!-- breadcrumb area -->
    <div class="breadcrumb-area bg-img pt-230 pb-152 default-overlay-2" style="background-image: url({{asset('public/images/bg/contact-us.jpg')}});background-size: cover">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="text-uppercase">Contact Us</h2>
            </div>
        </div>
    </div>
    <!-- main-search start -->
    <div class="contact-area pt-15">
        <div class="pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="contact-info-area">
                            <h2>Contact</h2>
                            <p>Send a message, call us or come to our office</p>
                            <div class="contact-info-wrap">
                                <div class="single-contact-info">
                                    <div class="contact-info-icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <p>Anthony Mosi Street Apowa
                                            HNo WR20A/01</p>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="contact-info-icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <p> 031 203 41 16,
                                            +233 203 070 001</p>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="contact-info-icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <p><a href="mailto:info@megaworldcentre.com">info@megaworldcentre.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="pl-85">
                            <div class="contact-from contact-shadow">
                                <form id="contact-form" action="" method="post">
                                    <input title="Enter your name" required name="name" type="text" placeholder="Name">
                                    <input title="Enter your email address" required name="email" type="email" placeholder="Email">
                                    <textarea title="Enter your message" name="message" required placeholder="Your message"></textarea>
                                    <input class="submit" type="submit" value="Send Message">
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection