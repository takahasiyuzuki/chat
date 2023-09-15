<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ユーザー
class UserController extends Controller
{
    /**
     * ユーザー名登録 入力画面
     *
     * @param Request $request
     * @return View
     */
    public function input()
    {
        return view('user/input');
    }
}
