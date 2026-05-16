{{--
    @extends('layouts.app')
    ・「私はlayouts/app.blade.phpを土台として使います」という宣言
    ・これを書くだけで、app.blade.phpのHTML骨格を丸ごと継承できる
    ・ファイルパスは resources/views/layouts/app.blade.php を指している
--}}
@extends('layouts.app')

{{-- @yield('title') の穴に差し込む値 --}}
@section('title', '記事一覧ページ')

{{-- @yield('content') の穴に入れる中身のかたまりここから --}}
@section('content')
    <h2>ブログ記事一覧</h2>

    @forelse ($posts as $post)
        <article>
            <h3>{{ $post['title'] }}</h3>
            <p>{{ $post['body'] }}</p>
        </article>
    @empty
        <p>記事はまだ一件もありません</p>
    @endforelse

@endsection