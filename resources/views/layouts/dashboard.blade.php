@extends('layouts.plane')

@section('body')
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">CEB ONLINE</a>
            </div>
            <ul class="nav navbar-nav">
                @yield('navbar_items')
            </ul>
        </div>
    </nav>

    @yield('body')

@endsection