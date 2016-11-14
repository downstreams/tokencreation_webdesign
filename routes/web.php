<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home.pages.index',['title'=>'Landing-Voucher-MS']);
});

//HomeController
//Route::resource('home','Home\HomeController');
Route::post('email-sent','Home\HomeController@SendEmail');
Route::get('/email-verification','Home\HomeController@EmailVerification');
/*Route::get('/','Admin\DashboardController@index');*/
Auth::routes();
//Route::get('/home', 'HomeController@index');
//DashboardController
Route::get('/dashboard', 'Admin\DashboardController@index');
Route::get('/logout', 'Auth\LoginController@logout');
//subscriber controller
//corporations
Route::resource('subscribers','Admin\SubscribersController');
Route::get('subscribers/{id}/delete', 'Admin\SubscribersController@destroy');
Route::get('delete-all-sub', 'Admin\SubscribersController@DeleteAll');
//VCodeController
Route::resource('codes','Admin\VCodesController');
Route::get('codes/{id}/delete', 'Admin\VCodesController@destroy');
Route::get('delete-all', 'Admin\VCodesController@DeleteAll');

