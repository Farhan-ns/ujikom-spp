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

Route::namespace('Siswa')->group(function () {
    Route::as('siswa.')->group(function () {

        Route::get('/', 'LoginController@showLoginForm')->name('login'); 
        Route::post('/', 'LoginController@login')->name('login'); 
        Route::post('/home/logout', 'LoginController@logout')->name('logout');

        Route::middleware('siswa')->group(function () {
            Route::get('home', 'UserSiswaController@home')->name('home');
        });
    });
});