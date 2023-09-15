<?php

namespace App\Http\Services;

use App\Models\Image;

// ユーザー
class UserService
{
    /**
     *  新規ユーザー登録
     *
     * @param string $user_name ユーザー名
     *
     * @return bool
     */
    public function store($user_name)
    {
        try {
            // 登録処理
            $user = new Model();
            $user->name = $user_name;
            $user->save();

            return true;
        } catch (\Exception $e) {
            throw($e);
            return false;
        }
    }
}
