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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '', 'as' => 'site.'], function() {
    Route::get('/cadastro', 'SiteCadastroController@create');
});

Route::group(['prefix' => 'service', 'as' => 'service.'], function() {
	Route::get('/client', 'ClientsController@index');
	Route::get('/client/{id}', array('as' => 'client', 'uses' => 'ClientsController@byId'));
	Route::post('/client', 'ClientsController@create');
	Route::delete('/client/{id}', 'ClientsController@destroy');
});