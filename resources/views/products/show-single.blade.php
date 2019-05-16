@extends('layouts.app')
@section('content')
    <!-- breadcrumb area -->
    <div class="breadcrumb-area bg-img pt-25 pb-25 over" style="background-image: url({{asset('public/images/bg/single_bg.jpg')}});">
        <div class="container justify-content-between align-items-center">
            <div class="breadcrumb-content">
                <div class="row">
                    <div class="col-md-6 text-right">
                        <img class="img-fluid" height="auto" width="300" src="{{asset('public/products/'.str_replace(' ','_',strtolower($products[0]->sub_category->name))."/".$products[0]->name.".png")}}">
                    </div>
                    <div class="col-md-6 text-left">
                        <h5 class="text-capitalize text-white mt-150">{{$products[0]->sub_category->name}}</h5>
                        <h2 class="text-capitalize text-white">{{$products[0]->name}}</h2>
                        <h5 class="text-capitalize text-white">{{$products[0]->description}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-search start -->

    <!-- summary-info start -->

    <div class="works-area pt-20 pb-20">
        <div class="container">
            <div class="row d-flex align-items-center bg-white">
                <div class="col-lg-6 col-md-6">
                    <div class="tools-content ml-20">
                        <h3 class="font-weight-bold">Fragrance</h3>
                        <p style="font-size: 15px; line-height: 20px; font-weight: normal" class="text-dark">
                            {!! nl2br($products[0]->fragrance)!!}
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="mr-20">
                        <img class="img-fluid" src="{{asset('public/formula_fragrance/'.str_replace(' ','_',strtolower($products[0]->sub_category->name))."/".str_replace(' ','_',strtolower($products[0]->name))."_fragrance.jpg")}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="works-area pt-10 pb-245">
        <div class="container">
            <div class="row d-flex align-items-center bg-white">
                <div class="col-lg-6 col-md-6">
                    <div class="tools-content ml-20">
                        <h3 class="font-weight-bold">Formula</h3>
                        <p style="font-size: 15px; line-height: 20px; font-weight: normal" class="text-dark">
                            {{$products[0]->formula}}
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="mr-20">
                        <img class="img-fluid" src="{{asset('public/formula_fragrance/'.str_replace(' ','_',strtolower($products[0]->sub_category->name))."/".str_replace(' ','_',strtolower($products[0]->name))."_formula.png")}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection