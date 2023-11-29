<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\biblioController;

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

Route::get('/Inicio', [biblioController::class, 'metodoInicio'])->name('apodoInicio');
Route::get('/Registro', [biblioController::class, 'metodoRegistro'])->name('apodoRegistro');
Route::post('/guardarLibro', [biblioController::class, 'guardarLibro'])->name('guardar');

/* Route::get('/Inicio', function () {
    return view('Principal');
});

Route::get('/Registro', function () {
    return view('Registro');
});
 */