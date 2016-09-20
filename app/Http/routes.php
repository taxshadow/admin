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
Route::get('/app', 'AdminController@login');

Route::resource('app/kategori', 'KategoriController');
Route::resource('app/artikel', 'ArtikelController');
Route::resource('app/user', 'UserController');


Route::auth();

Route::get('/home', 'HomeController@index');
