@extends('layouts.admin')

@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<form action="">
    <!--Menu de Clasificacion -->
    <div class="row">

        <!--Marca-->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1">
                <i class="bi bi-badge-tm-fill"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">Marcas</span>
              <a href="{{url('Registro/marca')}}"> Registrar </a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <!--Categoria-->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1">
                <i class="bi bi-bag-fill"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">Categorias</span>
              <a href="{{url('Registro/categoria')}}"> Registrar </a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <!--Color-->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1">
                <i class="bi bi-stack-overflow"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">Color</span>
              <a href="{{url('Registro/color')}}"> Registrar </a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <!--Tallas -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1">
                <i class="bi bi-rulers"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">Tallas</span>
              <a href="{{url('Registro/talla')}}"> Registrar </a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
</form>
@endsection