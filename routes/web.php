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

Route::get('/', 'PageController@home')->name('home');
Route::get('home', 'PageController@home');
Route::get('about', 'PageController@about')->name('about');
Route::get('comics', 'PageController@comics')->name('comics');
Route::get('podcast', 'PageController@podcast')->name('podcast');
Route::get('movies', 'PageController@movies')->name('movies');
Route::get('tv', 'PageController@tv')->name('tv');

Route::get('posts', 'PostController@index');
Route::get('posts/{post}', 'PostController@show');
Route::get('posts/create', 'PostController@create')->middleware('auth');
Route::post('posts/store', 'PostController@store')->middleware('auth');
Route::get('posts/{post}/edit', 'PostController@edit');
Route::put('posts/{post}', 'PostController@update');

Auth::routes();
Route::get('logout', function () {
    Auth::logout();
    return redirect()->route('home');
});
