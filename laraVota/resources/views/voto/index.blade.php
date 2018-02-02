@extends('layouts.app')


@section('content')

<div class="row">

    @foreach( $arrayEncus as $key => $encuestas )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">

        <a href="{{ url('/voto/' . $encuestas['id'] ) }}">
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$encuestas['nombre']}}
            </h4>
        </a>

    </div>
    @endforeach

</div>
@endsection
