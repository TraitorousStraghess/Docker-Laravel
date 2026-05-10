<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
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
</body>
</html>