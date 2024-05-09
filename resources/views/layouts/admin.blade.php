<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de facturacion Orozco</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">

  <!-- Enlase de iconos a boostrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

      <!-- Visibilidad del home -->
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/')}}" class="nav-link">SISTEMA DE FACTURACIÓN</a>
      </li>
    
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!--Barra de Busqueda -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    
      <!--Barra de cierre de sesion-->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
        onclick="event.preventDefault();
         document.getElementById('logout-form').submit();"
         style="background-color:rgb(241, 96, 229)" name="cerrar">
          <label for="cerrar">Cerrar Sesión  </label>
          <i class="bi bi-person-fill-lock"></i>
        </a>
      </li>

      <!--Barra de salir-->
      <li class="nav-item">
        <a class="nav-link"  href="#" name="salir"
        style="background-color:rgb(241, 96, 229)">
          <label for="salir">Salir </label>
          <i class="bi bi-box-arrow-right"></i>
        </a>
      </li>

    </ul>
  </nav>

   <!-- Contenido de la cabecera -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">ROPA ÍNTIMA OROZCO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>


       <!-- Menu de navegaciones -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!--Menus-->
          <li class="nav-item"> 
            <a class="nav-link default active" href="{{url('Menu/')}}"
               style="background-color:rgba(248, 6, 248, 0.699)">
               <i class="nav-icon">
                <i class="bi bi-list"></i>
               </i>
               Menú
              </a>
          <!--Formuklario para el ciere de cesion-->
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
            </form>

           <!--Registro-->
           <li class="nav-item">
            <a href="" class="nav-link" style="background-color:rgba(248, 6, 248, 0.699)">
              <i class="nav-icon"></i>
              <i class="bi bi-clipboard2-plus-fill"></i>
              <p>
                Registro
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <!--Clasificacion-->
              <li class="nav-item">
                <a href="{{url('Registro/')}}" class="nav-link">
                  <i class="bi bi-c-circle-fill"></i>
                  <p>Clasificación</p>
                </a>
              </li>
               <!--Proveedor-->
              <li class="nav-item">
                <a href="{{url('Registro/proveedor')}}" class="nav-link">
                  <i class="bi bi-truck"></i>
                  <p>Proveedor</p>
                </a>
              </li>
                <!--Clientes-->
                <li class="nav-item">
                  <a href="{{url('Registro/clientes')}}" class="nav-link">
                    <i class="bi bi-person-walking"></i>
                    <p>Clientes</p>
                  </a>
                </li>
                  <!--Usuario-->
              <li class="nav-item">
                <a href="{{url('Registro/usuarios')}}" class="nav-link">
                  <i class="bi bi-person-circle"></i>
                  <p>Usuarios</p>
                </a>
              </li>
                <!--Catalogo-->
                <li class="nav-item">
                  <a href="{{url('Registro/productos')}}" class="nav-link">
                    <i class="bi bi-wallet-fill"></i>
                    <p>Productos</p>
                  </a>
                </li>
            </ul>
          </li>

             <!-- submenu -->
          <!--Respaldo-->
          <li class="nav-item">
            <a href="" class="nav-link" style="background-color:rgba(248, 6, 248, 0.699)">
              <i class="nav-icon"></i>
              <i class="bi bi-database-fill-lock"></i>
              <p>
                Respaldo
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('Respaldo/')}}" class="nav-link">
                  <i class="bi bi-database-fill-add"></i>
                  <p>Respaldar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('Restauracion/')}}" class="nav-link">
                  <i class="bi bi-database-down"></i>
                  <p>Restaurar</p>
                </a>
              </li>
            </ul>
          </li>

          <!--aserca de-->
          <li class="nav-item"> 
            <a class="nav-link" href="{{ url('AcercaDe') }}"
               style="background-color:rgba(248, 6, 248, 0.699)">
               <i class="nav-icon">
                <i class="bi bi-exclamation-circle-fill"></i>
               </i>
               Acerca De
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
            </form>
          </li>

          <li class="nav-item"> 
            <!--REDIRECCIONAMIENTO AL LOGIN-->
            <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
               document.getElementById('logout-form').submit();"
               style="background-color:rgb(233, 38, 64)">
               <i class="nav-icon">
                  <i class="bi bi-person-fill-dash"></i>
               </i>
                SALIR
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
            </form>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Contenido central-->
  <div class="content-wrapper">
    <br>
    <div class="content">
        @yield('content')
      </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!--Pies de pagina -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Sistema Orozco
    </div>
    <!-- Default to the left -->
    <strong>Involucrados;</strong> Emilly,Katherine,Jeysson,Kevin
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>

<!-- DATATABLES -->
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.min.css" />
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.min.js"></script>

@stack('scripts')

</body>
</html>