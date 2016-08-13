<?php

/***********************  Route Constraints ***********************/
Route::pattern('id', '[0-9]+');
Route::pattern('slug', '[0-9a-z-_]+');

/***********************  Page routes       ***********************/
Route::get('/', 'HomeController@index');

/***********************  Auth routes       ***********************/
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::group(['prefix' => '/oauth'], function() {
  Route::get('/facebook', 'Auth\OAuthController@facebook');
  Route::get('/google', 'Auth\OAuthController@google');
});
/***********************  Resource routes   ***********************/
Route::resource('events', 'EventController');

/***********************  Admin routes      ***********************/
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {

    Route::get('dashboard', function() {
      return redirect()->to('/admin/users');
    });
    // Photos
    Route::resource('photos', 'Admin\PhotoController');
    // Users
    Route::resource('users', 'Admin\UserController');
    // Categories
    Route::resource('categories', 'Admin\CategoryController');
    // Events
    Route::resource('events', 'Admin\EventController');
});

/***********************  Api routes    ****************************/
Route::group(['prefix' => 'api'], function() {
  Route::resource('events', 'Api\EventController', 
                 ['only'   =>  ['index', 'show']]);
  Route::resource('societies', 'Api\SocietyController',
                 ['only'  =>  ['index', 'show']]);
  Route::resource('categories', 'Api\CategoryController',
                 ['only'  =>  ['index', 'show']]);
});