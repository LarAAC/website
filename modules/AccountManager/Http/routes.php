<?php

Route::group(['middleware' => 'web', 'as' => 'account.', 'prefix' => 'account', 'namespace' => 'Laracc\AccountManager\Http\Controllers'], function()
{
	Route::get('/', [
		'as' => 'home',
		'uses' => 'AccountManagerController@index',
	]);

	Route::get('create', [
		'as' => 'create',
		'uses' => 'AccountManagerController@create',
	]);

	Route::post('create', [
		'as' => 'create',
		'uses' => 'AccountManagerController@createPost',
	]);

	Route::get('login', [
		'as' => 'login',
		'uses' => 'AccountManagerController@login',
	]);

	Route::post('login', [
		'as' => 'login',
		'uses' => 'AccountManagerController@loginPost',
	]);
});