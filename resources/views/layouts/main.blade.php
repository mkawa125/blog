<!doctype html>

<html lang="en">

    <head>

        <title>BiasharaPlus</title>

        {{-- Required meta tags --}}
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token"
              content="{{ csrf_token() }}">

        {{-- DataTable Css --}}
        <link rel="stylesheet"
              type="text/css"
              href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">


        <link rel="stylesheet"
              href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet"
              href="{{ asset('css/biasharaplus-cms.css') }}">
        <link rel="stylesheet"
              href="{{ asset('DataTables/css/dataTables.bootstrap.min.css') }}">
        <link rel="stylesheet"
              href="{{ asset('DataTables/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet"
              href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

        

        <script src="{{ asset('js/app.js') }}"></script>

        <!-- DataTable -->
        <script type="text/javascript"
                charset="utf8"
                src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

        <script src="{{asset('js/main.js')}}"></script>

        @yield('more')

    </head>

    <body class="app header-fixed sidebar-lg-show sidebar-fixed">

        <header class="app-header navbar">

            <!-- Header content here -->

            <a class="navbar-brand"
               href="{{ url('/') }}">
                <img src="{{ asset('images/logo-no.png') }}" width="140" height="50"
                     alt="BiasharaPlus Logo">
            </a>

            <button class="d-none d-lg-inline navbar-toggler sidebar-toggler"
                    type="button"
                    data-toggle="sidebar-lg-show">
                <span class="navbar-toggler-icon"></span>
            </button>

            <button class="d-lg-none navbar-toggler sidebar-toggler"
                    type="button"
                    data-toggle="sidebar-show">
                <span class="navbar-toggler-icon"></span>
            </button>

            <ul class="nav navbar-nav mr-auto d-none d-lg-flex">

                <li class="nav-item px-3">
                    <a class="nav-link"
                       href="#">Administrators</a>
                </li>

                <li class="nav-item px-3">
                    <a class="nav-link "
                       href="{{ route('users.index') }}">Users</a>
                </li>


            </ul>

            <ul class="nav navbar-nav d-none d-lg-flex">

                <li class="nav-item px-3">

                    <div class="dropdown">
                        <a href="#"
                           class="btn btn-light dropdown-toggle text-primary"
                           data-toggle="dropdown">
                            <span class="fa fa-user"></span>
                            @if(Auth::guest())
                            @else
                            {{ Auth::user()->name }}
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item"
                               href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <a class="dropdown-item text-success"
                               href="#">
                                Create New Admin <i class="fa fa-user-plus  text-success"
                                   style="margin-left: 5px"></i>
                            </a>

                            <form id="logout-form"
                                  action="{{ route('logout') }}"
                                  method="POST"
                                  style="display: none;">{{ csrf_field() }}</form>
                            <a class="dropdown-item text-success"
                               href="#">
                                Change password
                            </a>
                        </div>
                    </div>

                </li>
            </ul>

        </header>

        <div class="app-body">

            <div class="sidebar">
                <!-- Sidebar content here -->
                @include('layouts.sidebar')
            </div>

            <main class="main">

                <!-- Main content here -->

                @yield('breadcrumb')

                <div class="container mt-3 mb-3">
                    @include('layouts.loader')
                    @yield('content')
                </div>

            </main>

        </div>

        {{-- <footer class="app-footer d-flex justify-content-center">

            <!-- Footer content here -->
            All Rights Reserved &copy; mkawa.host {{date('Y')}}

        </footer> --}}

    </body>

</html>