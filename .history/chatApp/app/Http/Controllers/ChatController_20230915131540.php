<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\UserService;

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
        $users =
        $background_informations = [];
        return view('chat/background', compact('background_informations'));
    }
}
