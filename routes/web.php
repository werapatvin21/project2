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
Route::post('/Register', 'RegisterController@create');

//login form
Route::get('/Home','LoginController@index');
Route::post('/Home','LoginController@login');
Route::view('/ForgotPassword','ForgotPassword');

//staff
Route::get('/StaffSetting','StaffSettingController@index');

//home page
Route::view('Home','Home');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
