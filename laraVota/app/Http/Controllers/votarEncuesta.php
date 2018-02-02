<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class votarEncuesta extends Controller
{
  public function vEncuesta(){
    return view('votarEncuestas')
  }
}
