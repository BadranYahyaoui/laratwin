@extends('layouts.app')
@section('content')
    <form  >
        <br>
        Name :<input type="text" name="name" id="name">
        <br> Description : <textarea id="description" name="description" id="" cols="30" rows="10">
            
        </textarea>
        <br>
        status: <input type="number" name="status" id="status">
        <br>
        user id: <input type="number" name="user_id" id="user_id">
        <br>
        <button type="button" id="btn">Send this</button>
        <br>
    </form>

    <div class="panel panel-default">

        <div class="panel-heading">liste</div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>description</th>
                    <th>status</th>
                </tr>
            </table>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/ajax.js') }}"></script>

@endsection

