@extends('layouts.app')
@section('content')
    <!-- breadcrumb area -->
    <div class="breadcrumb-area bg-img pt-230 pb-152 default-overlay-2" style="background-image: url({{asset('public/images/bg/new_bg.jpg')}});background-size: cover">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="text-uppercase">Search Result</h2>
            </div>
        </div>
    </div>
    <!-- main-search start -->


    <div class="service-area section-padding-1 gray-bg-4  pb-90" >
        <div class="container-fluid">

            @foreach($data as $subCategories =>$products)
                <div class="row mt-2">
                    <div class="col-md-12 text-right bg-secondary p-1" style="background: url('{{asset('public/images/bg/show_row.jpg')}}'); background-size: cover">
                        <h3 class="mr-5 text-white font-weight-bold  text-capitalize">{!! $subCategories !!}</h3>
                    </div>
                </div>

                <div class="row">
                    @foreach($products as $pro)
                        @foreach($pro->products as $p)
                            @if($p->description == "")
                                <div class="col-lg-3 text-center col-md-6 col-sm-6">
                                    <a href="javascript:void(0)">
                                        <div class="single-service-wrap service-wrap-2 mb-30 text-center">
                                            <div class="single-service text-center service-style-2">
                                                <img alt="" class="img-fluid" src="{{asset('public/products/'.str_replace(' ','_',strtolower($subCategories))."/".$p->name.".png")}}">
                                                <h4 class="text-uppercase">{{$p->name}}</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @else
                                <div class="col-lg-3 text-center col-md-6 col-sm-6">
                                    <a href="{{route('products.show',$p->id)}}">
                                        <div class="single-service-wrap service-wrap-2 mb-30 text-center">
                                            <div class="single-service text-center service-style-2">
                                                <img alt="" class="img-fluid" src="{{asset('public/products/'.str_replace(' ','_',strtolower($subCategories))."/".$p->name.".png")}}">
                                                <h4 class="text-uppercase">{{$p->name}}</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            @endforeach

        </div>
    </div>
@endsection