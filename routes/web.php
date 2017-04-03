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

Route::get('/example', 'ExampleController@showExample')->name('app.example');
Route::get('/', 'DashboardController@index')->name('app.dashboard');
Route::get('/users', 'UserController@index')->name('app.users');
Route::get('users/getusers', 'UserController@getusers')->name('app.getusers');
