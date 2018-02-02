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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
/*Route::get('/verEncuestas', 'verEncuesta@encuesta')->name('verEncuestas');
Route::post('/verEncuestas', 'verEncuesta@encuesta')->name('verEncuestas');
Route::get('/crearEncuestas', 'crearEncuesta@cEncuesta')->name('crearEncuestas');
Route::post('/crearEncuestas', 'crearEncuesta@cEncuesta')->name('crearEncuestas');
Route::get('/votarEncuestas', 'votarEncuesta@vEncuesta')->name('votarEncuestas');
Route::post('/votarEncuestas', 'votarEncuesta@vEncuesta')->name('votarEncuestas');*/
Route::resource('voto', 'EncuestasController');
