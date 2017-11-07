@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset">
        <div class="panel-heading">
            <h3>Product  Name: {{$product->name}}</h3>
            <h3>Product Description: {{$product->description}}</h3>
            <h3>Product Price : {{$product->price}}</h3>
            <h3>Category : {{$product->category->name}}</h3>
            <h3>created time : {{$product->created_at}}</h3>
            <h3>categorie : {{$product->updated_at}}</h3>

        </div>
    </div>
</div>


@endsection