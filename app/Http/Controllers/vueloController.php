<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class vueloController extends Controller
{
    //
    public function vuelos(){
        return view("vuelos");
    }
}
