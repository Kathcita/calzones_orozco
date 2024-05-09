@extends('layouts.admin')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Estilos personalizados */
        .small-input {
            width: 120px;
        }
        .group-box {
            border: 1px solid #6c757d;
            padding: 10px;
            margin-bottom: 20px;
            background-color: #e9ecef;
            border-radius: 8px;
        }
        .l {
            margin-bottom: 5px;
        }
        #Totales {
            margin-top: 20px;
        }
        /* Estilos para la tabla */
        .custom-table {
            margin-top: 20px;
        }
        .date-container {
            justify-content: start;
        }
        .mt-3 {
            margin-top: 20px;
        }

        /* Estilo para los botones de la parte derecha */
        .d-flex.justify-content-end.align-items-center button {
            margin-left: 10px; /* Espacio entre los botones */
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
    
    <div class="f">
        <nav class="Facturacion">
            <div class="container">
            </div>
        </nav>
        <div class="container" id="cont">
            <div class="row">
                <div class="col-sm-12 col-md-6"  id="Contenedor2">
                    <!-- Botón "Nueva Factura" y Selector de Fecha -->
                    <div class="d-flex date-container mt-3" id="nf">
                        <button class="btn btn-primary p--3 me-3" id="BotonFactura">Nueva Factura</button> <!-- Se agregó la clase "me-3" para agregar margen a la derecha -->
                        <label for="Fecha" class="form-label">Fecha:</label>
                        <div class="col-md-6 text-end">
                            <input type="date" class="form-control" id="Fecha">
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-12 col-md-6">
                    <!-- No. Factura, TextBox y Botón con espacio horizontal -->
                    <div class="d-flex justify-content-end mt-3" id="Ayuda">
                        <label id="TextoFactura">No. Factura</label>
                        <input type="text" class="form-control ml-2 small-input" id="NoFactura">
                    </div>
                </div>                                             
            </div> 
            <!-- Datos del cliente -->
            <div class="row mt-3">
                <div class="col-sm-12 col-md-6">
                    <fieldset class="group-box">
                        <legend>Datos del Cliente</legend>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="txtnombreC">
                            </div>
                            <div class="col-md-6">
                                <label for="apellido" class="form-label">Apellido:</label>
                                <input type="text" class="form-control" id="apellido" name="txtapellidoC">
                            </div>
                        </div>
                    </fieldset>
                </div>   
                <div class="col-sm-12 col-md-6">
                    <fieldset class="group-box">
                        <legend>Usuario</legend>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="cedula" class="form-label">Cédula:</label>
                                <input type="text" class="form-control" id="cedula" name="txtcedulaU">
                            </div>
                            <div class="col-md-6">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="txtnombreU">
                            </div>
                        </div>
                    </fieldset>
                </div>    
    
                <div class="col-sm-12 col-md-12">
                    <fieldset class="group-box">
                        <legend id="DatosProducto">Datos del Producto</legend>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="codigo" class="l">Código:</label>
                                <input type="text" class="form-control" id="codigo" name="txtcodigo">
                            </div>
                            <div class="col-md-3">
                                <label for="distintivo" class="l">Distintivo:</label>
                                <input type="text" class="form-control" id="distintivo" name="txtdistintivo">
                            </div>
                            <div class="col-md-3">
                                <label for="categoria" class="l">Categoría:</label>
                                <input type="text" class="form-control" id="categoria" name="txtcategoria">
                            </div>
                            <div class="col-md-3">
                                <label for="marca" class="l">Marca:</label>
                                <input type="text" class="form-control" id="marca" name="txtmarca">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="color" class="l">Color:</label>
                                <input type="text" class="form-control" id="color" name="txtcolor">
                            </div>
                            <div class="col-md-3">
                                <label for="talla" class="l">Talla:</label>
                                <input type="text" class="form-control" id="talla" name="txttalla">
                            </div>
                            <div class="col-md-3">
                                <label for="descuento" class="l">Descuento:</label>
                                <input type="text" class="form-control" id="descuento" name="txtdescuento">
                           </div>
                           <div class="col-md-3">
                                <label for="precio" class="l">Precio:</label>
                                <input type="text" class="form-control" id="precio" name="txtprecio">
                           </div>                        
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="cantidad" class="l">Cantidad:</label>
                                <input type="text" class="form-control" id="cantidad" name="txtcantidad">
                            </div>   
                             <div class="col-md-3">
                                 <label for="Stock" class="l">Stock Actual:</label>
                                 <input type="text" class="form-control" id="Stock" name="txtStock">
                             </div>
                            <div class="col-md-6 p-3 ml-6 justify-content-center" id="BotonAgregarCancelar">
                            <button id="BotonAgregar" class="btn btn-success">Agregar +</button>
                            <button id="BotonCancelar" class="btn btn-secondary"> Cancelar</button>
                                <button id="BotonCancelar" class="btn btn-primary"><i class="bi bi-repeat"></i>Actualizar</button>
                            </div>
                        </div>                                                        
                    </fieldset>                
                </div> 

                <!-- Creación de tabla -->
                <div class="col-sm-12 col-md-12">
                    <div class="table-responsive custom-table">
                        <table class="table table-bordered table-striped" id="miTabla">    
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>Fecha</th>
                                    <th>Código</th>
                                    <th>Producto</th>
                                    <th>Color</th>
                                    <th>Talla</th>
                                    <th>Cantidad</th>
                                    <th>Descuento</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Totales y botones -->
            <div class="col-sm-12 col-md-12">
                <fieldset class="group-box" id="Totales">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="subtotal" class="LabelTotales">Subtotal:</label>
                            <input type="text" class="form-control" id="subtotal" name="subtotal">
                        </div>
                        <div class="col-md-4">
                            <label for="iva" class="LabelTotales">IVA:</label>
                            <input type="text" class="form-control" id="iva" name="iva">
                        </div>
                        <div class="col-md-4">
                            <label for="total" class="LabelTotales">Total Géneral:</label>
                            <input type="text" class="form-control" id="total" name="total">
                        </div>                    
                    </div>
                </fieldset>
                          <!-- Botones finales -->
                <div class="row mt-3 justify-content-center">
                   <div class="col-md-6 d-flex justify-content-center">
                    <button class="btn btn-primary mx-2"><i class="bi bi-floppy2"></i>Guardar</button>
                    <button class="btn btn-secondary mx-2"><i class="bi bi-pip-fill"></i>Imprimir</button>
                  </div>
              </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection