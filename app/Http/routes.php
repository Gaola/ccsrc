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

Route::get('/', 'LandingController@index');

Route::group(['prefix' => 'news', 'namespace' => 'News'], function(){
	Route::get('/','HomeController@index');
	Route::get('/{id}', 'HomeController@show');
});

// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


//admin center
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function()
{
	Route::get('/', 'AdminHomeController@index');
	Route::resource('topic', 'TopicController');
	Route::resource('headpic', 'PicController');
	Route::resource('pages', 'PagesController');
	Route::resource('comments', 'CommentsController');
});

//User Center
Route::group(['prefix' => 'user', 'namespace' => 'User', 'middleware' => 'auth'], function()
{
	Route::get('/', 'HomeController@index');
});

Route::post('comment/store', 'CommentsController@store');

