@extends('layouts.dashboard')

@section('navbar_items')
    @include('user_employee_type_two.register_customer_account.partials.navbar_items')
@endsection

@section('body_content')
    <form>
        <form class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="ID">ID: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ID" placeholder="Enter ID">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-group-lg" id="name" placeholder="First Name">
                    <input type="text" class="form-control form-group-lg" id="name" placeholder="Last Name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="NIC">NIC:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nic" placeholder="Enter your NIC">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
            </div>
            <div class="form-inline">
                <label class="control-label col-sm-2" for="phoneNo">Phone Number:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-inline-" id="phoneNo" placeholder="Enter phone number">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="button" class="btn btn-sm">Add more</button>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-sm">Submit</button>
                </div>
            </div>

        </form>
    </form>
@endsection