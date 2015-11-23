<?php

Route::get('/',[
	'as' => 'home',
	'uses' => 'SitesController@index'
	]);

Route::get('event','SitesController@event');

Route::resource('dashboard','DashboardController');

Route::resource('blog','BlogsController');

Route::get('register','AuthController@register');
Route::get('register/verify/{activationCode}', [
    'as' => 'activation',
    'uses' => 'AuthController@activate'
]);

Route::post('register','AuthController@postRegister');

Route::get('login',[
	'as' => 'login_path',
	'uses' => 'AuthController@login'
	]);

Route::post('login',[
	'as' => 'login_post',
	'uses' => 'AuthController@postLogin'
	]);

Route::get('logout',[
	'as' => 'logout_path',
	'uses' => 'AuthController@destroy'
	]);

 Route::controllers([
     'password' => 'Auth\PasswordController',
    ]);

// Route::get('blog','BlogsController@index');
// Route::get('blog/{id}','BlogsController@details');
//     
