<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', [
	'as' => 'index',
	'uses' => 'HomeController@getIndex'
]);

//controls anchor destination.
Route::get('admin', [
	'as' => 'admin',
	'uses' => 'AdminController@index'
]);


/* View all posts */

Route::get('blog', [
	'as' => 'blog',
	'uses' => 'PostController@getIndex'
]);

/*Individual post routes*/

Route::post('blog/post/{id}/create', [
	'as' => 'post-create',
	'uses' => 'PostController@create'
]);

//slug is passed to url
Route::get('blog/post/{slug}', [
	'as' => 'post-show', 
	'uses' => 'PostController@show'
]);

Route::get('blog/post/{id}/edit', [
	'as' => 'post-edit', 
	'uses' => 'PostController@edit'
]);

Route::patch('blog/post/{id}/update', [
	'as' => 'post-update', 
	'uses' => 'PostController@update'
]);

Route::get('blog/post/{id}/delete', [
	'as' => 'post-delete', 
	'uses' => 'PostController@destroy'
]);

Route::get('blog/post/{id}/edit', [
	'as' => 'post-edit', 
	'uses' => 'PostController@edit'
]);

/*Tag Routes*/

Route::get('/tags', [
	'as' => 'tags-all',
	'uses' => 'TagController@all'
]);

Route::get('tags/{tag}', [
	'as' => 'tag-show',
	'uses' => 'TagController@show'
]);


/*Login routes (for future implementation)*/

Route::get('login', array(
	'as' => 'login', function()
	{
		return View::make('login');
	}
));
