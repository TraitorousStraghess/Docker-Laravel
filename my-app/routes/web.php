<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// 静的なhtmlを返す
Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', function () {
    $username = 'Taro';
    $is_admin = false;
    $skills = ['PHP', 'HTML', 'JS'];
    return view('profile', [ // profile.blade.php にデータを渡す
        'name' => $username,
        'is_admin' => $is_admin,
        'skills' => $skills
    ]);
});

Route::get('/posts', [PostController::class, 'index']);