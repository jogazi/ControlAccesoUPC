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
    <script src="{{ asset('public/js/alert4.js') }}" ></script>

    <!-- Fonts -->
    <link href="{{ asset('public/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/new.css') }}" rel="stylesheet">
    
</head>
<body>
                <style>

.imagenlogo {
  height: 90%;
   width: 90%;
}
</style>
    <div id="app">
      <!-- Page Wrapper -->
      <div id="wrapper">
        
  
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
         @guest
           <!-- Sidebar - Brand -->

           
               <div class="text-center">
                 <br>
                 <img src="{{ asset('/public/Logo/LOGO2.png') }}" class="img-fluid imagenlogo" alt="Responsive image">
             
              </div>
          
          <!-- Divider -->
          <hr class="sidebar-divider my-0">
           <!-- Nav Item - About us -->
           <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-address-card"></i>
              <span>About us</span></a>
          </li>

            <!-- Modal-About us-->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">About us-Films Control</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    Software developed for the control and audit of cinemas.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal" >Close</button>
                </div>
              </div>
            </div>
          </div>
           <!-- Modal-About us-->

         <!-- Divider -->
             <hr class="sidebar-divider my-0">
               <!-- Heading -->
          <div class="sidebar-heading">
          Social networks
          </div>
        <!-- Nav Item - About us -->
           <li class="nav-item">
            <a class="nav-link" href="">
            <i class="fab fa-instagram"></i>
              <span>Instagram</span></a>
          </li>
            <!-- Nav Item - About us -->
           <li class="nav-item">
            <a class="nav-link" href="">
            <i class="fab fa-facebook-square"></i>
              <span>Facebook</span></a>
           </li>
             <!-- Nav Item - About us -->
             <li class="nav-item">
            <a class="nav-link" href="">
            <i class="fab fa-twitter"></i>
              <span>Twitter</span></a>
           </li>
           <!-- Divider -->
           <hr class="sidebar-divider my-0">
                <!-- Heading -->
          <div class="sidebar-heading">
          Contacts
          </div>
           <!-- Nav Item - Utilities Collapse Menu -->
           <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-users"></i>
              <span>Team</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="utilities-color.html"><i class="fas fa-user-tie"></i> Ricardo Rico Lozada</a>
                <a class="collapse-item" href="utilities-border.html"><i class="fas fa-user-tie"></i> Johan Arley Garcia H.</a>
              </div>
            </div>
          </li>


       
          
          

          @else
          <!-- Sidebar - Brand -->
          <div class="text-center">
            <br>
                 <img src="{{ asset('/public/Logo/LOGO2.png') }}" class="img-fluid imagenlogo" alt="Responsive image">
             
              </div>
          <!-- Divider -->
          <hr class="sidebar-divider my-0">
          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('home') }}">
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
                @can('roles.index')
                <a class="collapse-item" href="{{ route('roles.index') }}"><i class="fas fa-user-tag"></i>  Role</a>
                @endcan
                @can('users.index')
                <a class="collapse-item" href="{{ route('users.index') }}"><i class="fas fa-users"></i> Users</a>
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
               @can('audit22.index')
                <a class="collapse-item" href="{{ route('audit22.index') }}"><i class="fas fa-user-circle"></i> Ticketsale</a>
                @endcan
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
              @can('audit12.index')
                <a class="collapse-item" href="{{ route('audit12.index') }}"><i class="fas fa-video"></i> Movies list</a>
                @endcan
                @can('audit09.index')
                <a class="collapse-item" href="{{ route('audit09.index') }}"><i class="fas fa-user-astronaut"></i>  Actors</a>
                @endcan
                @can('audit13.index')
                <a class="collapse-item" href="{{ route('audit13.index') }}"><i class="fas fa-user-tie"></i> Directors</a>
                @endcan
                @can('audit15.index')
                <a class="collapse-item" href="{{ route('audit15.index') }}"><i class="fas fa-archway"></i> Rooms</a>
                @endcan
                @can('audit16.index')
                <a class="collapse-item" href="{{ route('audit16.index') }}"><i class="fas fa-chair"></i> Seating</a>
                @endcan
                @can('audit14.index')
                <a class="collapse-item" href="{{ route('audit14.index') }}"><i class="far fa-caret-square-right"></i> Functions</a>
                @endcan
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
          <!-- Nav Item - AuditSys -->
          <li class="nav-item">
            @can('audit07.index')
              <a class="nav-link" href="{{ route('audit07.index') }}"><i class="fas fa-clipboard-check"></i> Audit system</a>
            @endcan
          </li>
          <!-- Nav Item - comparisons record -->
          <li class="nav-item">
            @can('audit23.index')
              <a class="nav-link" href="{{ route('audit23.index') }}"><i class="fas fa-history"></i> Comparisons Record</a>
            @endcan
          </li>
          @endguest
        </ul>
        <!-- End of Sidebar -->
        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
          <!-- Main Content -->
          <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand-md navbar-light bg-gradient-primary topbar mb-4 static-top shadow">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                    
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
                                        <a class="dropdown-item" href="{{ route('users.profile',Auth::user()->id) }}">
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

              <!-- Begin Page Content -->
              <div class="container-fluid">
                
              </div>
              <main class="py-4">
                @yield('content')
              </main>
          
              <!-- /.container-fluid -->

              </div>
          <!-- End of Main Content -->  
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
</div>
    <!-- Custom scripts for all pages-->
  <script src="{{ asset('public/js/sb-admin-2.min.js') }}"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c68f0daf324050cfe339797/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</body>
</html>
