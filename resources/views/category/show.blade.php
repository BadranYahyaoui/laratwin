{{--@extends('layouts.master')--}}

{{--@section('content')--}}

    <div class="row">
        <div class="col-md-6 col-md-offset">
            <div class="panel-heading">
                <h3>categorie : {{$category->name}}</h3>
                <h3>created time : {{$category->created_at}}</h3>
                <h3>categorie : {{$category->updated_at}}</h3>

            </div>
        </div>
    </div>


{{--@endsection--}}