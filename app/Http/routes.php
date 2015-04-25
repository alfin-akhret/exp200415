<?php

// need to separate routes in multiple files.
// foreach (File::allFiles(app_path().'/Http/routes') as $route) {
// 	require_once $route->getPathname();
// }

Route::group(['namespace' => 'Frontend'], function(){

	Route::get('/about', 'HomeController@about');
	Route::get('/contact', 'HomeController@contact');

	Route::resource('articles', 'ArticleController');


});

// Route for Administrator Dashboard
Route::group(['namespace' => 'Admin'], function(){
	// Route for application settings
	Route::group(['namespace' => 'Settings'], function(){
		// Account settings
		Route::resource('admin/settings/accounts', 'AccountController');

	});
});