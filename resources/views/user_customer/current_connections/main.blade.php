@extends('layouts.dashboard')

@section('navbar_items')
    @include('user_customer.current_connections.partials.navbar_items')
@endsection

@section('body_content')
    {{--body goes here--}}
    @include('user_customer.current_connections.partials.connection')
@endsection