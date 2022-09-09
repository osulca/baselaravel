<?php

namespace App\Http\Controllers;

use App\Models\Programacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramacionController extends Controller
{
    public function mostrar1 (){
        $resultados = DB::table('programacions')->get();
        dd($resultados);
    }

    public function guardar1 (){
        DB::table('programacions')->insert([
            'inicio'=>'22/02/2022',
            'tipo'=>'premium',
            'profesor_id'=>1,
        ]);
    }

    public function mostrar2 (){
        $resultados = Programacion::all();
        dd($resultados);
    }

    public function guardar2 (){
        $leccion = new Programacion();
        $leccion->inicio = "05/09/2022";
        $leccion->tipo = "normal";
        $leccion->profesor_id = 2;
        $leccion->save();
    }
}
