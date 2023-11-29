<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\diarioController;
use App\Http\Controllers\controllerCrudD;

//*  para controlador controllerCrudD */


Route::get('/recuerdo/create', [controllerCrudD::class,'create'])->name('recuerdo.create');

Route::get('/recuerdo', [controllerCrudD::class,'index'])->name('recuerdo.index');

Route::post('/recuerdo', [controllerCrudD::class,'store'])->name('recuerdo.store');
Route::put('/recuerdo/{id}/confirm', [controllerCrudD::class,'update'])->name('recuerdo.update');
Route::put('/recuerdo/{id}/borrar', [controllerCrudD::class,'destroy'])->name('recuerdo.destroy');
/* RUTAS INDIVIDUALES PAEA EL CONTROLADOR */
Route::get('/welcome', [diarioController::class,'metodoInicio'])->name('apodoInicio');
/* Route::get('/form', [diarioController::class,'metodoFormulario'])->name('apodoFormulario'); */
/* Route::get('/memories', [diarioController::class,'metodoRecuerdos'])->name('apodoRecuerdo');  */

/* Route::post('/guardarRecuerdo',[diarioController::class, 'guardarRecuerdo'])->name('guardar'); */




/* RUTAS AGRUPADAS POR CONTROLADOR */
/* Route::controller(diarioController::class)->group(function(){
    Route::get('/', 'metodoInicio')->name('apodoInicio');
    Route::get('/form', 'metodoFormulario')->name('apodoFormulario');
    Route::get('/memoeries', 'metodoRecuerdos')->name('apodoRecuerdo');

}); */


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

