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
        <div class="form-group">
            <label for="employee_id">Employee ID</label>
            <input type="text" class="form-control" id="employee_id">
        </div>
        <div class="form-group">
            <label for="employee_type">Employee Type</label>
            <input type="text" class="form-control" id="employee_type">
        </div>
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="double" class="form-control" id="salary">
        </div>
        <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" class="form-control" id="designation">
        </div>
        <div class="form-group">
            <label for="street_no">Street No</label>
            <input type="text" class="form-control" id="street_no">
        </div>
        <div class="form-group">
            <label for="street_name">Street Name</label>
            <input type="text" class="form-control" id="street_name">
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city">
        </div>
        <div class="form-group">
            <label for="province">Province</label>
            <input type="text" class="form-control" id="province">
        </div>
        <div class="form-group">
            <label for="postal_code">Postal Code</label>
            <input type="text" class="form-control" id="postal_code">
        </div>
        <div class="form-group">
            <label for="nic">NIC</label>
            <input type="text" class="form-control" id="nic">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="phone_no_1">Phone Number 1</label>
            <input type="text" class="form-control" id="phone_no_1">
        </div>
        <div class="form-group">
            <label for="phone_no_2">Phone Number 2</label>
            <input type="text" class="form-control" id="phone_no_2">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection