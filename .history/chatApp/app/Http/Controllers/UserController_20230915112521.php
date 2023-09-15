<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * ユーザー
 */
class UserController extends Controller
{
    /**
     * ユーザー名登録 入力画面
     *
     * @return View
     */
    public function input()
    {
        return view('user/input');
    }

    /**
     * ユーザー名登録 登録処理
     *
     * @param Request $request ユーザー名
     *
     * @return View
     */
    public function store(Request $request)
    {
        return view('user/input');
    }
}
