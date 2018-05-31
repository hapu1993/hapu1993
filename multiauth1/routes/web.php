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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'AdminController@index')->name('home');
Route::GET('admin','Admin\LoginController@showLoginForm');
Route::POST('admin/login','Admin\LoginController@login')->name('admin.login');
//Rouet::POST('logout','Admin\LoginController@logout');
Route::POST('admin/password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin/password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin/password/reset','Admin\Auth\ResetPasswordController@reset')->name('admin.password.reset');
Route::GET('admin/password/reset/{token}Admin\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
