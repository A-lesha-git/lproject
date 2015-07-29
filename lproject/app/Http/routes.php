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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('foo', function () {
//    return 'bar';
//});

//Route::get('simples', 'SimplesController@simples');
//Route::get('simples/create', 'SimplesController@create');
//Route::get('simples/{id}', 'SimplesController@show');
//Route::post('simples', 'SimplesController@store');
//Route::get('simples/{id}/edit', 'SimplesController@edit');
//Route::get('simples/update', 'SimplesController@update');
Route::resource('simples', 'SimplesController');