@extends('layouts.admin')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario y Tabla</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Estilos adicionales */
    @media only screen and (max-width: 900px) {
      /* Aplicar desplazamiento horizontal a la tabla en dispositivos pequeños */
      .table-responsive {
        overflow-x: auto;
        overflow-y: auto;
      }
    }

    @media only screen and (max-width: 576px) {
      /* Estilos para vista de teléfono */
      .form-column {
        display: block;
      }
      /* Aplicar desplazamiento horizontal a la tabla en dispositivos pequeños */
      .table-responsive {
        overflow-x: auto;
        overflow-y: auto;
      }
    }

    /* Hover y animación azul */
    .table-hover tbody tr:hover {
      background-color: #ebe7eb;
      transition: background-color 0.2s ease-in-out;
    }

    /* Negrita para todos los labels */
    label {
      font-weight: bold;
    }
  </style>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body style="background-color: rgb(228, 210, 247);">


<div class="container mt-4">
  <h2 class="text-center p-3">Editar</h2>

<!-- Formulario -->
  <form action="{{ route('proveedor.update', $proveedors->IdProveedor) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-md-6 form-column">
        <div class="form-group">
          <label for="nombreEmpresa">NombreEmpresa</label>
          <input type="text" class="form-control" value="{{ $proveedors->NombreEmpresa }}" id="nombreEmpresa" name="txtnombreEmpresa">
        </div>
        <div class="form-group">
          <label for="numProveedor">Número de proveedor:</label>
          <input type="text" class="form-control" value="{{ $proveedors->NumProveedor }}" id="numProveedor" name="txtnumProveedor">
        </div>
        <div class="form-group">
          <label for="direccionProveedor">Dirección del proveedor:</label>
          <input type="text" class="form-control" value="{{ $proveedors->DireccionProveedor }}" id="direccionProveedor" name="txtdireccionProveedor">
        </div>
      </div>
      <div class="col-md-6 form-column">
        <div class="form-group">
          <label for="correoEmail">Correo Email:</label>
          <input type="email" class="form-control" value="{{ $proveedors->CorreoProveedor }}" id="correoEmail" name="txtcorreoEmail">
        </div>
        <div class="form-group">
          <label for="estado">Estado:</label>
          <select class="form-control" id="estado" name="txtestado">
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
          </select>
        </div>
      </div>
    </div>

    <!-- Contenedor para centrar los botones -->
    <div class="text-center">
      <button type="submit" class="btn btn-primary mx-2"><i class="bi bi-repeat"></i><b>Actualizar</b></button>
    </div>

    </div>
    
  </form>



@push('scripts')
  <script>
    $(document).ready( function () {
      $('#table_id').DataTable( {"language":{"url":"https://cdn.datatables.net/plug-ins/2.0.5/i18n/es-MX.json"}});
    } );
  </script>
@endpush

</body>
</html>
@endsection