@extends('layouts.dashboard')

@section('navbar_items')
    @include('user_customer.bill_details.partials.navbar_items')
@endsection

@section('body_content')
    {{--body goes here--}}
    <div class="row">
        <h4>Bills You Have To Pay </h4>
        @include('user_customer.bill_details.partials.bill')
    </div>
    <div class="row">
        <h4>Bills Paid </h4>
        @include('user_customer.bill_details.partials.bill')
        @include('user_customer.bill_details.partials.bill')
        @include('user_customer.bill_details.partials.bill')
        @include('user_customer.bill_details.partials.bill')
        @include('user_customer.bill_details.partials.bill')
        @include('user_customer.bill_details.partials.bill')
    </div>
@endsection