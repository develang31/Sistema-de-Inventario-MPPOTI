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

Route::get('/','InicioController@index');
Route::resource('sede','SedeController');
Route::resource('cargo','CargoController');
Route::resource('area','AreaController');
Route::post('area/guardar-orden', 'AreaController@guardarOrden')->name('guardar_orden');
