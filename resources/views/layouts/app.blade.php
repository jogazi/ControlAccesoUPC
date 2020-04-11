<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="public/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/new.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-film"></i>
        </div>
        <div class="sidebar-brand-text mx-3">FilmsControl <sup>RG</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
      Users
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
          <i class="fas fa-users-cog"></i>
          <span>Control Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @can('audit06.index')
            <a class="collapse-item" href="{{ route('audit06.index') }}"><i class="fas fa-user-tag"></i>  Role</a>
            @endcan
            @can('users.index')
            <a class="collapse-item" href="{{ route('users.index') }}"><i class="fas fa-user-circle"></i> Users</a>
            @endcan
            @can('audit12.index')
            <a class="collapse-item" href="{{ route('audit12.index') }}"><i class="fas fa-user-tag"></i> Films</a>
            @endcan
            @can('audit07.index')
            <a class="collapse-item" href="{{ route('audit07.index') }}"><i class="fas fa-user-circle"></i> Audit system</a>
            @endcan
            @can('audit09.index')
            <a class="collapse-item" href="{{ route('audit09.index') }}"><i class="fas fa-user-tag"></i> Actors</a>
            @endcan
            @can('audit13.index')
            <a class="collapse-item" href="{{ route('audit13.index') }}"><i class="fas fa-user-circle"></i> Directors</a>
            @endcan
            @can('audit15.index')
            <a class="collapse-item" href="{{ route('audit15.index') }}"><i class="fas fa-user-circle"></i> Rooms</a>
            @endcan
            @can('audit16.index')
            <a class="collapse-item" href="{{ route('audit16.index') }}"><i class="fas fa-user-circle"></i> Seating</a>
            @endcan
            @can('audit22.index')
            <a class="collapse-item" href="{{ route('audit22.index') }}"><i class="fas fa-user-circle"></i> Ticketsale</a>
            @endcan
            @can('audit14.index')
            <a class="collapse-item" href="{{ route('audit14.index') }}"><i class="fas fa-user-circle"></i> Functions</a>
            @endcan
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-cart-arrow-down"></i>
          <span>Sales control</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
      Movie control
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-film"></i>
          <span>Films</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a  class="collapse-item"  href="utilities-color.html"> <i class="fas fa-video"></i>  Movies list</a>
            <a class="collapse-item" href="utilities-border.html"><i class="fas fa-user-astronaut"></i>   Actors</a>
            <a class="collapse-item" href="utilities-animation.html"><i class="fas fa-user-tie"></i> Directors</a>
            <a class="collapse-item" href="utilities-other.html"><i class="fas fa-archway"></i> Rooms</a>
            <a class="collapse-item" href="utilities-other.html"><i class="fas fa-chair"></i> Seating</a>
            <a class="collapse-item" href="utilities-other.html"><i class="far fa-caret-square-right"></i> Functions</a>
          </div>
        </div>
      </li>
     
     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- audit -->
      <!-- Heading -->
     <!-- Heading -->
     <div class="sidebar-heading">
        Audit
      </div>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('comparacion') }}">
        <i class="fas fa-file-csv"></i>
          <span>File comparison</span></a>
      </li>
       <!-- Nav Item - AuditSys -->
       <li class="nav-item">
        <a class="nav-link" href="{{ route('comparacion') }}">
        <i class="fas fa-clipboard-check"></i>
          <span>Audit System</span></a>
      </li>
      


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                www.filmscontrol.com
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                      
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fas fa-power-off"></i> {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="">
                                    <i class="fas fa-user"></i>
                                            Mi Profile
                                    </a>
                                    <a class="dropdown-item" href="">
                                      <i class="fas fa-cog"></i>
                                        Configure
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
          <!-- Page Heading -->

        

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>




    <!-- Custom scripts for all pages-->
  <script src="public/js/sb-admin-2.min.js"></script>

</body>
</html>
