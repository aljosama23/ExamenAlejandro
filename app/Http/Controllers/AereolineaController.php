<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AereolineaController extends Controller
{
    public function abrirAsientos(){
        return view('tiposAsientos');
    }

    public function abrirVuelos(){
        return view('vuelos');
    }
}
