@extends('layouts.admin')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compra</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Estilos personalizados */
        .small-input {
            width: 120px; /* Ajusta el ancho según sea necesario */
        }
        .group-box {
            border: 1px solid #6c757d; /* Cambio de color de borde a gris */
            padding: 10px;
            margin-bottom: 20px;
            background-color: #e9ecef; /* Cambio de color de fondo a lila */
            border-radius: 8px; /* Añade un borde redondeado */
        }
        #BotonAgregarCancelar button {
            margin-top: 10px;
        }

        /* Estilos para los campos de entrada */
        input[type="text"] {
            background-color: #f8f9fa; /* Cambia el color de fondo a gris claro */
            border: 1px solid #9c27b0; /* Cambia el color del borde a morado */
            border-radius: 4px; /* Añade un borde redondeado */
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Botón "Nueva Factura" y Selector de Fecha -->
        <div class="row mt-3">
            <div class="col-md-6">
                <button class="btn btn-primary" id="BotonFactura">Nueva Compra</button>
            </div>
            <div class="col-md-6 d-flex justify-content-end"> <!-- Agregar la clase d-flex y justify-content-end -->
              <div>
                  <label for="NoFactura" class="form-label">No. Compra</label>
                  <input type="text" class="form-control small-input" id="NoFactura">
              </div>
          </div>
        </div>

        <!-- Datos del cliente -->
        <div class="row mt-3">
            <div class="col-md-6">
                <fieldset class="group-box">
                    <legend>Datos del Proveedor</legend>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="txtnombre">
                        </div>
                        <div class="col-md-6">
                            <label for="apellido" class="form-label">Apellido:</label>
                            <input type="text" class="form-control" id="apellido" name="txtapellido">
                        </div>
                    </div>
                </fieldset>
            </div>   
            <div class="col-md-6">
                <label for="Fecha" class="form-label">Fecha:</label>
                <input type="date" class="form-control" id="txtFecha">
            </div>   
        </div>

        <!-- Datos de Compra y Venta -->
        <div class="container mt-3">
            <div class="col-md-12">
                <fieldset class="group-box">
                    <legend class="text-center">Datos de Compra y Venta</legend>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="codigo" class="form-label">Código:</label>
                            <input type="text" class="form-control" id="codigo" name="txtcodigo">
                        </div>
                        <div class="col-md-2">
                            <label for="distintivo" class="form-label">Distintivo:</label>
                            <input type="text" class="form-control" id="distintivo" name="txtdistintivo">
                        </div>
                        <div class="col-md-2">
                            <label for="categoria" class="form-label">Categoría:</label>
                            <input type="text" class="form-control" id="categoria" name="txtcategoria">
                        </div>
                        <div class="col-md-2">
                            <label for="marca" class="form-label">Marca:</label>
                            <input type="text" class="form-control" id="marca" name="txtmarca">
                        </div>
                        <div class="col-md-4">
                            <label for="color" class="form-label">Color:</label>
                            <input type="text" class="form-control" id="color" name="txtcolor">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="talla" class="form-label">Talla:</label>
                            <input type="text" class="form-control" id="talla" name="txttalla">
                        </div>
                        <div class="col-md-2">
                            <label for="cantidad" class="form-label">Cantidad:</label>
                            <input type="text" class="form-control" id="cantidad" name="txtcantidad">
                        </div>
                        <div class="col-md-2">
                            <label for="precioCompra" class="form-label">Precio Compra:</label>
                            <input type="text" class="form-control" id="precioCompra" name="txtprecioCompra">
                        </div>
                        <div class="col-md-2">
                            <label for="precioVenta" class="form-label">Precio Venta:</label>
                            <input type="text" class="form-control" id="precioVenta" name="txtprecioVenta">
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-12" id="BotonAgregarCancelar">
                            <button class="btn btn-success">Agregar +</button>
                            <button class="btn btn-secondary">Cancelar</button>
                            <button class="btn btn-primary"><i class="bi bi-repeat"></i>Actualizar</button>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>

        <!-- Tabla de productos -->
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>Codigo</th>
                        <th>Producto</th>
                        <th>Color</th>
                        <th>Talla</th>
                        <th>Cantidad</th>
                        <th>Precio de Compra</th>
                          <th>Precio Venta</th>
                          <th>Total</th>
                          <th>Acciones</th>
                      </tr>
                  </thead>
                  <tbody>
                      <!-- Aquí se agregarían las filas de la tabla -->
                      <tr>
                          <td>1</td>
                          <td>kew2</td>
                          <td>Bracier</td>
                          <td>Rojo</td>
                          <td>s</td>
                          <td>2</td>
                          <td>70</td>
                          <td>100</td>
                          <td>100</td>
                          <td>
                              <a href="" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                              <a href="" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></i></a>
                          </td>
                      </tr>
                      <!-- Agrega más filas según sea necesario -->
                  </tbody>
              </table>
          </div>
  
          <!-- Totales -->
          <div class="row mt-3">
              <div class="col-md-12">
                  <fieldset class="group-box" id="Totales">
                      <div class="row">
                          <div class="col-md-4">
                              <label for="subtotal" class="form-label">Subtotal:</label>
                              <input type="text" class="form-control" id="subtotal" name="subtotal">
                          </div>
                          <div class="col-md-4">
                              <label for="iva" class="form-label">IVA:</label>
                              <input type="text" class="form-control" id="iva" name="iva">
                          </div>
                          <div class="col-md-4">
                              <label for="total" class="form-label">Total:</label>
                              <input type="text" class="form-control" id="total" name="total">
                          </div>
                      </div>
                  </fieldset>
              </div>
          </div>
  
          <!-- Botones finales -->
          <div class="row mt-3 justify-content-center">
              <div class="col-md-6 d-flex justify-content-center">
                  <button class="btn btn-primary mx-2"><i class="bi bi-floppy2"></i>Guardar</button>
                  <button class="btn btn-secondary mx-2"><i class="bi bi-pip-fill"></i>Imprimir</button>
              </div>
          </div>
      </div>
  
      <!-- Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
@endsection