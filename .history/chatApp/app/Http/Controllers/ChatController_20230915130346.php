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
    public function chat(Request $request)
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
        $background_informations = collect([
            [

            ]
            'name' => 'kaito'
        ]);
        return view('chat/background', compact('background_informations'));
    }
}
