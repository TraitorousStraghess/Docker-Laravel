{{--
    @extends('layouts.app')
    ・「私はlayouts/app.blade.phpを土台として使います」という宣言
    ・これを書くだけで、app.blade.phpのHTML骨格を丸ごと継承できる
    ・ファイルパスは resources/views/layouts/app.blade.php を指している
--}}
@extends('layouts.app')

{{-- @yield('title') の穴に差し込む値 --}}
@section('title', 'プロフィールページ')

{{-- @yield('content') の穴に入れる中身のかたまりここから --}}
@section('content')
    <h1>Profile</h1>

    <h2>ようこそ{{ $name }}さん!</h2>

    {{-- ユーザーが管理者か判断 --}}
    @if ($is_admin)
        <p>あなたは管理者です</p>
    @else
        <p>あなたは一般pepleです</p>
    @endif

    {{-- skillsの数分ループで回す --}}
    <ul>
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>

    {{-- Laravelの認証機能と連動  ログイン状態なら表示 --}}
    @auth
        <p>ログイン中です</p>
        <button>ログアウト</button>
    @endauth
    @guest
        <button>ログイン</button>
    @endguest

    {{-- 画像はpublicに格納しないといけない --}}
    <img src="{{ asset('images\IMG_2217.jpg') }}" alt="">

@endsection {{-- @section('content') の終わり --}}


<x-alert bg="bg-gray-800" role="alert">
    Test
    <x-slot:title>
        Light
    </x-slot:title>
</x-alert>