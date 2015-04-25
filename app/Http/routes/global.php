<?php

Route::group(['namespace' => 'Frontend'], function(){

	Route::get('/about', 'HomeController@about');
	Route::get('/contact', 'HomeController@contact');
	Route::get('/articles', 'ArticleController@index');
	Route::get('/articles/create', 'ArticleController@create');
	Route::post('/articles', 'ArticleController@store');
	Route::get('/articles/{id}', 'ArticleController@show');



});