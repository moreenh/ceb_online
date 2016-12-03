@extends('layouts.dashboard')

@section('navbar_items')
    @include('user_customer.request_connection.partials.navbar_items')
@endsection

@section('body_content')
    {{--body goes here--}}
    <form>
        <div class="form-group">
            <label for="first_name">Connection Type</label>

        </div>
        <div class="dropup">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropup
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name">
        </div>
        <div class="form-group">
            <label for="employee_id">Employee ID</label>
            <input type="text" class="form-control" id="employee_id">
        </div>
        <div class="form-group">
            <label for="employee_type">Employee Type</label>
            <input type="text" class="form-control" id="employee_type">
        </div>
@endsection