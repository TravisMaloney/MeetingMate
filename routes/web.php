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

Route::get('/about', function () {
    return view('about');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/meetings', 'MeetingsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
