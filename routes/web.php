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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'PostController@index')->name('post');
Route::get('/posts/create', 'PostController@create')->name('post');
Route::post('/posts', 'PostController@store')->name('post');
Route::get('/posts/{post}', 'PostController@show')->name('post');
Route::get('/posts/{post}/edit', 'PostController@edit')->name('post');
Route::patch('/posts/{post}', 'PostController@update')->name('post');
Route::delete('/posts/{post}', 'PostController@destroy')->name('post');



