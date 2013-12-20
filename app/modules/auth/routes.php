<?php

ModuleRoute::context('Auth');

ModuleRoute::controller('auth/registration', 'RegistrationController');

ModuleRoute::get('auth', ['as' => 'login', 'uses' => 'LoginController@index']);
ModuleRoute::post('auth/login', 'LoginController@login');

ModuleRoute::controller('auth/logout', 'LogoutController', ['getIndex' => 'logout']);

/*
// Bind model to route
Route::model('user', 'App\Modules\Users\Models\User');

// Define routes
Route::get('admin/users/edit/{user}', 'App\Modules\Users\Controllers\AdminController@getEdit')->where('user', '[0-9]+');
Route::post('admin/users/edit/{user}', 'App\Modules\Users\Controllers\AdminController@postEdit')->where('user', '[0-9]+');
Route::get('admin/users/delete/{user}', 'App\Modules\Users\Controllers\AdminController@getDelete')->where('user', '[0-9]+');

// Restful controller actions
Route::controller('admin/users', 'App\Modules\Users\Controllers\AdminController', ['getIndex' => 'admin.users', 'getCreate' => 'admin.users.create']);

Route::get('login', ['as' => 'users.login', 'uses' => 'App\Modules\Users\Controllers\UsersController@index']);
Route::post('login', 'App\Modules\Users\Controllers\UsersController@login');
*/