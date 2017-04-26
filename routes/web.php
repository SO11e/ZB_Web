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
Route::group(['namespace' => 'Auth'], function() {
    Route::get('/login', 'LoginController@showLogin')->name('auth.login');
    Route::post('/login', 'LoginController@doLogin')->name('auth.login.submit');
});

Route::get('/', 'DashboardController@index')->name('app.dashboard');
Route::get('/example', 'ExampleController@showExample')->name('app.example');

Route::get('/users', 'UserController@index')->name('app.users');
Route::get('/users/getusers', 'UserController@getusers')->name('app.getusers');

Route::get('/meldingen', 'ReportsController@showOverview')->name('app.overview');
Route::get('/meldingen/{id}', 'ReportsController@showDetail')->name('app.reportdetail');

Route::group(['prefix' => 'region'], function() {
    Route::get('/', 'RegionController@showAllRegions')->name('region.list');
    Route::get('/add', 'RegionController@showAddRegion')->name('region.add');
    Route::get('/edit/{id}', 'RegionController@showEditRegion')->name('region.edit');
});