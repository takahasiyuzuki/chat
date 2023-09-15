<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * メニュー画面に関する操作
 */
class MenuController extends Controller
{
    /**
     *  メニュー一覧画面を表示
     *
     * @return View
     */
    public function getMenu()
    {
        return view('menu/list'):
    }
}
