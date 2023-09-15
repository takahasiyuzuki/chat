<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;
use App\Http\Services\UserService;
use App\Library\Message;

/**
 * チャット
 */
class ChatController extends Controller
{
    protected $userService;

    public function __construct(
        UserService $userService,
    ) {
        $this->userService = $userService;
    }

    /**
     * チャット画面表示
     *
     * @param Request $request リクエスト情報
     *
     * @return View
     */
    public function chat(Request $request)
    {
        return view('chat/conversation');
    }

    // メッセージ送信時の処理
    public function sendMessage( Request $request )
    {
        // リクエストからデータの取り出し
        $strNickname = $request->input('nickname');
        $strMessage = $request->input('message');

        // メッセージオブジェクトの作成
        $message = new Message;
        $message->nickname = $strNickname;
        $message->body = $strMessage;

        // 送信者を含めてメッセージを送信
        MessageSent::dispatch($message);    // Laravel V8以降の書き方

        // 送信者を除いて他者にメッセージを送信
        // Note : toOthersメソッドを呼び出すには、
        //        イベントでIlluminate\Broadcasting\InteractsWithSocketsトレイトをuseする必要がある。
        //broadcast( new MessageSent($message))->toOthers();

        //return ['message' => $strMessage];
        return $request;
    }

    /**
     * 背景画像
     *
     * @param Request $request リクエスト情報
     *
     * @return View
     */
    public function background(Request $request)
    {
        
        // 全ユーザー情報を取得
        $users = $this->userService->getList();

        // 背景画像登録用にフォーマット整形
        $background_informations = $this->userService->formattedBackgroundInformations($uses);

        return view('chat/background', compact('background_informations'));
    }
}
