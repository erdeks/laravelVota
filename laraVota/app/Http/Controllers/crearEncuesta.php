<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encuestas;
class crearEncuesta extends Controller
{
    public function cEncuesta(){
      return view('voto.crearEncuestas');
    }
    public function store(Request $request){
      $encu = Encuestas();
      if ($request-> has('nombre')){
        $encu->idUsuario=1;
        $encu->titulo = $request->input('titulo');
        $encu->save();
        return "<a href='/home'>Seguir</a>";
      }else{
        return "<a href='/crearEncuestas'>Volver</a>";
      }

    }
}
