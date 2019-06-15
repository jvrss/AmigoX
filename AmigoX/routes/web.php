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

Route::get('/home', function () {
    return view('home');
});

Route::get('/groups', function () {
    return view('group/home');
});

Route::get('/sessions', function () {
    return view('sessions/home');
});

Route::get('/gifts', function () {
    return view('gifts/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
