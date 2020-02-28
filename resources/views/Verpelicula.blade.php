@extends('plantilla.plantilla')

@section('contenido')

    <h1>Peliculas</h1>
@if ($pelicula)

     @foreach ($pelicula as $id => $peli)
       <ul>
         <a href="/pelicula/{{$peli->id}}"><li>{{$peli->title}}</li>
       </ul>

     @endforeach
   @endif
@endsection
