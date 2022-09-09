<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfesorController extends Controller
{
    public function mostrar1 (){
        $resultados = DB::table('profesors')->get();
        dd($resultados);
    }

    public function guardar1 (){
        DB::table('profesors')->insert([
            'nombres'=>'Susana Torres',
            'idioma'=>'Italiano',
        ]);
    }

    public function mostrar2 (){
        $resultados = Profesor::all();
        dd($resultados);
    }

    public function guardar2 (){
        $leccion = new Profesor();
        $leccion->nombres = "Omar Sulca";
        $leccion->idioma = "Inglés";
        $leccion->save();
    }
}
