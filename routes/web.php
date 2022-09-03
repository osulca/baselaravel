<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaController;
use App\Http\Controllers\BancoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ArticuloController;
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

Route::get('/sistemas', [PaController::class, 'sistemas'])->name('paSistemas');
Route::get('/civil', [PaController::class, 'civil']);
Route::post('/procesado', [PaController::class, 'nombre'])->name("procesadoNombre");
Route::get('/usuarios/{id}/{edad}', [PaController::class, 'usuarios']);

//Pregunta 1
Route::get('/verbos', function(){
    return view('prueba');
});
Route::post('/verbos', function (){
    return "Haz hecho POST";
});

//Pregunta 2
Route::get('/suma/{op1}/{op2}', function (int $op1, int $op2){
    return $op1+$op2;
});

Route::get('/resta/{op1}/{op2}', function (int $op1, int $op2){
    return $op1-$op2;
});

Route::get('/multiplicacion/{op1}/{op2}', function (int $op1, int $op2){
    return $op1*$op2;
});

Route::get('/division/{op1}/{op2}', function (float $op1, float $op2){
    if($op2!=0) {
        return $op1 / $op2;
    }else{
        return "division entre 0";
    }
});

//Pregunta 3
Route::get('/sumaVista/{op1}/{op2}', function(int $op1, int $op2){
    return view('suma', ['op1'=>$op1, 'op2'=>$op2]);
});
Route::get('/multiVista/{op1}/{op2}', function(int $op1, int $op2){
    return view('multiplicacion', ['op1'=>$op1, 'op2'=>$op2]);
});

//Pregunta 4
Route::view('/form', 'formulario');
Route::post('/mostrar', function (Request $request){
    return view('mostrar', ['username'=>$request->input('username'),
        'pass1'=>$request->input('pass1'),
        'pass2'=>$request->input('pass2')]);
});

//Pregunta 5
Route::get('/usuario', function (Request $request){
    return md5($request->input('token'));
});

Route::get('/saldo', BancoController::class);

Route::apiResource('/usuario', UsuarioController::class);

Route::get('/articulos1', [ArticuloController::class, 'mostrar1']);
Route::get('/articulos2', [ArticuloController::class, 'mostrar2']);
Route::get('/articulos3', [ArticuloController::class, 'mostrar3']);
Route::get('/articulos3/guardar', [ArticuloController::class, 'guardar3']);
