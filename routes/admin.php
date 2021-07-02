<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChangeController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\AmbientesController;
use App\Http\Controllers\HorariosController;
use App\Http\Controllers\SemestreController;
Route::get('',[HomeController::class, 'index'])->name('admin.home');
Route::get('/delete',[ChangeController::class, 'listadelete'])->name('admin.delete');
Route::resource('cursos',CursosController::class)->names('admin.cursos');
Route::resource('ambientes',AmbientesController::class)->names('admin.ambientes');
Route::resource('semestre',SemestreController::class)->names('admin.semestre');
Route::get('/horarios',[HorariosController::class, 'index'])->name('admin.horarios.index');
Route::post('/horarios/table',[HorariosController::class, 'table'])->name('admin.horarios.table');
Route::post('/horarios/store',[HorariosController::class, 'store'])->name('admin.horarios.store');
Route::delete('/horarios/{horario}',[HorariosController::class, 'destroy'])->name('admin.horarios.destroy');


//Route::resource('changes',ChangeController::class)->name('admin.changes');
