<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@home');
Route::get('/info-pendaftaran-nikah', 'PagesController@info');
Route::get('/daftar-nikah', 'MarriageController@create');
Route::get('/pernikahan', 'MarriageController@index');
Route::get('/pernikahan/{registrationInfo}', 'MarriageController@show');
// Auth::routes(['register' => false]);
// Route::get('/', 'HomeController@index')->name('home');