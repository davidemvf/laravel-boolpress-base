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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'PostController@index') -> name('post.index');
Route::get('/post-create', 'PostController@create') -> name('post.create');
Route::post('/post/store', 'PostController@store') -> name('post.store');
Route::get('/category/{id}', 'PostController@show') -> name('category.show');
Route::get('/post/{id}', 'showPostController@show') -> name('post.show');
Route::get('/post/{id}/edit', 'PostController@edit') -> name('post.edit');
Route::post('post/{id}/update', 'PostController@update') -> name('post.update');
Route::get('tag/show/{id}', 'showPostController@showByTag') -> name('tag.show');
