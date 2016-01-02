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

Route::get('/', function () {
    return view('list');    // resources/views/list.blade.phpを開く
});

// Default Authentication
#Route::get('auth/login',  'Auth\AuthController@getLogin');
#Route::post('auth/login', 'Auth\AuthController@postLogin');
#Route::get('auth/logout', 'Auth\AuthController@getLogout');
#
// Default Registration
#Route::get('auth/register',  'Auth\AuthController@getRegister');
#Route::post('auth/register', 'Auth\AuthController@postRegister');

// REST API
Route::group(['prefix' => 'api'], function() {
    Route::resource('comments', 'CommentController', ['only' => ['index', 'store', 'destroy']]);
});


