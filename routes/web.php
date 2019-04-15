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

Route::get('/', [
    'as' => 'index',
    'uses' => 'EmpresaController@index'
]);
Route::get('/criar', [
    'as' => 'create',
    'uses' => 'EmpresaController@create'
]);
Route::get('/{id}', [
    'as' => 'show',
    'uses' => 'EmpresaController@show'
]);
Route::post('store', [
    'as' => 'store',
    'uses' => 'EmpresaController@store'
]);
//Route::resource('', 'EmpresaController');
