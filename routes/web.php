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
//register form & home page
Route::resource('Register','RegisterController');
Route::get('/Register','RegisterController@index')->name('Register.index');

Route::post('/Register', 'RegisterController@create')->name('Register.create');
//Route::post('/Register','RegisterController@login')->name('Register.login');
//Route::resource('Login','LoginController');
//Route::post('/Register','LoginController@login')->name('Login.login');
//Route::post('/Register','RegisterController@login');

//Route::post('/Register','LoginController@login');

//Route::put('/Register','LoginController@login');
//login form


Route::resource('GuestTest','GuestController');
Route::get('/GuestTest','GuestTestController@index')->name('GuestTest.index');
Route::post('/GuestTest','GuestController@show')->name('GuestTest.show');


/*Route::get('GuestTest', function()){
	$show_data = DB::table('registers')->pluck('id','name','email','phone_number','hotel_name','number_of_room','username','password');
	return view('GuestTest',['show_data' => $show_data]);
}*/

Route::resource('ForgotPwd','ForgotPwdController');
Route::get('/ForgotPwd','ForgotPwdController@index')->name('ForgotPwd.index');

//staff
Route::resource('Setting','SettingController');
Route::get('/Setting','SettingController@index')->name('Setting.index');
//Guest
Route::resource('Guest','GuestController');
Route::get('/Guest','GuestController@index')->name('Guest.index');
//Service
Route::resource('Service','ServiceController');
Route::get('/Service','ServiceController@index')->name('Service.index');
//dashboard
Route::resource('Dashboard','DashboardController');
Route::get('/Dashboard','DashboardController@index')->name('Dashboard.index');
//after login
//Route::post('/Dashboard','LoginController@login');
//home page
//Route::view('/Home','Home');

Route::get('/', function () {
    return view('welcome');
});



//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
