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
    <h2 class="text-center p-3">Proveedores</h2>

    <!-- Formulario -->
    <form action="{{route('proveedor.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-6 form-column">
          <div class="form-group">
            <label for="nombreEmpresa">Nombre de la empresa:</label>
            <input type="text" class="form-control" id="nombreEmpresa" name="txtnombreEmpresa">
          </div>
          <div class="form-group">
            <label for="numProveedor">Número de proveedor:</label>
            <input type="text" class="form-control" id="numProveedor" name="txtnumProveedor">
          </div>
          <div class="form-group">
            <label for="direccionProveedor">Dirección del proveedor:</label>
            <input type="text" class="form-control" id="direccionProveedor" name="txtdireccionProveedor">
          </div>
        </div>
        <div class="col-md-6 form-column">
          <div class="form-group">
            <label for="correoEmail">Correo Email:</label>
            <input type="email" class="form-control" id="correoEmail" name="txtcorreoEmail">
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
        <button type="submit" class="btn btn-success mx-2"><i class="bi bi-floppy2"></i><b>Guardar</b></button>
        <button type="submit" class="btn btn-primary mx-2"><i class="bi bi-repeat"></i><b>Actualizar</b></button>
      </div>

    </form>

    <!-- Table -->
    <h2 class="mt-4 text-center">Registros</h2>
    <div class="table-responsive">
      <table id="table_id" class="table table-hover table-striped table-bordered">
        <thead class="bg-primary text-white">
          <tr>
            <th>ID</th>
            <th>Nombre de la empresa</th>
            <th>Número de proveedor</th>
            <th>Dirección del proveedor</th>
            <th>Correo Email</th>
            <th>Estado</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>


          @foreach($proveedors as $proveedorItem)
          <tr>
            <td>{{$proveedorItem->IdProveedor}}</td>
            <td>{{$proveedorItem->NombreEmpresa}}</td>
            <td>{{ $proveedorItem->NumProveedor }}</td>
            <td>{{ $proveedorItem->DireccionProveedor }}</td>
            <td>{{ $proveedorItem->CorreoProveedor }}</td>
            <td>{{ $proveedorItem->Estado }}</td>
            <td>
              
              <a href="" data-toggle="modal" data-target="#editarModal{{$proveedorItem->IdProveedor}}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
            </td>

            <td>
              <form action="{{ route('proveedor.destroy', $proveedorItem->IdProveedor) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este proveedor?')">
                  <i class="bi bi-trash-fill"></i>
                </button>
              </form>
            </td>

            <!-- Modal editar -->
  <div class="modal fade" id="editarModal{{$proveedorItem->IdProveedor}}" tabindex="-1" role="dialog" aria-labelledby="registroModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registroModalLabel">Editar Proveedor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="marca">Nombre Empresa:</label>
              <input type="text" class="form-control" id="nombre" name="txteditnombre" value="{{$proveedorItem->IdProveedor}}" readonly>
            </div>
            <div class="form-group">
              <label for="marca">Número de proveedore:</label>
              <input type="text" class="form-control" id="num" name="txteditnum" value="{{$proveedorItem->NombreEmpresa}}">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        </form>
      </div>
    </div>
  </div>

          </tr>

          @endforeach
        </tbody>
      </table>
    </div>

    
    

  </div>




  @push('scripts')
  <script>
    $(document).ready(function() {
      $('#table_id').DataTable({
        "language": {
          "url": "https://cdn.datatables.net/plug-ins/2.0.5/i18n/es-MX.json"
        }
      });
    });
  </script>
  @endpush

</body>

</html>
@endsection