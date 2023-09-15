<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ユーザー
class UserController extends Controller
{
    /**
     * ユーザー名登録 入力画面
     *
     * @param Request $request リクエスト情報
     *
     * @return View
     */
    public function store(Request $request)
    {
        if (!empty($)) {

        }
        $users = [];
        return view('user/input', compact('users'));
    }
}
