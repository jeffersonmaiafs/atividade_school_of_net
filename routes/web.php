<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('inicio');
});


Route::get('foo', function () {
    return 'Hello World';
});

Route::get('noticias','BlogController@index');

Route::get('noticias','BlogController@menu');

Route::get('como_chegar','ComochegarController@index');

Route::get('como_chegar','ComochegarController@menu');


Route::get('inicio','InicioController@menu');
