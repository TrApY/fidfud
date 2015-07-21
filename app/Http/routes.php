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



Route::get('/', [
    'uses' => 'HomeController@index',
    'as'   => 'home'
]);

Route::get('hola', [
    'uses' => 'HomeController@show',
    'as'   => 'hola'
]);

Route::get('categorias/{id}', [
    'uses' => 'CategoriasController@index',
    'as'   => 'categorias'
]);

/*Route::get('diabetes', [
    'uses' => 'DiabetesController@index',
    'as'   => 'diabetes'
]);
Route::get('celiaquia', [
    'uses' => 'CeliaquiaController@index',
    'as'   => 'celiaquia'
]);
Route::get('lactosa', [
    'uses' => 'IntLactosaController@index',
    'as'   => 'lactosa'
]);*/


/*Route::controllers([
    'diabetes' => 'DiabetesController'
]);*/




Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'Admin'], function () {

});





/*// Authentication routes...
Route::get('login', [
    'uses' => 'Auth\AuthController@getLogin',
    'as'   => 'login'
]);
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', [
    'uses' => 'Auth\AuthController@getLogout',
    'as'   => 'logout'
]);

// Registration routes...
Route::get('register', [
    'uses' => 'Auth\AuthController@getRegister',
    'as' => 'register'
]);
Route::post('register', 'Auth\AuthController@postRegister');

Route::get('confirmation/{token}', [
    'uses' => 'Auth\AuthController@getConfirmation',
    'as' => 'confirmation'
]);

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');*/