<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/infoactores/{id}', 'actorcontroller@infoactor');
Route::get('/mostrar', 'actorcontroller@veractores');

Route::get('/actores', function(){
  return view("agregaractor");
});
Route::post('/actores', 'actorcontroller@agregar');

Route::get('/peliculas', 'moviecontroller@verpelicula');
Route::get('/pelicula/{id}', 'moviecontroller@infopeli');

Route::get('/generos', 'genrecontroller@vergenero');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
