<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('ingresar',[
			'as' 	=>	'ingresar',
			'uses'	=>	'PersonaController@ingresar']
		);

Route::post('ingresar',[
			'as' 	=>	'post-ingresar',
			'uses'	=>	'PersonaController@ingresarPost']
		);

Route::get('mostrar',[
			'as' 	=>	'mostrar',
			'uses'	=>	'PersonaController@mostrar']
		);


Route::get('actualizar/{id}',[
			'as' 	=>	'actualizar',
			'uses'	=>	'PersonaController@actualizar']
		);

Route::post('actualizar',[
			'as' 	=>	'post-actualizar',
			'uses'	=>	'PersonaController@actualizarPost']
		);

Route::get('borrar/{id}',[
			'as' 	=>	'borrar',
			'uses'	=>	'PersonaController@borrar']
		);