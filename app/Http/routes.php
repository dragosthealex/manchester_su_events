<?php

/**************** Route Constraints **************************/
Route::pattern('id', '[0-9]+');
Route::pattern('slug', '[0-9a-z-_]+');

/***************    Site routes  **********************************/
Route::get('/', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::resource('events', 'EventController', 
                ['except'   =>  ['create', 'store', 'update', 'destroy']]);
Route::resource('events', 'EventController', 
                          ['middleware'  =>  'EventModeratorMiddleware',
                           'only'        =>  ['create', 'store', 'update', 'destroy']
                          ]);

/***************    Admin routes  **********************************/
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {

    // Admin Dashboard
    Route::get('dashboard', 'Admin\DashboardController@index');
    // Photos
    Route::resource('photo', 'Admin\PhotoController');
    // Users
    Route::resource('user', 'Admin\UserController');
    // Categories
    Route::resource('category', 'Admin\CategoryController');
});

/***************    Api routes  **********************************/
Route::group(['prefix' => 'api'], function() {
  Route::resource('events', 'Api\EventController', 
                ['except'   =>  ['create', 'store', 'update', 'destroy']]);
});