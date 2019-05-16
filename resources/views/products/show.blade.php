@extends('layouts.app')
@section('content')
    <!-- breadcrumb area -->
    <div class="breadcrumb-area bg-img pt-230 pb-152 default-overlay-2" style="background-image: url({{asset('public/images/bg/new_bg.jpg')}});background-size: cover">
        <div class="container">
            <div class="breadcrumb-content text-center">
                @foreach($brandGroups as $subCategories =>$products)
                @endforeach
                <h2 class="text-uppercase">{{$products[0]->sub_category->name}}</h2>
            </div>
        </div>
    </div>
    <!-- main-search start -->

    <!-- summary-info start -->

    <div class="service-area section-padding-1 gray-bg-4  pb-90" >
        <div class="container-fluid">

            @foreach($brandGroups as $subCategories =>$products)
                <div class="row mt-2">
                    <div class="col-md-12 text-right bg-secondary p-1" style="background: url('{{asset('public/images/bg/show_row.jpg')}}'); background-size: cover">
                        <h3 class="mr-5 text-white font-weight-bold  text-capitalize">{!! $subCategories !!}</h3>
                    </div>
                </div>

                <div class="row">
                    @foreach($products as $product)
                        @if(count($products) == 5)
                            <div class="col-lg-2 text-center col-md-6 col-sm-6">
                                @if($product->description == "")
                                    <a href="javascript:void(0)">
                                        <div class="single-service-wrap service-wrap-2 mb-30 text-center">
                                            <div class="single-service text-center service-style-2">
                                                <img alt="" class="img-fluid" src="{{asset('public/products/'.str_replace(' ','_',strtolower($products[0]->sub_category->name))."/".$product->name.".png")}}">
                                                <h4 class="text-uppercase">{{$product->name}}</h4>

                                            </div>
                                        </div>
                                    </a>
                                @else
                                    <a href="{{route('products.show',$product->id)}}">
                                        <div class="single-service-wrap service-wrap-2 mb-30 text-center">
                                            <div class="single-service text-center service-style-2">
                                                <img alt="" class="img-fluid" src="{{asset('public/products/'.str_replace(' ','_',strtolower($products[0]->sub_category->name))."/".$product->name.".png")}}">
                                                <h4 class="text-uppercase">{{$product->name}}</h4>

                                            </div>
                                        </div>
                                    </a>
                                @endif
                            </div>

                        @else
                            <div class="col-lg-3 text-center col-md-6 col-sm-6">
                                @if($product->description == "")
                                    <a href="javascript:void(0)">
                                        <div class="single-service-wrap service-wrap-2 mb-30 text-center">
                                            <div class="single-service text-center service-style-2">
                                                <img alt="" class="img-fluid" src="{{asset('public/products/'.str_replace(' ','_',strtolower($products[0]->sub_category->name))."/".$product->name.".png")}}">
                                                <h4 class="text-uppercase">{{$product->name}}</h4>

                                            </div>
                                        </div>
                                    </a>
                                @else
                                    <a href="{{route('products.show',$product->id)}}">
                                        <div class="single-service-wrap service-wrap-2 mb-30 text-center">
                                            <div class="single-service text-center service-style-2">
                                                <img alt="" class="img-fluid" src="{{asset('public/products/'.str_replace(' ','_',strtolower($products[0]->sub_category->name))."/".$product->name.".png")}}">
                                                <h4 class="text-uppercase">{{$product->name}}</h4>

                                            </div>
                                        </div>
                                    </a>
                                @endif
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach

        </div>
    </div>

@endsection