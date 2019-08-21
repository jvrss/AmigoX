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

Route::get('/sessions/register', function () {
    return view('sessions/register');
});

Route::get('/gifts', function () {
    return view('gifts/home');
});

Route::get('/notifications', function () {
    return view('notifications/home');
});

Route::get('/messages', function () {
    return view('messages/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
