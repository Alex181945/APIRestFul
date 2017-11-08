<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('plantilla.vistas.home');
});


Route::get('/login', function () {
    return view('plantilla.vistas.home');
});


Route::get('/logout', function () {
    return view('plantilla.vistas.home');
});


Route::get('/alumnos', function () {
    return view('plantilla.vistas.home');
});

Route::get('/alumno/muestra', 'Catalogos\AlumnoController@getShow');

Route::get('/alumno/crea', function () {
    return view('plantilla.vistas.home');
});

Route::get('/alumno/edita', function () {
    return view('plantilla.vistas.home');
});