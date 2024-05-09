@extends('layouts.admin')

@section('content')

<form action="menu">
  <head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
  </head>
  <div class="content">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--Menu de Inicio-->
  
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
  
            <!-- Sitio de compras -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Compra</h3>
                <p>Proceso de compra</p>
              </div>
              <div class="icon">
                  <i class="bi bi-cart-plus-fill"></i>
              </div>
              <a href="{{ url('Menu/compra') }}" class="small-box-footer">Comprar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!--Sitio de Facturacion -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Facturación<sup style="font-size: 20px"></sup></h3>
                <p>Realización de ventas</p>
              </div>
              <div class="icon">
                  <i class="bi bi-pc-display-horizontal"></i>
              </div>
              <a href="{{ url('Menu/facturacion') }}" class="small-box-footer">Facturar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!--Sitio de Inventario -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Inventario</h3>
                <p>Informes de inventario</p>
              </div>
              <div class="icon">
                <i class="bi bi-box"></i>
              </div>
              <a href="{{ url('Menu/inventario') }}" class="small-box-footer">Revisar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
               <h3>Reportes</h3>
                <p>Información de Reportes</p>
              </div>
              <div class="icon">
                  <i class="bi bi-graph-up-arrow"></i>
              </div>
              <a href="{{ url('Menu/reportes') }}" class="small-box-footer">Revisar<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</form>
@endsection