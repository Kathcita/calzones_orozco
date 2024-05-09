@extends('layouts.admin')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>clientes</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Estilos adicionales */
    @media only screen and (max-width: 576px) {
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
  <h2 class="text-center p-3">Clientes</h2>

  <!-- Formulario -->
  <form>
    <div class="row">
      <div class="col-md-6 form-column">
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" id="nombre" name="txtnombre">
        </div>
        <div class="form-group">
          <label for="apellido">Apellido:</label>
          <input type="text" class="form-control" id="apellido" name="txtapellido">
        </div>
        <div class="form-group">
          <label for="cedula">Cédula:</label>
          <input type="text" class="form-control" id="cedula" name="txtcedula">
        </div>
      </div>
      <div class="col-md-6 form-column">
        <div class="form-group">
          <label for="direccion">Dirección:</label>
          <input type="text" class="form-control" id="direccion" name="txtdireccion">
        </div>
        <div class="form-group">
          <label for="telefono">Número Telefónico:</label>
          <input type="text" class="form-control" id="telefono" name="txttelefono">
        </div>
      </div>
    </div>

    <!-- Contenedor para centrar los botones -->
    <div class="text-center">
      <button type="submit" class="btn btn-success mx-2"><i class="bi bi-floppy2"></i><b>Guardar</b></button>
      <button type="submit" class="btn btn-primary mx-2"><i class="bi bi-repeat"></i><b>Actualizar</b></button>
    </div>

  </form>


  <!-- Table -->
  <h2 class="mt-4 text-center">Registros</h2>
  <div class="table-responsive">
    <table id="table_id" class="table table-hover table-striped table-bordered" >
      <thead class="bg-primary text-white">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Cédula</th>
          <th>Dirección</th>
          <th>Número Telefónico</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <!-- Aquí se agregarían las filas de la tabla -->
        <tr>
          <td>1</td>
          <td>Ejemplo</td>
          <td>Apellido</td>
          <td>1234567890</td>
          <td>Av. Ejemplo 123</td>
          <td>123456789</td>
          <td>
          <a href="" class="btn btn-warning btn-sm" ><i class="bi bi-pencil-square"></i></a>
          <a href="" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></i></a>
        </td>
        </tr>
        <!-- Agrega más filas según sea necesario -->
      </tbody>
    </table>
  </div>
</div>


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