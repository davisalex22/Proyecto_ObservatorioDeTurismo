<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\GraficasController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\ComparativaController;
use App\Http\Controllers\CalculosController;

Route::get('',[AdminController::class,'index']);
Route::resource('users', 'App\Http\Controllers\UserController');
Route::get('/archivos',[AdminController::class,'archivos']);
Route::get('/metricas',[AdminController::class,'metricas']);
Route::get('/editUser',[AdminController::class,'editUser']);
Route::get('/datosTabla',[AdminController::class,'datosTabla']);
Route::get('/hoteles',[AdminController::class,'hoteles']);

// Importacion de Archivos y datos en Tabla

Route::resource('datosTabla', 'App\Http\Controllers\HistorialController');
Route::post('/datosTabla',[HistorialController::class,'filtroHotel']);
Route::resource('hoteles', 'App\Http\Controllers\HotelesController');

// Carga de Archivos
Route::resource('archivos', 'App\Http\Controllers\ArchivoController');
Route::post('archivos',[ArchivoController::class,'import'])->name('archivo.import');

// Graficas
Route::resource('graficas', 'App\Http\Controllers\GraficasController');
Route::post('/graficas',[GraficasController::class,'filtroGrafica']);

// Comparativa

Route::resource('comparativa', 'App\Http\Controllers\ComparativaController');
Route::post('/comparativa',[ComparativaController::class,'filtroComparativa']);

// Editor de contenido
Route::resource('editContenido', 'App\Http\Controllers\BlogController');

// Rutas comparativas

Route::get('anios/{id}',[ComparativaController::class,'getAnios']);

Route::get('meses/{id}',[ComparativaController::class,'getMeses']);
