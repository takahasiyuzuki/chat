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
            $user->name = $user_name;
            $user->save();

            return true;
        } catch (\Exception $e) {
            throw($e);
            return false;
        }
    }

    /**
     *  ユーザー一覧を取得
     *
     * @return collection
     */
    public function getList()
    {
        try {
            return User::with('images')->all();
        } catch (\Exception $e) {
            throw($e);
        }
    }

    /**
     * 背景画像登録用に整形
     *
     * @param collection $users ユーザー情報
     *
     * @return collection
     */
    public function formattedBackgroundInformations($users)
    {
        try {
            if (!empty($users)) {
                return $this->formattedBackgroundInformation($users);
            }
        } catch(\Exception $e) {
            throw Exception($e);
        }
    }

    /**
     * 背景情報をコレクション化して返す
     *
     * @param collection $users ユーザー情報
     *
     * @return collection
     */
    protected function formattedBackgroundInformation($users)
    {
        $background_informations = [];
        foreach ($users as $key => $user) {
            $background_informations[$key]['name'] = $user->name;
            $background_informations[$key]['src'] = $user->image->src ?? '';
        }

        return collect($background_informations);
    }
}
