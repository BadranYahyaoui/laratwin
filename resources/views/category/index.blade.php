{{--@extends('layouts.master')--}}

{{--@section('content')--}}

    <div class="col-md-12">


        <table class="table">
            <thead>
            <tr>
                <th class="text-center">#</th>
                <th>Name</th>
                <th>Created at</th>
                <th>Updated at</th>

                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)

                <tr>
                    <td class="text-center">{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->created_at}}</td>
                    <td>{{$category->updated_at}}</td>


                    <td class="td-actions text-right">
                        <a type="button" rel="tooltip" title="View Detail" class="btn btn-info btn-simple btn-xs" href="{{route('category.show',$category->id)}}">   <i class="fa fa-user"></i> detail </a>

                        <a type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs" href="{{route('category.edit',$category)}}">  <i class="fa fa-edit"></i>edit</a>

                        <form action="{{route('category.destroy',$category)}}" method="post" >
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

{{--@endsection--}}