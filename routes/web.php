<?php

use App\Jobs\ProcessPodcast;

Route::get('/', function () {
   return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sendemail', 'SendEmailController@index');
Route::get('/sendmail', 'SendEmailController@sendmail');

