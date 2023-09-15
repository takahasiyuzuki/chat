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
     * @return boolean
     */
    public function store($user_name)
    {
        try {
            // 登録処理
            $result = Model::create();
            if (empty($result)) {
                return 
            }
        } catch (\Exception $e) {
            throw($e);
        }
    }
}
