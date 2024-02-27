<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AereolineaController;
use App\Http\Controllers\TipoAsientosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

//rutas de la aerolinea
Route::get('/asientos/abrir', [AereolineaController::class, 'abrirAsientos'])->name('asientos.abrir');

Route::get('/vuelos/abrir', [AereolineaController::class, 'abrirVuelos'])->name('vuelos.abrir');

//rutas de los tipos de asientos
Route::get('/asiento/agregar', [TipoAsientosController::class, 'agregarAsiento'])->name('asiento.agregar');

Route::get('/asiento/guardar', [TipoAsientosController::class, 'guardarAsiento'])->name('asiento.guardar');

Route::get('/asiento/vistaeditar', [TipoAsientosController::class, 'vistaEditar'])->name('asiento.vistaeditar');


