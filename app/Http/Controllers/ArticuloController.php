<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticuloController extends Controller
{
    public function mostrar1(){
        $resultados = DB::select('SELECT * FROM articulos');
        echo "<pre>";
        foreach ($resultados as $i=>$dato){
            echo "$dato->nombre<br>";
        }
        echo "</pre>";
    }

    public function mostrar2(){
        $resultados = DB::table('articulos')->get();
        echo "<pre>";
        foreach ($resultados as $i=>$dato){
            echo "$dato->nombre<br>";
        }
        echo "</pre>";
    }

    public function mostrar3(){
        $resultados = Articulo::all();
        echo "<pre>";
        foreach ($resultados as $i=>$dato){
            echo "$dato->nombre<br>";
        }
        echo "</pre>";
    }

    public function guardar3(){
        $articulo = new Articulo();
        $articulo->nombre = "Ryzen3";
        $articulo->precio = 980;
        $articulo->fabricante_id = 4;
        $articulo->save();
    }
}
