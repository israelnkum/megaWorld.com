@extends('layouts.app')
@section('content')
    <div class="container mt-150">
        <div class="row">
            <div class="col-md-4">
                <form action="{{route('sub_categories.store')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input name="name" class="form-control" type="text" placeholder="Category Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
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