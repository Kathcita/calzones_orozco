@extends('layouts.admin')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>usuario</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Estilos adicionales */
    @media only screen and (max-width: 992px) {
      /* Vista de tablet */
      .form-column {
        flex: 0 0 50%;
        max-width: 50%;
      }
    }

    @media only screen and (max-width: 576px) {
      /* Vista de teléfono */
      .form-column {
        flex: 0 0 100%;
        max-width: 100%;
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
<script>
  // $(document).ready( function () {
  //  $('#table_id').DataTable( {"language":{"url":"//cdn.datatables.net/plug-ins/2.0.5/i18n/es-ES.json"}});
  //  } );
</script>
<body style="background-color: rgb(228, 210, 247);">

<div class="container mt-4">
  <h2 class="text-center p-3">Usuarios</h2>
  <form action="{{route('register')}}" method="post">
    
    <div class="row">
      <div class="col-md-4 form-column">
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" id="nombre" name="txtnombre" required autocomplete="disable">
        </div>
        <div class="form-group">
          <label for="apellido">Apellido:</label>
          <input type="text" class="form-control" id="apellido" name="txtapellido"required autocomplete="disable">
        </div>
        <div class="form-group">
          <label for="cedula">Cédula:</label>
          <input type="text" class="form-control" id="cedula" name="txtcedula"required autocomplete="disable">
        </div>
      </div>
      <div class="col-md-4 form-column">
        <div class="form-group">
          <label for="usuario">Usuario:</label>
          <input type="text" class="form-control" id="usuario" name="txtusuario"required autocomplete="disable">
        </div>
        <div class="form-group">
          <label for="contrasena">Contraseña:</label>
          <input type="password" class="form-control" id="contrasena" name="txtcontrasena"required autocomplete="disable">
        </div>
        <div class="form-group">
          <label for="confirmarContrasena">Confirmar Contraseña:</label>
          <input type="password" class="form-control" id="confirmarContrasena" name="txtconfirmarContrasena"required autocomplete="disable">
        </div>
      </div>
      <div class="col-md-4 form-column">
        <div class="form-group">
          <label for="tipoUsuario">Tipo Usuario:</label>
          <select class="form-control" id="tipoUsuario" name="txttipoUsuario">
            <option value="administrador">Administrador</option>
            <option value="vendedor">Vendedor</option>
          </select>
        </div>
        <div class="form-group">
          <label for="estado">Estado:</label>
          <select class="form-control" id="estado" name="txtestado">
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
          </select>
        </div>
        <div class="form-group">
          <label for="email">Correo Email:</label>
          <input type="email" class="form-control" id="email" name="txtemail" required>
        </div>
      </div>
    </div>
    <!-- Contenedor para centrar los botones -->
    <div class="text-center">
      <button type="submit" class="btn btn-success mx-2"><i class="bi bi-floppy2"></i><b>Guardar</b></button>
      <button type="submit" class="btn btn-primary mx-2"><i class="bi bi-repeat"></i><b>Actualizar</b></button>
    </div>
  </form>

  <h2 class="mt-4 text-center">Registros</h2>
  <div class="table-responsive">
    <table id="table_id" class="table table-hover table-striped table-bordered" >
      <thead class="bg-primary text-white">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Cédula</th>
          <th>Usuario</th>
          <th>Correo Email</th>
          <th>Tipo Usuario</th>
          <th>Estado</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <!-- Aquí se agregarían las filas de la tabla -->
        <tr>
          <td>1</td>
          <td>Ejemplo</td>
          <td>Ejemplo</td>
          <td>123456</td>
          <td>ejemplo</td>
          <td>ejemplo@ejemplo.com</td>
          <td>Administrador</td>
          <td>Activo</td>
          <td>
            <a class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
          </td>
          <td>
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
      $('#table_id').DataTable( {"language":{"url":"https://cdn.datatables.net/plug-ins/2.0.5/i18n/es-ES.json"}});
    } );
  </script>
@endpush

{{-- <script></script> --}}
</body>
</html>
@endsection