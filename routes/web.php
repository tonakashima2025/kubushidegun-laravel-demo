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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@top')->name('home');
Route::get('about', 'HomeController@about')->name('about');
Route::get('posts/index', 'PostController@index')->name('posts.index');
Route::get('posts/new', 'PostController@new')->name('posts.new');
Route::post('posts/create', 'PostController@create')->name('posts.create');
Route::get('posts/{id}', 'PostController@show')->name('posts.show');
Route::get('posts/{id}/edit', 'PostController@edit')->name('posts.edit');
Route::post('posts/{id}/update', 'PostController@update')->name('posts.update');
Route::post('posts/{id}/destroy', 'PostController@destroy')->name('posts.destroy');