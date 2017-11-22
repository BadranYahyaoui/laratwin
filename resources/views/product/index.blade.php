@extends('layouts.master')

@section('content')
<div class="container">


<div class="col-md-12">
    <a href="{{route('product.create')}}">Create New Product</a>

    <table class="table">
        <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Name</th>
            <th>Description</th>
            <th>price</th>
            <th>category</th>
            <th>Created at</th>
            <th>Updated at</th>

            <th class="text-center">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)

            <tr>
                <td class="text-center">{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>
                    @if(!empty($product->category))
                    {{$product->category->name }}
                        @else
                        No category has been associated
                    @endif
                </td>
                <td>{{$product->created_at}}</td>
                <td>{{$product->updated_at}}</td>


                <td class="td-actions text-right">
                    <a type="button" rel="tooltip" title="View Detail" class="btn btn-info btn-simple btn-xs" href="{{route('product.show',$product->id)}}">   <i class="fa fa-user"></i> detail </a>

                    <a type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs" href="{{route('product.edit',$product)}}">  <i class="fa fa-edit"></i>edit</a>

                    <form action="{{route('product.destroy',$product)}}" method="post" >
                        <input type="hidden" name="_method" value="DELETE">
                        {{csrf_field()}}
                        <button type="submit" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs" ><i class="fa fa-times"></i>delete</button>
                    </form>



                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

</div>
</div>
@endsection