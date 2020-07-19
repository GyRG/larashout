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
require 'admin.php';

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
=======
Route::group(['prefix' => 'admin'], function() {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Rpute::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::get('/', function () {
        return view('admin.dashboard.index');
    });
});


>>>>>>> 3750ba00fd06ca2107f34826f3ee97b212ebf3cd

