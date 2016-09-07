<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('/profil', 'ProfilController@index');
Route::get('/materi', 'MateriController@show');
Route::get('/materi/{id}', 'MateriController@single');

Route::get('/app/home', 'AdminController@home');
Route::get('/app/artikel', 'AdminController@artikel');
Route::get('/app/artikel/insert', 'AdminController@insertartikel');
Route::get('/app/artikel/edit', 'AdminController@editartikel');
Route::get('/app', 'AdminController@login');
Route::get('/app/user', 'UserController@index');
Route::get('/app/kategori', 'AdminController@kategori');
Route::get('/app/kategori/insert', 'AdminController@insertkategori');
Route::get('/app/user/edit', 'UserController@edit');
Route::get('/app/kategori', 'AdminController@kategori');
Route::get('/app/kategori/edit', 'AdminController@editkategori');
Route::get('/app/user/insert', 'UserController@create');
