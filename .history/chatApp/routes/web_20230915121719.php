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
Route::get('menu/list', [MenuController::class, 'list'])->name('menu/list');
// チャット
Route::get('chat', [ChatController::class, 'list'])->name('chat');
// ユーザー名登録
Route::match(['get', 'post'], 'user/create', [UserController::class, 'store'])->name('user/create');
// 背景画像
Route::match(['get', 'post'], 'chat/background', [ChatController::class, 'background'])->name('chat.background');
