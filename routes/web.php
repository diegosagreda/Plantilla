<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Facultades;
use App\Http\Controllers\Programas;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Calificaciones;
use App\Http\Controllers\Profesores;
use App\Http\Controllers\Reportes;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/facultades/listado', [Facultades::class, 'index']);
Route::get('/programas/listado', [Programas::class, 'index']);
Route::get('/estudiantes/listado', [Estudiantes::class, 'index']);
Route::get('/profesores/listado', [Profesores::class, 'index']);
Route::get('/regnotas/listado', [Calificaciones::class, 'index']);
Route::get('/reportes/listado', [Reportes::class, 'index']);








