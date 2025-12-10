<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\estudianteController;

Route::get('/', function () {
    return view('layout.inicio');
});

Route::get('/listarEstudiantes', [estudianteController::class, 'index'])->name('estudiantes');
Route::get('/crear', [estudianteController::class, 'crear']) ->name('crear');
Route::post('/guardar', [estudianteController::class, 'guardar']) ->name('guardar');

Route::get('/editar/{id}', [estudianteController::class, 'editar']) ->name('editar');
Route::put('/actualizar/{id}', [estudianteController::class, 'actualizar']) ->name('actualizar');

Route::get('/borrar/{id}', [estudianteController::class, 'borrar']) ->name('borrar');