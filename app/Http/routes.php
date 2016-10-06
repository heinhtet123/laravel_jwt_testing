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
    return view('welcome');
});




Route::group(['prefix'=>'api'],function(){
	Route::get("user/login",['uses'=>"UserController@login",'as'=>'api.user.login']);
	Route::post("user/authenticate",['uses'=>"UserController@authenticate",'as'=>'api.user.authenticate']);	
	
	Route::group(['middleware'=>'jwt.auth'],function(){
		Route::resource("user","UserController",['only'=>"index"]);
	});
	
});