@extends('layouts.admin')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo de Productos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Estilos adicionales */
    @media only screen and (max-width: 992px) {
      /* Vista de tablet */
      .form-column {
        flex: 0 0 33.33%;
        max-width: 33.33%;
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
<body style="background-color: rgb(228, 210, 247);">

<div class="container mt-4">
  <h2 class="text-center p-3">Catálogo de Productos</h2>
  <form>
    <div class="row">
      <div class="col-md-4 form-column">
        <div class="form-group">
          <label for="codigo">Código:</label>
          <input type="text" class="form-control" id="codigo" name="txtcodigo">
        </div>
        <div class="form-group">
          <label for="categoria">Categoría:</label>
          <select class="form-control" id="categoria" name="txtcategoria">
            <option value="ropa">Ropa</option>
            <option value="electrodomesticos">Electrodomésticos</option>
            <!-- Agrega más opciones según sea necesario -->
          </select>
        </div>
        <div class="form-group">
          <label for="color">Color:</label>
          <select class="form-control" id="color" name="txtcolor">
            <option value="rojo">Rojo</option>
            <option value="azul">Azul</option>
            <!-- Agrega más opciones según sea necesario -->
          </select>
        </div>
      </div>
      <div class="col-md-4 form-column">
        <div class="form-group">
          <label for="marca">Marca:</label>
          <select class="form-control" id="marca" name="txtmarca">
            <option value="nike">Nike</option>
            <option value="adidas">Adidas</option>
            <!-- Agrega más opciones según sea necesario -->
          </select>
        </div>
        <div class="form-group">
          <label for="talla">Talla:</label>
          <select class="form-control" id="talla" name="txttalla">
            <option value="s">S</option>
            <option value="m">M</option>
            <!-- Agrega más opciones según sea necesario -->
          </select>
        </div>
        <div class="form-group">
          <label for="distintivo">Distintivo:</label>
          <input type="text" class="form-control" id="distintivo" name="txtdistintivo">
        </div>
      </div>
      <div class="col-md-4 form-column">
        <div class="form-group">
          <label for="precioVenta">Precio Venta:</label>
          <input type="text" class="form-control" id="precioVenta" name="txtprecioVenta">
        </div>
        <div class="form-group">
          <label for="stock">Stock:</label>
          <input type="text" class="form-control" id="stock" name="txtstock">
        </div>
      </div>
    </div>
    <!-- Contenedor para centrar los botones -->
    <div class="text-center">
      <button type="submit" class="btn btn-success mx-2"><i class="bi bi-floppy2"></i><b>Guardar</b></button>
      <button type="submit" class="btn btn-primary mx-2"><i class="bi bi-repeat"></i><b>Actualizar</b></button>
    </div>
  </form>

  <h2 class="mt-4 text-center">Productos</h2>
  <div class="table-responsive">
    <table id="table_id" class="table table-hover table-striped table-bordered" >
      <thead class="bg-primary text-white">
        <tr>
          <th>Código</th>
          <th>Categoría</th>
          <th>Marca</th>
          <th>Color</th>
          <th>Talla</th>
          <th>Distintivo</th>
          <th>Precio Venta</th>
          <th>Stock</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <!-- Aquí se agregarían las filas de la tabla -->
        <tr>
          <td>001</td>
          <td>Ropa</td>
          <td>Nike</td>
          <td>Azul</td>
          <td>M</td>
          <td></td>
          <td>29.99</td>
          <td>50</td>
          <td>
            <a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
            <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></a>
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