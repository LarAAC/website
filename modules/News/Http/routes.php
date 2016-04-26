<?php

Route::group(['middleware' => 'web', 'prefix' => 'news', 'namespace' => 'Laracc\News\Http\Controllers'], function()
{
	Route::get('/', 'NewsController@index');
});