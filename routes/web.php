<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tipoAsientoController;
use App\Http\Controllers\vueloController;

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

Route::get('/', function () { //lleva al menu principal
    return view('inicio');
})->name('home');

//Tipos de asientos
Route::get('/TiposAsientos', [tipoAsientoController::class,'tipoAsientos'])->name('tipoasiento.index');
Route::get('/crearTipoAsiento', [tipoAsientoController::class,'crearAsientos'])->name('tipoasiento.crearAsientos');
Route::post('/guardarTipoAsiento', [tipoAsientoController::class,'guardarTipoAsiento'])->name('tipoasiento.guardarTipoAsiento');
Route::get('/cambiarEstado/{id}', [tipoAsientoController::class,'cambiarestadoAsiento'])->name('tipoasiento.cambiarestadoAsiento');
Route::get('/editarAsiento/{id}', [tipoAsientoController::class,'editarAsiento'])->name('tipoasiento.editarAsiento');
Route::put('/guardarcambios/{id}', [tipoAsientoController::class,'guardarcambiosAsiento'])->name('tipoasiento.guardarcambiosAsiento');




//Vuelos
Route::get('/vuelos', [vueloController::class,'vuelos'])->name('vuelos.index');
Route::get('/crearVuelo', [vueloController::class,'crearvuelo'])->name('vuelo.crearvuelo');
Route::post('/guardarvUELOo', [vueloController::class,'guardarVuelo'])->name('vuelo.guardarVuelo');


