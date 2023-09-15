<!doctype html>
<html>
<head>
（・・・略・・・）
</head>
<body>
（・・・略・・・）

    <ul id="list_message">
    </ul>

    <script>
        const elementInputNickname = document.getElementById( "input_nickname" );
        const elementInputMessage = document.getElementById( "input_message" );

        {{-- formのsubmit処理 --}}
        function onsubmit_Form()
        {
（・・・略・・・）
        }

        {{-- ページ読み込み後の処理 --}}
        window.addEventListener( "DOMContentLoaded", ()=>
        {
            const elementListMessage = document.getElementById( "list_message" );

            {{-- Listen開始と、イベント発生時の処理の定義 --}}
            window.Echo.channel('chat').listen( 'MessageSent', (e) =>
            {
                console.log(e);
                {{-- メッセージの整形 --}}
                let strNickname = e.message.nickname;
                let strMessage = e.message.body;

                {{-- 拡散されたメッセージをメッセージリストに追加 --}}
                let elementLi = document.createElement( "li" );
                let elementNickname = document.createElement( "strong" );
                let elementMessage = document.createElement( "div" );
                elementNickname.textContent = strNickname;
                elementMessage.textContent = strMessage;
                elementLi.append( elementNickname );
                elementLi.append( elementMessage );
                elementListMessage.prepend( elementLi );  // リストの一番上に追加
                //elementListMessage.append( elementLi ); // リストの一番下に追加
            });
        } );
    </script>
</body>
</html>
