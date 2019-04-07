<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ['namespace' => 'App\Api\Controllers'], function($api) {
	$api->post('register', 'AuthController@register');
	$api->post('login', 'AuthController@login');
	$api->post('logout', 'AuthController@logout');
	$api->post('refresh', 'AuthController@refresh');
	$api->post('me', 'AuthController@me');

	$api->group(['middleware' => 'api.auth'], function($api) {
		$api->get('/lessons', 'LessonsController@index');
	});
});





