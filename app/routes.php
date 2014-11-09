<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

// 	Homepage routes
Route::get('/', array('as' => 'homepage', 'uses' => 'HomeController@index'));
Route::get('/index', 'HomeController@index');

//	User account routes
Route::get('users/login', array('as' => 'users.getLogin', 'uses' => 'UsersController@getLogin'));
Route::post('users/login', array('as' => 'users.login', 'uses' => 'UsersController@login'));
Route::get('users/logout', array('as' => 'users.logout', 'uses' => 'UserController@logout'));
Route::resource('users', 'UsersController');
	

