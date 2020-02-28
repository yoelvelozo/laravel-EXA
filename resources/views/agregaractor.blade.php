@extends('plantilla.plantilla')

@section('contenido')

    <h1>agregeu lo que quiera</h1>

    <form class=""  method="post">
      @csrf
      <label for="">primer nombre</label>
      <input type="text" name="first_name" value="">
      <br>
      <label for="">Apellido</label>
      <input type="text" name="last_name" value="">
      <br>
      <label for="">valoracion</label>
      <input type="number" name="rating" value="">
       <button type="submit" name="button">Enviar</button>
      </form>
@endsection
