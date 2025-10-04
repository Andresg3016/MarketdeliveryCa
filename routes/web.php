<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Producto\ProductoController;
use App\Models\Producto;

// Ruta raíz → login
Route::view('/', 'login');

// Páginas principales
Route::view('/login', 'login');
Route::view('/registro', 'registro');
Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/productos', 'productos');
Route::view('/carrito', 'carrito');
Route::view('/perfil', 'perfil');

// Errores
Route::view('/error404', 'error404');
Route::view('/error500', 'error500');

// Flujo de compra
Route::view('/pagos', 'pagos');
Route::view('/compra_finalizada', 'compra_finalizada');
Route::view('/ticket', 'ticket');

// Otros
Route::view('/pqr', 'pqr');

// Rutas del recurso Producto
Route::resource('producto', ProductoController::class)->names('producto');

// Ruta para Datatable
Route::get('/datatable', function () {
    $producto = Producto::all();
    return view('datatable', compact('producto'));
})->name('datatable');
