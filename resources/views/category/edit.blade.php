{{--@extends('layouts.master')--}}

{{--@section('content')--}}



    <div class="row">
        <div class="col-md-offset-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>create New Category</h3>

                </div>
                <div class="panel-body">
                    <form action="{{route('category.update',$category)}}" method="post">
                        <input type="hidden" name="_method" value="PUT">
                        {{csrf_field()}}
                        <div class="form-group">
                            <h3>Name : </h3>
                            <input type="text" placeholder="Regular" class="form-control" name="name" value="{{$category->name}}">
                            <input type="submit" class="btn btn-success" value="update">
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

{{--@endsection--}}