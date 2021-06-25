<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bon Appetit</title>

  <!-- Custom fonts for this template-->
  <link href="{!! asset('vendor/fontawesome-free/css/all.min.css" rel="stylesheet') !!}" type="text/css">
  {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> --}}

  <!-- Custom styles for this template-->
  <link href="{!! asset('css/sb-admin-2.min.css?') !!}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{!! asset('/') !!}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Bon Apetit</div>
      </a>









@if( Auth::user()-> rol_id == 1)
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{!! asset('/') !!}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Reportes</span>
        </a>
      </li>

      <!-- Divider -->

      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Interface
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Reportes</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Panel de repostes:</h6>
            <a href="{{ route('clientes.pdf') }}" class="collapse-item"> Reporte de clientes</a>
            <a href="{{ route('pedidos.pdf') }}" class="collapse-item"> Reporte de pedidos</a>
            <a href="{{ route('reservas.pdf') }}" class="collapse-item"> Reporte de reserva</a>
            <a href="{{ route('proveedores.pdf') }}" class="collapse-item"> Reporte de proveedores</a>
          </div>
        </div>
      </li>


      <!-- Divider  -->
      <hr class="sidebar-divider">


       <!-- Heading  -->
      <div class="sidebar-heading">
        Registros
      </div>



             <!-- Nav Item - Tables -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true" aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Registros</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{!! asset('trabajadores') !!}">Trabajadores</a>
            <a class="collapse-item" href="{!! asset('platos') !!}">Platos</a>
            <!--<a class="collapse-item" href="{!! asset('batender') !!}">bartender</a>-->
            <a class="collapse-item" href="{!! asset('bebidas') !!}">Bebidas</a>
            <a class="collapse-item" href="{!! asset('tipo_platos') !!}">Categorias</a>
            <a class="collapse-item" href="{!! asset('tipo_bebidas') !!}">Tipo bebida</a>
            <a class="collapse-item" href="{!! asset('proveedores') !!}">Proveedores</a>
            <a class="collapse-item" href="{!! asset('mesas') !!}">Mesas</a>
            <a class="collapse-item" href="{!! asset('cargos') !!}">Cargos</a>
            <a class="collapse-item" href="{!! asset('turnos') !!}">Turnos</a>
            <a class="collapse-item" href="{!! asset('clientes') !!}">Clientes</a>
            <a class="collapse-item" href="{!! asset('reservas') !!}">Reservas</a>
            <a class="collapse-item" href="{!! asset('pedidos') !!}">Pedidos</a>
          </div>
        </div>
      </li>



       <!-- Nav Item - Pages Collapse Menu  -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="{{ route('login') }}">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts  -->
      <li class="nav-item">
        <a class="nav-link" href="https://thingspeak.com/channels/1412721/private_show">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Iot</span></a>
      </li>
      
@endif





@if( Auth::user()-> rol_id != 1)

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->

      <li class="nav-item active">
        <a class="nav-link" href="{!! asset('/') !!}">
          <i class="fas fa-user"></i>
          <span>Mi Perfil</span>
        </a>
      </li>

 <!-- Heading  -->
      <div class="sidebar-heading">
        Tareas
      </div>


      <li class="nav-item">
        <a class="nav-link" href="{!! asset('pedidos') !!}">
          <i class="fas fa-thumbtack"></i>
          <span>Tareas pendientes</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{!! asset('reservas') !!}">
          <i class="fas fa-star"></i>
          <span>Tareas Realizadas</span></a>
      </li>
  <!-- Nav Item - Pages Collapse Menu  -->
      

@endif


      <!-- Divider 
      <hr class="sidebar-divider d-none d-md-block">

      <div class="sidebar-heading">
        Bon-Apetit
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>proyecto</span>
        </a>
        {{-- boton de plato --}}
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{!! asset('platos') !!}">Platos</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
        {{-- boton de batender --}}
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{!! asset('batender') !!}">batender</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
        {{-- boton de bebida --}}
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{!! asset('bebidas') !!}">Bebidas</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
        {{-- boton de tipo plato --}}
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{!! asset('tipo_platos') !!}">Tipo plato</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
        {{-- boton de tipo bebida --}}
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{!! asset('tipo_bebidas') !!}">Tipo bebida</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
        {{-- boton de lista de proveedores --}}
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{!! asset('proveedores') !!}">Proveedor</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
        {{-- boton de lista de cargos --}}
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{!! asset('cargos') !!}">Cargos</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
        {{-- boton de lista de mesas --}}
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{!! asset('mesas') !!}">Mesas</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
        {{-- boton de lista de turnos --}}
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{!! asset('turnos') !!}">Turnos</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
        {{-- boton de lista de trabajadores --}}
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{!! asset('trabajadores') !!}">Trabajadores</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li>
       Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

@if(Auth::user()->rol_id == 1)
          <!-- buscador -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar por..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> 
@endif
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- interfas del personal -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- personal -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{!! asset('perfil') !!}">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ajustes
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Actividades
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  {{ __('Cerrar sesion') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>

          </ul>

        </nav>
        @yield('content')
        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4"></div>
        </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{!!asset('vendor/jquery/jquery.min.js') !!}"></script>
  <script src="{!!asset('vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{!!asset('vendor/jquery-easing/jquery.easing.min.js') !!}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{!!asset('js/sb-admin-2.min.js') !!}"></script>

  <!-- Page level plugins -->
  <script src="{!!asset('vendor/chart.js/Chart.min.js') !!}"></script>

  <!-- Page level custom scripts -->
  <script src="{!!asset('js/demo/chart-area-demo.js') !!}"></script>
  <script src="{!!asset('js/demo/chart-pie-demo.js') !!}"></script>

</body>

</html>
