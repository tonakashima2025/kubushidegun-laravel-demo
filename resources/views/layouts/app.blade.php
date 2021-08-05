<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravelチュートリアル（デモ）</title>

{{-- CSSの読み込み --}}
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <header>
        <div class="header-logo">
            <a href="{{ route('home') }}">TweetApp</a>
        </div>
        <ul class="header-menus">
            <li>
                <a href="{{ route('about') }}">TweetAppとは</a>
            </li>
            <li>
                <a href="{{ route('posts.index') }}">投稿一覧</a>
            </li>
            <li>
                <a href="{{ route('posts.new') }}">新規投稿</a>
            </li>
        </ul>
    </header>

    @yield('content')
    
</body>
</html>

