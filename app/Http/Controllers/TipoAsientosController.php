<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoAsiento;

class TipoAsientosController extends Controller
{
    public function agregarAsiento(){
        return view('agregarTipoAsiento');
    }

    public function vistaEditar(){
        return view('editarAsiento');
    }
   

    public function guardarAsiento(Request $request){
        $nvoAsiento = new TipoAsiento();
        $nvoAsiento->descripcion = $request->input('descripcion');
        $nvoAsiento->precio = $request->input('precio');
        $nvoAsiento->estado = $request->input('estado');
        $nvoAsiento -> save();

        return redirect('agregarTipoAsiento');
    }

}
