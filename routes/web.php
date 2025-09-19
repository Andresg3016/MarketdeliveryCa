<?php

//use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\Producto\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'])
    ->resource(name:'producto',controller:productoController::class)
    ->names(names: 'producto');

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
});
