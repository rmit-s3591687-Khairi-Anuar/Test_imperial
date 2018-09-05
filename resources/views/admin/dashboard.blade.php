@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('https://use.fontawesome.com/releases/v5.2.0/js/all.js') }}"></script>



@endsection

@section('content')
    <div class="container-fluid">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            {{--side navbar --}}
            <div id="sidebar" class="col-md-2 float-left pl-0 pr-0 collapse width show rounded nav" >
                <div class="list-group border-0 card text-md-left" id="listgroup-span">
                    <div id="sidebarTitle" class=" d-inline-block ">
                        {{--  <i  class="fas fa-car-side fa-2x text-light"></i>--}} <h4 class="text-light text-center font-weight-bold" >Admin Dashboard</h4>
                    </div>
                    <div id="sidebarTitleCollapse" class="d-inline-block ">
                        {{--<i  class="fas fa-car-side fa-lg text-light"></i>--}} <h5 class="text-light font-weight-bold">Admin</h5>
                    </div>
                    <a href="{{ route('dashboard') }}" class="nav-item border-0 list-group-item d-inline-block collapsed text-warning font-weight-bold"><i class="fas fa-home fa-lg img-fluid"></i> <span class="text-left">Dashboard</span></a>
                    <a href="{{ route('maps') }}" class="nav-item border-0 list-group-item d-inline-block collapsed text-light font-weight-bold"><i class="fas fa-globe-asia fa-lg img-fluid"></i><span class="text-left">&nbsp;Map</span></a>
                    <a href="{{ route('bookings') }}" class="nav-item border-0 list-group-item d-inline-block collapsed text-light font-weight-bold"><i class="fas fa-table fa-lg img-fluid"></i> <span class="text-left">Bookings</span></a>
                </div>
            </div>
            {{--main content--}}
            <main class="col-md-10 float-left">
                <a id="sidebarCollapse" href="#" data-target="#sidebar" data-toggle="collapse"><i class="fas fa-bars text-dark"></i></a>
                <h1>dashboard</h1>
                <table class="table table-hover rounded table-bordered ">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col"> Car Make/Model</th>
                        <th scope="col">Location</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody class="font-weight-bold">
                    <tr>
                        <th scope="row">Holden Commodore</th>
                        <td>-</td>
                        <td>Available</td>
                    </tr>
                    <tr>
                        <th scope="row">Hyundai i30</th>
                        <td>-</td>
                        <td>Available</td>
                    </tr>
                    <tr>
                        <th scope="row">Volkswagen Polo</th>
                        <td>-</td>
                        <td>Available</td>
                    </tr>
                    <tr>
                        <th scope="row">Mazda 3NEO</th>
                        <td>-</td>
                        <td>Available</td>
                    </tr>
                    <tr>
                        <th scope="row">BMW 335i M Sport</th>
                        <td>-</td>
                        <td>Available</td>
                    </tr>
                    <tr>
                        <th scope="row">Jeep Grand Cherokee</th>
                        <td>-</td>
                        <td>Available</td>
                    </tr>
                    <tr>
                        <th scope="row">Nissan X-Trail</th>
                        <td>-</td>
                        <td>Available</td>
                    </tr>
                    <tr>
                        <th scope="row">Toyota Kluger GX</th>
                        <td>-</td>
                        <td>Available</td>

                    <tr>
                        <th scope="row">Mercedes-Benz GLE350 d Auto 4MATIC</th>
                        <td>-</td>
                        <td>Available</td>
                    </tr>
                    <tr>
                        <th scope="row">Ford Falcon XR6</th>
                        <td>-</td>
                        <td>Available</td>
                    </tr>

                    </tbody>
                </table>
            </main>
        </div>
    </div>


@endsection
@section('assets')
    <script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"></script>
@endsection
