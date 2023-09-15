<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// メニュー一覧
Route::get('menu/list', [MenuController::class, 'list']);
// チャット
Route::get('chat', [ChatController::class, 'list']);
// ユーザー名登録 画面表示
Route::get('user/input', [UserController::class, 'input']);
// ユーザー名登録 登録処理
Route::post('user/input', [UserController::class, 'store']);
