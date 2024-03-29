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

//The route to the homepage
Route::get('/', function () {
    return view('welcome');
});

//The routes to the other pages
Route::get('welcome', 'PagesController@home');
Route::get('about','PagesController@about');
Route::get('login', 'PagesController@login');
Route::get('createaccount', 'PagesController@createaccount');
Route::get('download', ['middleware' => 'auth', 'uses' => 'PagesController@download']);

//Routes for the uploadpage and the post request for uploading files
Route::get('uploadPage', ['middleware' => 'auth', 'uses' => 'UploadController@upload']);
Route::post('uploadMultiple', 'UploadController@multiple_upload');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Route for the passwordcontroller (forgot password function)
Route::controllers([
   'password' => 'Auth\PasswordController',
]);

//Testpage to see information about PHP installation & extensions (phpinfo())
Route::get('test', function(){
    return view('pages.testpage');
});