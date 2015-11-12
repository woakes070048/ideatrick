<?php

Route::get('/','SitesController@index');

Route::resource('dashboard','DashboardController');

Route::resource('blog','BlogsController');
// Route::get('blog','BlogsController@index');
// Route::get('blog/{id}','BlogsController@details');
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
    ]);
