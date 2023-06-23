<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FacultadesController;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\Calificaciones;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\Reportes;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/facultades/listado', [FacultadesController::class, 'index'])->name('facultades.listado');
Route::get('/facultades/create', [FacultadesController::class, 'create'])->name('facultades.create');
Route::post('/facultades/store', [FacultadesController::class, 'store'])->name('facultades.store');
Route::delete('/facultades/destroy/{codfacultad}', [FacultadesController::class, 'destroy'])->name('facultades.destroy');
Route::get('/facultades/edit/{codfacultad}', [FacultadesController::class, 'edit'])->name('facultades.edit');
Route::put('/facultades/update/{codfacultad}', [FacultadesController::class,'update'])->name('facultades.update');

Route::get('/programas/listado', [ProgramasController::class, 'index'])->name('programas.listado');
Route::get('/programas/create', [ProgramasController::class, 'create'])->name('programas.create');
Route::post('/programas/store', [ProgramasController::class, 'store'])->name('programas.store');
Route::delete('/programas/destroy/{codprograma}', [ProgramasController::class, 'destroy'])->name('programas.destroy');

Route::get('/estudiantes/listado', [EstudiantesController::class, 'index'])->name('estudiantes.listado');
Route::get('/estudiantes/create', [EstudiantesController::class, 'create'])->name('estudiantes.create');
Route::post('/estudiantes/store', [EstudiantesController::class, 'store'])->name('estudiantes.store');
Route::delete('/estudiantes/destroy/{codestudiante}', [EstudiantesController::class, 'destroy'])->name('estudiantes.destroy');

Route::get('/profesores/listado', [ProfesoresController::class, 'index'])->name('profesores.listado');
Route::get('/profesores/create', [ProfesoresController::class, 'create'])->name('profesores.create');
Route::post('/profesores/store', [ProfesoresController::class, 'store'])->name('profesores.store');
Route::delete('/profesores/destroy/{codprofesor}', [ProfesoresController::class, 'destroy'])->name('profesores.destroy');


Route::get('/regnotas/listado', [Calificaciones::class, 'index']);
Route::get('/reportes/listado', [Reportes::class, 'index']);








