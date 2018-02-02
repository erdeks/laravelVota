@extends('layouts.app')
@section('content')
<form action="{{url('voto')}}" method="post">
  {{csrf_field()}}
  <input type="text" name="nombre" placeholder="Introduce la pregunta">
  <input type="submit" value="enviar">
</form>
@endsection
