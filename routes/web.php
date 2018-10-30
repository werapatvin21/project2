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
//register form
Route::get('/Register','RegisterController@index');
Route::post('create', 'RegisterController@create');

//login form
Route::get('/Login','LoginController@index');

Route::view('ForgotPassword','ForgotPassword');

//home page
Route::view('Home','Home');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
