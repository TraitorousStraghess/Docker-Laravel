<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = [
            1 => ['title' => 'Laravelの基礎入門', 'body' => 'test test test'],
            2 => ['title' => 'JavaScriptの基礎入門', 'body' => 'test test test']
        ];

        return view('posts.index', [
            'posts' => $posts
        ]);
    }
}
