<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class moviecontroller extends Controller
{
    public $guarded=[];

    public function verpelicula(){
      $pelicula=Movie::all();

      return view("Verpelicula", compact('pelicula'));
    }
    
      public function infoPeli($id){
  $peliculaElegida = Movie::find($id);
  return view ('pelicula', compact('peliculaElegida'));

    }
}
