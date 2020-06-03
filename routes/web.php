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

//System
Route::get('/', 'SystemController@home')->name('system.home');
Route::get('/login', 'SystemController@login')->name('system.login');
Route::get('/register','SystemController@register')->name('system.register');

//Admin
Route::prefix('admin')->group(function(){
    Route::get('/', 'AdminController@index')->name('admin.index');
});

//User
Route::prefix('user')->group(function() {
    Route::get('/','UserController@index')->name('user.index');
});
