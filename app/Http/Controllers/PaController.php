<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaController extends Controller
{
    public function sistemas(){
        return view('isi');
    }

    public function civil(){
        return view('ic', ['profesor'=>'Omar Sulca', 'inicio'=>'5']);
    }

    public function nombre(Request $request){
        return $request->input("nombre");
    }

    public function usuarios(int $id, int $edad){
        return "Usuario id: ".$id."<br>".
               "Edad: ".$edad;
    }
}
