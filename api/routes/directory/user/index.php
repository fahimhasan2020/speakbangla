<?php
Route::get('/','UserController@index')->name('user');
Route::post('/login','UserController@postLogin')->name('post-login');
