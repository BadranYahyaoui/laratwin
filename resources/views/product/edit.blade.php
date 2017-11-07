@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-offset">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>create New product</h3>

                    </div>
                    <div class="panel-body">
                        <form action="{{route('product.update',$product)}}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            {{csrf_field()}}
                            <div class="form-group">
                                <h3>Name : </h3>
                                <input type="text" placeholder="Regular" class="form-control" name="name"
                                       value="{{$product->name}}">
                                <h3>Description : </h3>

                                <textarea name="description" id="" cols="30"
                                          rows="10">{{$product->description}}</textarea>
                                <h3>Price : </h3>

                                <input type="number" placeholder="Regular" class="form-control" name="price"
                                       value="{{$product->price}}">
                                <h3>Categories : </h3>

                                <select name="category">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" id=""
                                                {{ $product->category->id == $category->id ? 'selected' : '' }}

                                        >
                                            {!! $category->name !!}</option>
                                    @endforeach

                                </select>
                                <br>
                                <br>
                                <input type="submit" class="btn btn-success" value="update">

                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection




