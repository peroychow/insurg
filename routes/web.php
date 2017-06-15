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

Route::get('/admin', 'ArticleController@index');
Route::get('/add', 'ArticleController@create');
Route::post('/store', 'ArticleController@store');
Route::get('/read/{id}', 'ArticleController@show');
Route::get('/edit/{id}', 'ArticleController@edit');
Route::post('/update/{id}', 'ArticleController@update');
Route::get('/delete/{id}','ArticleController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/listuser', 'UserController@index');
