<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    public function mostrar1 (){
        $resultados = DB::table('estudiantes')->get();
        return view("estudiantes.mostrar")
            ->with("resultados", $resultados)
            ->with("saludo","Hola Mundo");
    }

    public function guardar1 (Request $request){
        DB::table('estudiantes')->insert([
            'nombre'=>$request->input("nombre"),
            'email'=>$request->input("email")
        ]);
        return redirect('/estudiantes1');
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
