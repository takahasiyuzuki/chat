<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\UserService;

// ユーザー
class UserController extends Controller
{
    protected $u
    public function __construct(

    ) {
    }
    /**
     * ユーザー名登録 入力画面
     *
     * @param Request $request リクエスト情報
     *
     * @return View
     */
    public function store(Request $request)
    {
        $input_user_name = $request->input('name');

        // ユーザー名登録処理
        if (!empty($input_user_name)) {

        }

        $users = [];
        return view('user/input', compact('users'));
    }
}
