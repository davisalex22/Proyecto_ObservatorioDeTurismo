<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\FilesController;

Route::get('',[AdminController::class,'index']);
Route::resource('users', 'App\Http\Controllers\UserController');
Route::get('/archivos',[AdminController::class,'archivos']);
Route::get('/metricas',[AdminController::class,'metricas']);
Route::get('/graficas',[AdminController::class,'graficas']);
Route::get('/editUser',[AdminController::class,'editUser']);
Route::get('/datosTabla',[AdminController::class,'datosTabla']);
Route::get('/hoteles',[AdminController::class,'hoteles']);

// Importacion de Archivos

Route::resource('datosTabla', 'App\Http\Controllers\HistorialController');
Route::resource('hoteles', 'App\Http\Controllers\HotelesController');

Route::post('/admin/archivos',[FilesController::class,'import'])->name('archivo.store');
// Store de Archivos
Route::post('/upload',[FilesController::class,'store'])->name('user.files.store');

Route::resource('files','App\Http\Controllers\FilesController');
