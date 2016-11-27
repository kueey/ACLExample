<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


//后台相关
Route::get('admin/login', 'Admin\LoginController@showLoginForm');
Route::post('admin/login', 'Admin\LoginController@login');
Route::get('admin/logout', 'Admin\LoginController@logout');
Route::group(['middleware' => 'auth.admin:admin'], function () {
    Route::get('admin/admin', 'Admin\HomeController@index');
    Route::get('test/admin', function () {
        return 'test.admin';
    })->name('test.admin');
});


//前台相关
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home/index', 'HomeController@index');
    Route::get('test/index', function () {
        return 'test.index';
    });
});