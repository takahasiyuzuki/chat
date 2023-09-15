<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TNGチャットルーム</title>
</head>
<body>
    <h1>
        TNGチャットルーム
    </h1>

    <a href="{{ route('') }}">
        ユーザー１ルーム
    </a><br/>
    <a href="{{ route('chat') }}">
        ユーザー２ルーム
    </a><br/>
    <a href="{{ route('user/create') }}">
        ユーザー名登録
    </a><br/>
    <a href="">
        背景画像設定
    </a><br/>
</body>
</html>
