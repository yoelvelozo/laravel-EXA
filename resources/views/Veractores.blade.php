@extends('plantilla.plantilla')

@section('contenido')


    <h1>actores</h1>
<div>

    @foreach ($actores as $id => $actor)
      <ul>
         <a href="/infoactores/{{$actor->id}}"><li>{{$actor->first_name}}</li>
      </ul>
    @endforeach
</div>

@endsection
