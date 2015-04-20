<?php

Route::group(['namespace' => 'Frontend'], function(){

	Route::get('/', 'HomeController@index');

});