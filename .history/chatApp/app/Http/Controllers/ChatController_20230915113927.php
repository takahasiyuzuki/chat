<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * チャット
 */
class ChatController extends Controller
{
    /**
     * ユーザー名登録 表示・登録
     *
     * @param Request $request リクエスト情報
     *
     * @return View
     */
    public function input(Request $request)
    {
        return view('user/input');
    }
}
