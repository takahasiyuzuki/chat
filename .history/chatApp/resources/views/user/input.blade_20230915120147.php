<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        ユーザー名登録
    </h1>

    <p>
        登録済みユーザー
    </p>
    @foreach ($users as $key => $user)
        <p>{{ $key }}：{{ $user->name }}</p>
    @endforeach

    <p>
        ユーザー追加
    </p><br/>

    ユーザーネーム  <input type="text" placeholder="ボブス"><input type='button' value="登録">
</body>
</html>
