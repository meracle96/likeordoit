<?php

Route::get('/', 'PagesController@dashboard')->name('front.dashboard');

Route::get('/challenge/{slug}', 'ChallengeController@show')->name('front.challenge.show-with-slug');
Route::resource('/challenge', 'ChallengeController');

Route::post('/challenge/{slug}/like', 'LikeController@like')->name('front.like-button');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminPagesController@dashboard')->name('admin.dashboard');
