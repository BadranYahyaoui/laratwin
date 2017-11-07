@extends('layouts.master')

@section('content')
    <div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>create New categorie</h3>

                </div>
                <div class="panel-body">
                    <form action="{{route('category.store')}}" method="post">
                        {{csrf_field()}}
                        <input type="text" name="name"  placeholder="category name" class="form-control">
                        <input type="submit" class="btn btn-success">


                    </form>

                </div>

            </div>
        </div>
    </div>
    </div>

@endsection
