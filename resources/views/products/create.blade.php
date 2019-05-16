@extends('layouts.app')
@section('content')
    <div class="container mt-150">
        <div class="row">
            <div class="col-md-4">
                <form action="{{route('products.store')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input name="name" class="form-control" required type="text" placeholder="Product Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <select class="form-control" required name="sub_category_id">
                                    @foreach($subCategory as $sub)
                                    <option value="">Select Category</option>
                                    <option value="{{$sub->id}}">{{$sub->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <select class="form-control" required name="brand_id">
                                @foreach( $brandName as $name)
                                    <option value="">Select Brand</option>
                                    <option value="{{$name->name}}">{{$name->name}}</option>
                                @endforeach
                            </select>
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