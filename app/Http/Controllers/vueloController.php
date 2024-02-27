<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\vuelo;

class vueloController extends Controller
{
    //
    public function vuelos(){
        $vuelos = vuelo::all();
        return view("vuelos", compact("vuelos"));
    }

    public function crearvuelo(){
        $vuelos = Vuelo::all();
        return view("nuevoVuelo");
    }

    public function guardarVuelo(Request $request){
        $numero = $request->input('numero');
        $validarnumerovuelo = Vuelo::where('numeroVuelo' , $numero )->first();
        if ($validarnumerovuelo){
            echo "Numero de vuelo ya existente";
        }else{
            $nvoVuelo = new vuelo();
            $nvoVuelo->numeroVuelo = $request->input("numero");
            $nvoVuelo->origen = $request->input("origen");
            $nvoVuelo->destino = $request->input("destino");
            $nvoVuelo->fechaSalida = $request->input('fecha');
            $nvoVuelo->numeroAsientos = $request->input('cantidad');

            $nvoVuelo->save();

            return redirect('/');

        }
    }
}
