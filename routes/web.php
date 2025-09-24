<?php

use App\Http\Controllers\Producto\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Grupo de rutas que requieren autenticación y verificación
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // Ruta del dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rutas del recurso producto
    Route::resource('producto', ProductoController::class)->names('producto');

    Route::delete('/producto/{producto}', [ProductoController::class, 'destroy'])->name('producto.destroy');

});