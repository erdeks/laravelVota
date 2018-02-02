<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encuestas;
class EncuestasController extends Controller
{
  public function index(){
    $arrayEncus = Encuestas::all();
    return view( 'voto.index', array('arrayEncus'=>$arrayEncus));
  }
  public function Create(){
    return view('voto.crearEncuestas');
  }
  public function store(Request $request){
    $encu = new Encuestas();
    if ($request-> has('nombre')){
      $encu->idUsuario=1;
      $encu->nombre = $request->input('nombre');
      $encu->save();
      return "<a href='/home'>Seguir</a>";
    }else{
      return "<a href='/voto/create'>Volver</a>";
    }

  }

  public function show($id){
  		$arrayEncus = Encuestas::find($id);
    	return view('voto.listaEncuestas', array('id'=>$id, 'nombre'=>$arrayEncus));
  	}


}
