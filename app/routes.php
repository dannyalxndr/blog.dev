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

// Route::get('/', 'HomeController@showWelcome');
// Route::get('/sayhello/{name}', 'HomeController@sayHello');

// Route::get('/', 'HomeController@konamiPage');
Route::get('/', 'HomeController@mainPage');

Route::get('/sayHello/{name}', 'HomeController@sayHello');

Route::resource('posts', 'PostsController');

Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@logout');

// Route::get('/register', 'HomeController@showRegistration');

Route::get('/register', 'HomeController@showRegister');

Route::post('register_action', function(){
    $obj = new RegisterController() ;
    return $obj->store();
});





