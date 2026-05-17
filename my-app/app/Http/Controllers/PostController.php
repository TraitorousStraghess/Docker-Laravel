<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with('user') // ユーザー情報もまとめて取得（N+1問題対策）
            ->latest()              // 新しい順に並び替え
            ->paginate(10);         // 10件ずつページ分け

        return view('posts.index', [
            'posts' => $posts
        ]);
    }
}
