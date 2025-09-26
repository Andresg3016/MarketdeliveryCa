<?php

use App\Http\Controllers\Producto\ProductoController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'login'); // la raíz será el login

// Rutas principales
Route::view('/index', 'index');
Route::view('/productos', 'productos');
Route::view('/carrito', 'carrito');
Route::view('/perfil', 'perfil');
Route::view('/dashboard', 'dashboard');

// Errores (Admin y Mapa)
Route::view('/error404', 'error404');
Route::view('/error500', 'error500');

// Flujo de compra
Route::view('/pagos', 'pagos');
Route::view('/compra_finalizada', 'compra_finalizada');
Route::view('/ticket', 'ticket');

// Otros
Route::view('/registro', 'registro');
Route::view('/pqr', 'pqr');

    // Rutas del recurso producto
Route::resource('producto', ProductoController::class)->names('producto');
Route::delete('/producto/{producto}', [ProductoController::class, 'destroy'])->name('producto.destroy');

Route::get('/datatables', [ProductoController::class, 'index'])->name('admin.datatables');


