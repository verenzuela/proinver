<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Group routes for Home */
Route::prefix('/')->group(function ()
{

	Route::get('/',[
		'uses' => 'Home\HomeController@home',
		'as' => 'home.page'
	]);

	Route::get('/about',[
		'uses' => 'Home\HomeController@about',
		'as' => 'home.about'
	]);

	Route::get('/contact',[
		'uses' => 'Home\HomeController@contact',
		'as' => 'home.contact'
	]);

});


/* Group routes for admin */
Route::prefix('/admin')->group(function ()
{

	

});


/* Group routes for app */
Route::prefix('/app')->group(function ()
{

	

});

