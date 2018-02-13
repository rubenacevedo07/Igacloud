<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

	$api->get('notices/store', ['as' => 'notices.store', 'uses' => 'App\Http\Controllers\Api\V1\NoticesController@store']);

	$api->get('notices', ['as' => 'notices.index', 'uses' => 'App\Http\Controllers\Api\V1\NoticesController@index']);

	$api->post('notices', ['as' => 'notices.show', 'uses' => 'App\Http\Controllers\Api\V1\NoticesController@show']);

	$api->post('noticesbybusiness', ['as' => 'notices.bybussiness', 'uses' => 'App\Http\Controllers\Api\V1\NoticesController@bybussiness']);

	$api->post('user', ['as' => 'user.show', 'uses' => 'App\Http\Controllers\Api\V1\UserApiController@show']);

	$api->post('business', ['as' => 'business.show', 'uses' => 'App\Http\Controllers\Api\V1\MercadoApiController@show']);

	$api->post('pushbybusiness', ['as' => 'pushnoti.show', 'uses' => 'App\Http\Controllers\Api\V1\PushnotiController@showbybusiness']);

	$api->post('businessbyuser', ['as' => 'business.showbyuser', 'uses' => 'App\Http\Controllers\Api\V1\MercadoApiController@showByUser']);

	$api->post('authenticate', 'App\Http\Controllers\Auth\LoginController@authenticate');

	$api->post('getuserbyemail', 'App\Http\Controllers\Auth\LoginController@getUserByEmail');
	
	$api->post('checkupdate', 'App\Http\Controllers\Auth\LoginController@checkupdate');

	$api->post('register','App\Http\Controllers\Auth\LoginController@register');

	$api->post('profile','App\Http\Controllers\Api\V1\UserApiController@profile');

	$api->post('user', 'App\Http\Controllers\Auth\LoginController@authenticate');

});

Route::group(['prefix' => 'restricted','middleware' => 'auth:api'], function () {

    Route::get('logout', 'Api\AuthController@logout');

    Route::get('/test', function () {
        return 'authenticated';
    });
});