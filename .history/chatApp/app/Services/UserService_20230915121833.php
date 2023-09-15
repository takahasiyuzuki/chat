<?php

namespace App\Http\Services;

use App\Models\User;

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

            $user->
            if (empty($result)) {
                return false;
            }
            return truel;
        } catch (\Exception $e) {
            throw($e);
        }
    }
}
