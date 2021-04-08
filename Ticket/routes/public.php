<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('home','HomeController')->name('home');
Route::get('/','Auth\LoginController@showLoginForm')->name('login');

Auth::routes();
