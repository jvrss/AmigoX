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

Route::get('/session/register', function () {
    return view('session/register');
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

Route::resource('session', 'SessionController');
Route::resource('group', 'GroupController');
Route::resource('message', 'MessageController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
