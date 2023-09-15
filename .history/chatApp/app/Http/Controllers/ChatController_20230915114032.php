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
    public function (Request $request)
    {
        return view('user/input');
    }
}
