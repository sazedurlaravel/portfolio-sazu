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

Route::get('/','PagesController@index')->name('index.home');


//admin routes
Route::group(['middleware' => 'auth'],function(){
	//category routes
	Route::get('/category/index','CategoryController@index')->name('category.index');
	Route::get('/category/create','CategoryController@create')->name('category.create');
	Route::get('/category/edit/{id}','CategoryController@edit')->name('category.edit');
	Route::post('/category/store','CategoryController@store')->name('category.store');
	Route::post('/category/update/{id}','CategoryController@update')->name('category.update');
	Route::get('/category/delete/{id}','CategoryController@delete')->name('category.delete');

	
	//category routes
	Route::get('/project/view','ProjectController@index')->name('project.view');
	Route::get('/project/add','ProjectController@add')->name('project.add');
	Route::get('/project/edit/{id}','ProjectController@edit')->name('project.edit');
	Route::post('/project/store','ProjectController@store')->name('project.store');
	Route::post('/project/update/{id}','ProjectController@update')->name('project.update');
	Route::get('/project/delete/{id}','ProjectController@delete')->name('project.delete');


	//category routes
	Route::get('/category/view','CategoryController@index')->name('category.view');
	Route::get('/category/add','CategoryController@add')->name('category.add');
	Route::get('/category/edit/{id}','CategoryController@edit')->name('category.edit');
	Route::post('/category/store','CategoryController@store')->name('category.store');
	Route::post('/category/update/{id}','CategoryController@update')->name('category.update');
	Route::get('/category/delete/{id}','CategoryController@delete')->name('category.delete');

	//user routes
	Route::prefix('users')->group(function(){
		Route::get('/view','UserController@view')->name('users.view');
		Route::get('/add','UserController@add')->name('users.add');
		Route::get('/edit/{id}','UserController@edit')->name('users.edit');
		Route::post('/update/{id}','UserController@update')->name('users.update');
		Route::post('/store','UserController@store')->name('users.store');
		Route::get('/delete/{id}','UserController@delete')->name('users.delete');
	});

	//profile route
	Route::prefix('profiles')->group(function(){
		Route::get('/view','ProfileController@view')->name('profiles.view');
		Route::get('/edit','ProfileController@edit')->name('profiles.edit');
		Route::post('/update','ProfileController@update')->name('profiles.update');
		Route::get('/password/view','ProfileController@password')->name('profiles.password.view');
		Route::post('/password/update','ProfileController@passwordUpdate')->name('profiles.password.update');
	});


	// Route::get('/category/{id}','CategoryController@show')->name('category.show');

	


});
	

//contscts route
	Route::prefix('contacts')->group(function(){
		Route::get('/view','ContactController@view')->name('contacts.view');
		Route::get('/contact-us','ContactController@contact')->name('contacts.form');
		Route::get('/add','ContactController@add')->name('contacts.add');
		Route::get('/edit/{id}','ContactController@edit')->name('contacts.edit');
		Route::post('/update/{id}','ContactController@update')->name('contacts.update');
		Route::post('/store','ContactController@store')->name('contacts.store');
		Route::get('/delete/{id}','ContactController@delete')->name('contacts.delete');
	});
	
	



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

