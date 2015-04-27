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
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){ 

	// Route for application settings
	Route::group(['namespace' => 'Settings', 'prefix' => 'settings'], function(){
	
		// Account settings
		Route::get('users/{id}/delete', [									// acount sounds lil bit odd... lets change that to user instead
			'as' => 'admin.settings.users.delete',
			'uses' => 'UserController@confirmDelete'
		]);
		Route::resource('users', 'UserController');
	
	});
});