@extends('layouts.admin')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Inventario</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Bootstrap Icons CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    /* Estilo adicional para centrar el formulario verticalmente */
    .center-vertical {
      display: flex;
      flex-direction: column;
      justify-content: center;
      min-height: 100vh;
    }

    /* Estilo adicional para el formulario */
    #formulario {
      border: 2px solid purple;
      padding: 20px;
      border-radius: 10px;
    }

    /* Estilo adicional para hacer los botones más largos y cambiarles el color */
    .small-box {
      margin-bottom: 20px;
      text-align: center;
      padding: 20px;
      border-radius: 10px;
    }

    .bg-purple {
      background-color: purple;
      color: white;
    }

    .bg-red {
      background-color: red;
      color: white;
    }

    .small-box a {
      color: white;
    }

    @media (max-width: 768px) {
      .small-box {
        width: 100%;
      }
      h3 {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>
    <h1 class="text-center p-3">Sistema de venta y Gestion de inventario  Orozco</h1>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8">
      <form id="formulario">
        <h2 class="text-center">Gestión de Inventario</h2>
        <!-- Aquí van los campos del formulario si los hubiera -->
        <div class="text-center mb-3">
          <!-- Sitio de Inventario -->
          <div class="col-lg-12">
            <!-- Reporte de Inventario -->
            <div class="small-box bg-purple">
              <div class="inner">
                <h4>Reporte de Inventario</h4>
                <p>info</p>
              </div>
              <div class="icon">
                <i class="bi bi-file-earmark-bar-graph-fill"></i>
              </div>
              <a href="#" class="btn btn-primary">Revisar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <!-- Stock Proximo a agotarse -->
            <div class="small-box bg-red">
              <div class="inner">
                <h4>Stock Próximo a Agotarse</h4>
                <p>info</p>
              </div>
              <div class="icon">
                <i class="bi bi-cart-fill"></i>
              </div>
              <a href="#" class="btn btn-primary">Revisar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS (opcional, solo si necesitas funcionalidades JS de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

@endsection