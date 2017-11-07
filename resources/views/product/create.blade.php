@extends('layouts.app')

@section('content')
    <div class="container">

    <div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>create New Product</h3>

            </div>
            <div class="panel-body">
                <form action="{{route('product.store')}}" method="post">
                    {{csrf_field()}}
                    <input type="text" name="name"  placeholder="product name" class="form-control">
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                    <input type="number" name="price"  placeholder="product price" class="form-control">
                    <select name="category">
                        @foreach($categories as $category)
                            <option value="{!! $category->id !!}" id="">{!! $category->name !!}</option>
                        @endforeach
                    </select>
                    <input type="submit" class="btn btn-success">


                </form>

            </div>

        </div>
    </div>
</div>
        <div class="container">

@endsection
