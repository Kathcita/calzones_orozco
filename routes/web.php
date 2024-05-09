<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // Agrega esta línea

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\DetallecompraController;
use App\Http\Controllers\DetallefacturaController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\TallaController;
use App\Models\cliente;
use App\Models\proveedor;
use GuzzleHttp\Promise\Create;
use Illuminate\Contracts\Cache\Store;


Route::get('/',function(){
    return view('auth.login');
});

// Habilitamos el index menú
Route::get('/Menu', function (){
    return view('layouts.Menu.index');
});

Route::get('/Menu/compra', function (){
    return view('layouts.Menu.compra.index');
});

Route::get('/Menu/facturacion', function (){
    return view('layouts.Menu.facturacion.index');
});

Route::get('/Menu/inventario', function (){
    return view('layouts.Menu.inventario.index');
});

Route::get('/Menu/reportes', function (){
    return view('layouts.Menu.reportes.index');
});


// Ruta clasificación
Route::get('/Registro', function (){
    return view('layouts.Registro.clasificacion.index');
});

Route::get('/Registro/categoria', function (){
    return view('layouts.Registro.clasificacion.categoria.index');
});

Route::get('/Registro/color', function (){
    return view('layouts.Registro.clasificacion.color.index');
});

Route::get('/Registro/talla', function (){
    return view('layouts.Registro.clasificacion.talla.index');
});


//ruta proveedor
Route::get('/Registro/proveedor', function (){
    return view('layouts.Registro.proveedor.index');
});

//ruta de edición
Route::get('/Registro/{id}/edit', function (){
    return view('layouts.Registro.proveedor.indexedit');
});


//ruta usuario
Route::get('/Registro/usuarios', function (){
    return view('layouts.Registro.usuarios.index');
});

//ruta a catalogo
Route::get('/Registro/productos', function (){
    return view('layouts.Registro.productos.index');
});

//ruta de reportes
Route::get('/Menu/reportes', function (){
    return view('layouts.Menu.reportes.index');
});

//habilitamos la vista Inventario
Route::get('/Inventario', function (){
    return view('layouts.Inventario.index');
});

//habilitamos la vista AcercaDe
Route::get('/AcercaDe', function (){
    return view('layouts.AcercaDe.index');
});



Route::resource('/Registro/clientes', ClienteController::class);
Route::resource('/Registro/proveedor', ProveedorController::class);
Route::resource('Registro/color', ColorController::class);
Route::resource('Registro/categoria', CategoriaController::class);
Route::resource('/compra', CompraController::class);
Route::resource('/detallecompra', DetallecompraController::class);
Route::resource('/detallefactura', DetallefacturaController::class);
Route::resource('/facturacion', FacturacionController::class);
Route::resource('Registro/marca', MarcaController::class);
Route::resource('/producto', ProductoController::class);
Route::resource('Registro/talla', TallaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

