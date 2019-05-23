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

Route::get('/', 'BlogsController@index');

Route::get('/post-{id}', 'PostController@index')->where('id', '[0-9]+');

Route::get('/edit-{id}', ['middleware' => 'auth', 'uses' => 'EditController@index'])->where('id', '[0-9]+');

Route::get('/create', 'CreateController@index');

Route::post('/save',  ['middleware' => 'auth', 'uses' => 'CreateController@save']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
