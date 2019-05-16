@extends('layouts.app')
@section('content')
    <!-- Slider Start -->
    <div class="slider-area height-100vh slider-padding-1 pt-100 pb-100 d-flex align-items-center bg-img" style="background-image: url({{asset('public/images/bg/about.jpg')}});">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-text-8">
                        <h1 class="">Mega World Centre</h1>
                        <p class="">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctelit consequat ipsum, nec sagittis sem nibh id elit.</p>
                        <div class="slider-btn-6 mt-30">
                            <a class="default-btn animated btn-hover" href="about-us.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{route('categories.store')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input name="name" class="form-control" type="text" placeholder="Category Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <button class="btn btn-primary p-1 btn-block pb-1" type="submit">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection