<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\IndexController@index');
Route::get('/hello', 'App\Http\Controllers\IndexController@show');
