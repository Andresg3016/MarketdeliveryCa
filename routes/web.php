<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Producto\ProductoController;

// Ruta raíz
Route::view('/', 'index'); // la raíz será el login

// Rutas principales
Route::view('/login', 'login');
Route::view('/productos', 'productos');
Route::view('/carrito', 'carrito');
Route::view('/perfil', 'perfil');
Route::view('/dashboard', 'dashboard')->name('dashboard');

// Errores
Route::view('/error404', 'error404');
Route::view('/error500', 'error500');

// Flujo de compra
Route::view('/pagos', 'pagos');
Route::view('/compra_finalizada', 'compra_finalizada');
Route::view('/ticket', 'ticket');

// Otros
Route::view('/registro', 'registro');
Route::view('/pqr', 'pqr');

// Rutas del recurso Producto
Route::resource('producto', ProductoController::class)->names('producto');

// Ruta para Datatable
use App\Models\Producto;
Route::get('/datatable', function () {
    $producto = Producto::all();
    return view('datatable', compact('producto'));
})->name('datatable');
