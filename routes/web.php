<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Internas\InternasController;
use App\Http\Controllers\ArchivoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[InternasController::class,'home']);
Route::get('/estadisticas',[InternasController::class,'estadisticas']);
Route::get('/lugares',[InternasController::class,'lugares']);
Route::get('/contactos',[InternasController::class,'contactos']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/add-archivo',[ArchivoController::class,'addArchivo']);
Route::get('/export-excel',[ArchivoController::class,'exportIntoExcel']);
Route::get('/export-csv',[ArchivoController::class,'exportIntoCSV']);

Route::get('/import-form',[ArchivoController::class,'importForm']);

Route::post('/import',[ArchivoController::class,'import'])->name('employee.import');