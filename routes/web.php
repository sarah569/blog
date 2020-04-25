<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/test', function () {
    return App\User::find(1)->profile;
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['prefix'=>'admin','middleware'=>'auth'], function () {

	Route::get('/home', [
		'uses' => 'HomeController@index',
		'as' => 'home'
	]);

	Route::get('/post/create',[
		'uses' => 'PostController@create',
		'as' => 'post.create'
	]);

	Route::post('/post/store',[
		'uses' => 'PostController@store',
		'as' => 'post.store'
	]);

	Route::get('/post/delete/{id}',[
		'uses' => 'PostController@destroy',
		'as' => 'post.delete'
	]);

	Route::get('/posts',[
		'uses' => 'PostController@index',
		'as' => 'posts'
	]);

	Route::get('/posts/trashed',[
		'uses' => 'PostController@trashed',
		'as' => 'posts.trashed'
	]);

	Route::get('/posts/kill/{id}',[
		'uses' => 'PostController@kill',
		'as' => 'post.kill'
	]);

	Route::get('/posts/restore/{id}',[
		'uses' => 'PostController@restore',
		'as' => 'post.restore'
	]);

	Route::get('/posts/edit/{id}',[
		'uses' => 'PostController@edit',
		'as' => 'post.edit'
	]);

	Route::post('/post/update/{id}',[
		'uses' => 'PostController@update',
		'as' => 'post.update'
	]);

	Route::get('/category',[
		'uses' => 'CategoryController@index',
		'as' => 'category'
	]);

	Route::get('/category/create',[
		'uses' => 'CategoryController@create',
		'as' => 'category.create'
	]);

	Route::post('/category/store',[
		'uses' => 'CategoryController@store',
		'as' => 'category.store'
	]);

	Route::get('/category/edit/{id}',[
		'uses' => 'CategoryController@edit',
		'as' => 'category.edit'
	]);

	Route::get('/category/delete/{id}',[
		'uses' => 'CategoryController@destroy',
		'as' => 'category.delete'
	]);

	Route::post('/category/update/{id}',[
		'uses' => 'CategoryController@update',
		'as' => 'category.update'
	]);

	Route::get('/tags',[
		'uses' => 'TagController@index',
		'as' => 'tags'
	]);

	Route::get('/tag/create',[
		'uses' => 'TagController@create',
		'as' => 'tag.create'
	]);

	Route::post('/tag/store',[
		'uses' => 'TagController@store',
		'as' => 'tag.store'
	]);

	Route::get('/tag/edit/{id}',[
		'uses' => 'TagController@edit',
		'as' => 'tag.edit'
	]);

	Route::get('/tag/delete/{id}',[
		'uses' => 'TagController@destroy',
		'as' => 'tag.delete'
	]);

	Route::post('/tag/update/{id}',[
		'uses' => 'TagController@update',
		'as' => 'tag.update'
	]);

	Route::get('/users',[
		'uses' => 'UserController@index',
		'as' => 'users'
	]);

	Route::get('/user/create',[
		'uses' => 'UserController@create',
		'as' => 'user.create'
	]);

	Route::post('/user/store',[
		'uses' => 'UserController@store',
		'as' => 'user.store'
	]);

	Route::get('/user/admin/{id}',[
		'uses' => 'UserController@admin',
		'as' => 'user.admin'
	]);

	Route::get('/user/not-admin/{id}',[
		'uses' => 'UserController@not_admin',
		'as' => 'user.not.admin'
	]);

	Route::get('/user/profile',[
		'uses' => 'ProfileController@index',
		'as' => 'user.profile'
	]);

	Route::post('/user/profile/update',[
		'uses' => 'ProfileController@update',
		'as' => 'user.profile.update'
	]);

});

