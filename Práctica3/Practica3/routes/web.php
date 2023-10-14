<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\diarioController;
 
Route::get('/welcome', [diarioController::class,'metodoInicio'])->name('apodoInicio');

Route::get('/form', [diarioController::class,'metodoFormulario'])->name('apodoFormulario');

Route::get('/memories', [diarioController::class,'metodoRecuerdos'])->name('apodoRecuerdo');











/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('formulario');
});

Route::get('/memories', function () {
    return view('recuerdos');
}); */

/* 
Route::view('/', 'welcome')->name('apodoInicio');
Route::view('/form', 'formulario')->name('apodoFormulario');
Route::view('/memories', 'recuerdos')->name('apodoRecuerdo');
 */

