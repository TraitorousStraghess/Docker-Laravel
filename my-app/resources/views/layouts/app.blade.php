<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--
        @yield('title', 'Laravel App')
        ・@yield は「穴」を作るディレクティブ
        ・第1引数 'title' → 穴の名前
        ・第2引数 'Laravel App' → 子ページが何も入れなかった時のデフォルト値
        ・子ページの @section('title', 'プロフィールページ') がここに入る
    --}}
    <title>@yield('title', 'Laravel App')</title>
</head>
<body>

    <header>Header</header>

    <main>
        {{--
            ★重要: @yield('content')
            ・'content' という名前の穴
            ・子ページの @section('content') ～ @endsection の中身がここに入る
            ・デフォルト値なし（子が書かなければ何も表示されない）
        --}}
        @yield('content')
    </main>

    <footer>footer</footer>

</body>
</html>