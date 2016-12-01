@extends('layouts.dashboard')

@section('navbar_items')
    @include('user_administrator.register_employee_account.partials.navbar_items')
@endsection

@section('body_content')
    <form>
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection