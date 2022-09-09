<?php

namespace App\Http\Controllers;

use App\Models\Leccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeccionController extends Controller
{
    public function mostrar1 (){
        $resultados = DB::table('leccions')->get();
        dd($resultados);
    }

    public function guardar1 (){
        DB::table('leccions')->insert([
            'numero'=>3,
            'status'=>'Terminado',
            'comentario_profesor'=>'omentario 1 Profesor',
            'comentario_estudiante'=>'Comentario 1 Estudiante',
            'programacion_id'=>2,
            'estudiante_id'=>1
        ]);
    }

    public function mostrar2 (){
        $resultados = Leccion::all();
        dd($resultados);
    }

    public function guardar2 (){
        $leccion = new Leccion();
        $leccion->numero = 2;
        $leccion->status = "Programado";
        $leccion->comentario_profesor = "Comentario 2 Profesor";
        $leccion->comentario_estudiante = "Comentario 2 Estudiante";
        $leccion->programacion_id = 1;
        $leccion->estudiante_id = 2;
        $leccion->save();
    }
}
