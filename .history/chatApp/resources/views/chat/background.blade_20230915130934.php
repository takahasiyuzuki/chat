<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>背景画像設定</title>
</head>
<body>
    <button>
        <a href="{{ route('menu.list') }}">
            メニュー
        </a>
    </button>

    <h1>
        背景画像設定
    </h1>

    @foreach ($background_informations as $key => $background_information)
        {{ $background_informations->name }} 背景
        <img src="" name="image{}">
        <input type="file"><br/>
    @endforeach

    <input type="button" value="登録">
</body>
</html>
