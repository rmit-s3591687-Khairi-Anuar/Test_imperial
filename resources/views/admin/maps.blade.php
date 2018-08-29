@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/maps.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <script src="{{ asset('https://use.fontawesome.com/releases/v5.2.0/js/all.js') }}"></script>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div class="col-md-2 float-left pl-0 pr-0 collapse width show rounded" id="sidebar">
                <div class="list-group border-0 card text-md-left">

                    <h4 class="text-light text-center" id="sidebarTitle">Admin Dashboard</h4>
                    <a href="{{ route('dashboard') }}" class="border-0 list-group-item d-inline-block collapsed"><i class="fas fa-home"></i> <span class="d-none d-md-inline">Dashboard</span></a>
                    <a href="{{ route('maps') }}" class="border-0 list-group-item d-inline-block collapsed "><i class="fas fa-map-marked"></i><span class="d-none d-md-inline"> Map</span></a>
                    <a href="{{ route('bookings') }}" class="border-0 list-group-item d-inline-block collapsed "><i class="fas fa-address-book"></i> <span class="d-none d-md-inline">Bookings</span></a>
                </div>
            </div>
            {{--main content--}}
            <main class="col-md-10 float-left">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i class="fas fa-bars"></i></a>
              <h1>maps</h1>
            </main>
        </div>
    </div>
@endsection