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




//Route::resource('prueba', 'PruebasController');
Route::get('/', 'PruebasController@index');
Route::resource('prueba', 'PruebasController');
Route::get('noticias', 'PruebasController@note');

Route::put('prueba/{id}', 'PruebasController@update');
//Route::put('prueba/{id}', 'PruebasController@update');
Route::get('/noticiaimagen/{filename}',[
    'uses'=>'PruebasController@getImagen',
    'as'=>'noticia.imagen'
]);



