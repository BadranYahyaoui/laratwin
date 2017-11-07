@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard | Dear  {{ Auth::user()->name }} u can chek your Panier ha za7i <a
                            href="{{route('panier')}}">ici</a> </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        @forelse($products as $product)

                            <div class="panel panel-primary">
                                <div class="panel-heading"> {{$product->id}} || {{$product->nom}} </div>
                                <div class="panel-body">
                                    <b>Product Name :</b> {{$product->nom}}  <br>
                                    <b>Product Description :</b> {{$product->description}}  <br>
                                    <b>Product Category :</b> {{$product->category->name}}  <br>
                                    <b>Product price :</b> {{$product->price}}  <br>
                                    <b>Creation Date:</b>{{$product->created_at}}  <br>
                                    <b>Edit Date :</b>{{$product->updated_at}}  <br>


                                    @if(Auth::user()->products->contains($product->id))
                                        <a href="{{ route('remove-from-cart', $product->id) }}" class="btn btn-danger">remove from cart</a>
                                    @else
                                        <a href="{{ route('products-user', $product->id) }}" class="btn btn-primary">add to cart</a>
                                    @endif
                                </div>
                            </div>
                                    @empty
                                        <p>No product available ,Our stock is empty</p>





                        @endforelse

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
