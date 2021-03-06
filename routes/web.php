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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'EvaluacionController@index' );

Route::get('/registro', 'EvaluacionController@registro');

Route::get('/listado', 'EvaluacionController@listado');

Route::get('/detalles/{id}', 'EvaluacionController@detalles')->where(['id' => '[0-9]+']);

Route::post('/registro/resultado', 'EvaluacionController@resultado');