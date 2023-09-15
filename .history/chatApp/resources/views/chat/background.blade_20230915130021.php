<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>背景画像設定</title>
</head>
<body>
    <a href="{{ route('menu.list') }}">
        メニュー
    </a><br/>

    <h1>
        背景画像設定
    </h1>

    @foreach ($background_informations as $key => $value)
        ユーザー１背景
        <img src="">
        <input type="file"><br/>
    @endforeach

    <input type="button" value="登録">
</body>
</html>
