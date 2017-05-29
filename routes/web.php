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
Route::group(['namespace' => 'Auth', 'middleware' => 'redirectifauthenticated'], function() {
    Route::get('/login', 'LoginController@showLogin')->name('auth.login');
    Route::post('/login', 'LoginController@doLogin')->name('auth.login.submit');
});

Route::group(['middleware' => 'loginrequired'], function() {
    Route::get('/', 'DashboardController@index')->name('app.dashboard');
    
    Route::get('/users', 'UserController@showUsers')->name('user.list');
    Route::group(['prefix' => 'user'], function() {
        Route::get('/add', 'UserController@showAddUser')->name('user.add');
        Route::post('/add', 'UserController@addUser')->name('user.add.submit');
        Route::get('/edit/{id}', 'UserController@showEditUser')->name('user.edit');
        Route::post('/edit', 'UserController@editUser')->name('user.edit.submit');
        Route::get('/remove/{id}', 'UserController@showRemoveUser')->name('user.remove');
        Route::post('/remove', 'UserController@removeUser')->name('user.remove.submit');
    });

    Route::group(['prefix' => 'issue'], function() {
        Route::get('/', 'IssueController@showOverview')->name('issue.list');
        Route::get('/{id}', 'IssueController@showDetail')->name('issue.view');
        Route::get('/edit/{id}', 'IssueController@showEditIssue')->name('issue.edit');
        Route::post('/edit', 'IssueController@editIssue')->name('issue.edit.submit');
        Route::get('/delete/{id}', 'IssueController@deleteIssue')->name('issue.delete');
    });
    
    Route::group(['prefix' => 'region'], function() {
        Route::get('/', 'RegionController@showRegions')->name('region.list');
        Route::get('/add', 'RegionController@showAddRegion')->name('region.add');
        Route::post('/add', 'RegionController@addRegion')->name('region.add.submit');
        Route::get('/edit/{id}', 'RegionController@showEditRegion')->name('region.edit');
        Route::post('/edit/', 'RegionController@editRegion')->name('region.edit.submit');
    });

    Route::group(['prefix' => 'report'], function() {
        Route::get('/', 'IssueReportController@showOverview')->name('report.list');
        Route::get('/{id}', 'IssueReportController@showDetail')->name('report.detail');
        Route::get('/generateReport', 'IssueReportController@showAdd')->name('report.add');
        Route::post('/add', 'IssueReportController@addReport')->name('report.add.submit');
        Route::get('/edit/{id}', 'IssueReportController@showEdit')->name('report.edit');
        Route::post('/edit', 'IssueReportController@editReport')->name('report.edit.submit');
        Route::get('/delete/{id}', 'IssueReportController@deleteReport')->name('report.delete');

    });


    Route::get('/logout', 'Auth\LogoutController@doLogout')->name('auth.logout');
});

Route::get('/example', 'ExampleController@showExample')->name('app.example');