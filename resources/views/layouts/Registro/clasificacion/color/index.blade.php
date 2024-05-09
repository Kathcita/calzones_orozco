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
      background-color: #e4e2e4;
      transition: background-color 0.2s ease-in-out;
    }

    /* Negrita para todos los labels */
    label {
      font-weight: bold;
    }

    /* Estilo para los botones de editar y eliminar */
    .btn-editar,
    .btn-eliminar {
      padding: 0.375rem 0.75rem;
      font-size: 0.875rem;
      line-height: 1.5;
      border-radius: 0.25rem;
      color: #fff;
      background-color: #007bff;
      border-color: #007bff;
      cursor: pointer;
    }

    .btn-editar:hover,
    .btn-eliminar:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }

     /* ancho para la última columna de la tabla */
     .table th:last-child,
      .table td:last-child {
      width: 10%; /* Puedes ajustar este valor según tus necesidades */
     }
    
  </style>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body style="background-color: rgb(228, 210, 247);">

<div class="container mt-4">
  <h2 class="text-center p-3">Colores</h2>

  <!-- Contenedor para centrar los botones -->
  <div class="text-center">
    <button type="button" class="btn btn-success mx-2" data-toggle="modal" data-target="#registroModal"><i class="bi bi-plus-circle-fill"></i><b>Agregar</b></button>
  </div>


  <!-- Modal Registro -->
  <div class="modal fade" id="registroModal" tabindex="-1" role="dialog" aria-labelledby="registroModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registroModalLabel">Agregar Color</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('color.store')}}" method="post">
          @csrf
            <div class="form-group">
              <label for="color">Color:</label>
              <input type="text" class="form-control" id="color" name="txtcolor">
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

  
<!-- Formulario -->
  <h2 class="mt-4 text-center">Colores Registrados</h2>
  <div class="table-responsive">
    <table class="table table-hover table-striped table-bordered" >
      <thead class="bg-primary text-white">
        <tr>
          <th>ID</th>
          <th>Color</th>
          <th>Acciones</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
      @foreach($colors as $colorsItem)
        <tr>
          <td>{{ $colorsItem->IdColor }}</td>
          <td>{{ $colorsItem->Color }}</td>
          <td>
        <a href="" data-toggle="modal" data-target="#editarModal{{ $colorsItem->IdColor }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
        </td>

        <td>
          <!-- Formulario de eliminación -->
          <form action="{{route('color.destroy',$colorsItem->IdColor)}}"method="POST">
          @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este Color?')">
              <i class="bi bi-trash-fill"></i>
            </button>
          </form>
        </td>

        <!-- Modal Editar -->
        <div class="modal fade" id="editarModal{{$colorsItem->IdColor}}" tabindex="-1" role="dialog" aria-labelledby="registroModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="registroModalLabel">Editar Color</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{route('color.update', $colorsItem->IdColor)}}" method="post">
                      @csrf
                      @method('PUT')
                      <div class="form-group">
                        <label for="color">Id color:</label>
                        <input type="text" class="form-control" id="idcolor" name="txtidcolorE" value="{{$colorsItem->IdColor}}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="color">Color:</label>
                        <input type="text" class="form-control" id="color" name="txtcolorE" value="{{$colorsItem->Color}}">
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

@endsection