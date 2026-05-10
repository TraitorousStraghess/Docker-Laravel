<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// 静的なhtmlを返す
Route::get('/about', function () {
    return view('about');
});