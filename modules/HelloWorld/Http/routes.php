<?php

Route::group(['middleware' => 'web', 'prefix' => 'helloworld', 'namespace' => 'Laracc\HelloWorld\Http\Controllers'], function()
{
	Route::get('/', 'HelloWorldController@index');
});