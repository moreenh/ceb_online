@extends('layouts.dashboard')

@section('navbar_items')
    @include('user_employee_type_two.enter_meter_reading.partials.navbar_items')
@endsection

@section('body_content')
    <form class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-sm-2" for="currentDate">Date:</label>
            <div class="col-sm-8">
                <input type="date" class="form-inline" id="currentDate" placeholder="Enter email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="cusID">Customer ID:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="cusID" placeholder="Enter customer ID">
            </div>
        </div>
        <div class="form-group" style="height:80px;">
            <label class="control-label col-sm-2" for="cusName">Customer Name:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="cusName" placeholder="Enter customer Name">
            </div>
        </div>

        <div class="form-inline" style="height:50px;">
                <label class="control-label col-sm-0" for="pre_meter_reading"> Previous Meter Reading:</label>
                <input type="text" class="form-control" id="pre_meter_reading">
            <div class="form-group">
                <label class="control-label col-sm-3" for="pre_date">Date:</label>
                <input type="date" class="form-control" id="pre_date">
            </div>
        </div>
        <div class="form-inline" style="height:50px;">
            <label class="control-label col-sm-0" for="meter_reading">Current Meter Reading:</label>
            <input type="text" class="form-control" id="meter_reading">
            <div class="form-group">
                <label class="control-label col-sm-3" for="currentDate">Date:</label>
                <input type="date" class="form-control" id="currentDate">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-8 col-sm-10">
                <button type="button" class="btn btn-sm">Save</button>
            </div>
        </div>
    </form>
@endsection