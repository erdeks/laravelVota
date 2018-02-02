<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class verEncuesta extends Controller
{
  public function encuesta(){
    return view('voto.listaEncuestas');
  }
}
