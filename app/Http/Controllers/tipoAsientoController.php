<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tipoAsiento;

class tipoAsientoController extends Controller
{
    //
    public function tipoAsientos(){
        $tipoAsiento = tipoAsiento::where('estado','A')->get();
        return view("tiposAsientos", compact("tipoAsiento"));
    }

    public function crearAsientos(){
        return view("agregarTipoAsiento");
    }

    public function guardarTipoAsiento(Request $request){
        $nvoTipoAsiento = new tipoAsiento();
        $nvoTipoAsiento->descripcion = $request->input('descripcion');
        $nvoTipoAsiento->precio = $request->input('precio');
        $nvoTipoAsiento->estado = $request->input('estado');
        $nvoTipoAsiento->save();

        return redirect('/');
    }

    public function cambiarestadoAsiento($id){
        $tipoAsiento = tipoAsiento::where('idTipoAsiento', $id)->first();
        $tipoAsiento->estado = "I";
        $tipoAsiento->save();

        return redirect("/");
    }

    public function editarAsiento($id){
        $tipoAsiento = tipoAsiento::where('idTipoAsiento', $id)->first();
        return view('editarAsiento', compact('tipoAsiento'));
    }

    public function guardarcambiosAsiento(Request $request, $id){
        $nvoTipoAsiento = tipoAsiento::where('idTipoAsiento', $id)->first();
        $nvoTipoAsiento->descripcion = $request->input('descripcion');
        $nvoTipoAsiento->precio = $request->input('precio');
        $nvoTipoAsiento->estado = $request->input('estado');
        $nvoTipoAsiento->save();

        return redirect('/');
    }

}
