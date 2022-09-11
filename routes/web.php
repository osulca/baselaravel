<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProgramacionController;
use App\Http\Controllers\LeccionController;
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

Route::get('/', function () {
    return view('welcome');
});
//Controlador Profesor
Route::get('/profesor1', [ProfesorController::class, 'mostrar1']);
Route::get('/profesor1/guardar', [ProfesorController::class, 'guardar1']);
Route::get('/profesor2', [ProfesorController::class, 'mostrar2']);
Route::get('/profesor2/guardar', [ProfesorController::class, 'guardar2']);

//Controlador Estudiante
Route::get('/estudiantes1', [EstudianteController::class, 'mostrar1'])->name("mostrar");
Route::post('/estudiantes1/guardar', [EstudianteController::class, 'guardar1']);
Route::get('/estudiantes2', [EstudianteController::class, 'mostrar2']);
Route::get('/estudiantes2/guardar', [EstudianteController::class, 'guardar2']);

//Controlador Programaciones
Route::get('/programaciones1', [ProgramacionController::class, 'mostrar1']);
Route::get('/programaciones1/guardar', [ProgramacionController::class, 'guardar1']);
Route::get('/programaciones2', [ProgramacionController::class, 'mostrar2']);
Route::get('/programaciones2/guardar', [ProgramacionController::class, 'guardar2']);

//Controlador lecciones
Route::get('/lecciones1', [LeccionController::class, 'mostrar1']);
Route::get('/lecciones1/guardar', [LeccionController::class, 'guardar1']);
Route::get('/lecciones2', [LeccionController::class, 'mostrar2']);
Route::get('/lecciones2/guardar', [LeccionController::class, 'guardar2']);
