<?php

use App\Http\Controllers\MainController;

Route::get('/', 'MainController@home');

Route::get('/about', 'MainController@about');

Route::get('/review', 'MainController@review')->name('review');

Route::post('/review/check', 'MainController@review_check');