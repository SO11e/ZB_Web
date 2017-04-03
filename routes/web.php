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

Route::get('/example', 'ExampleController@showExample')->name('app.example');

Route::group(['prefix' => 'region'], function() {
    Route::get('/', 'RegionController@showAllRegions')->name('region.list');
    Route::get('/add', 'RegionController@showAddRegion')->name('region.add');
    Route::get('/edit/{id}', 'RegionController@showEditRegion')->name('region.edit');
});