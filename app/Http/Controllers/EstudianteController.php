<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    public function mostrar1 (){
        $resultados = DB::table('estudiantes')->get();
        dd($resultados);
    }

    public function guardar1 (){
        DB::table('estudiantes')->insert([
            'nombre'=>'Ana Torres',
            'email'=>'ana@torres.com'
        ]);
    }

    public function mostrar2 (){
        $resultados = Estudiante::all();
        dd($resultados);
    }

    public function guardar2 (){
        $estudiante = new Estudiante();
        $estudiante->nombre = "Pedro Perez";
        $estudiante->email = "pedro@perez.com";
        $estudiante->save();
    }
}
