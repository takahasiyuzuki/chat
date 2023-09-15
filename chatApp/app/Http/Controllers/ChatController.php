<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * チャット
 */
class ChatController extends Controller
{
    /**
     * チャット画面
     *
     * @param Request $request リクエスト情報
     *
     * @return View
     */
    public function conversation(Request $request)
    {
        return view('chat/conversation');
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
        return view('chat/background');
    }
}
