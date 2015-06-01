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

$app->get('/', function() use ($app) {
    // return $app->welcome();
	// dd(base_path('app/config'));
});
$app->get('auth/login', '\App\Http\Controllers\AuthController@getLogin');
$app->post('auth/login', '\App\Http\Controllers\AuthController@postLogin');
