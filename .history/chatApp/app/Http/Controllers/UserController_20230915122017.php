<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\UserService;

// ユーザー
class UserController extends Controller
{
    protected $userService;

    public function __construct(
        UserService $userService,
    ) {
        $this->userService = $userService;
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
            $this->userService->store($input_user_name);
        }

        // 現在登録されているユーザー一覧を取得
        $users = $this->userService->getList();

        return view('user/input', compact('users'));
    }
}
