@extends('plantilla.plantilla')

@section('contenido')

  <body>
    <h1>Generos</h1>
@foreach ($genero as $key => $generos)
   <ul>
     <li>{{$generos->name}}</li>
   </ul>
 @endforeach

@endsection
