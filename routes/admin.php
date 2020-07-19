<?php


Route::group(['prefix' => 'admin'], function() {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
<<<<<<< HEAD
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');
=======
    Rpute::get('logout', 'Admin\LoginController@logout')->name('admin.logout');
>>>>>>> 3750ba00fd06ca2107f34826f3ee97b212ebf3cd

    Route::get('/', function () {
        return view('admin.dashboard.index');
    });
});

