<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::get('',[AdminController::class,'index']);
Route::get('/user',[AdminController::class,'user']);
Route::get('/archivos',[AdminController::class,'archivos']);
Route::get('/metricas',[AdminController::class,'metricas']);
Route::get('/graficas',[AdminController::class,'graficas']);