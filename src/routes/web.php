<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ThanksController;
use App\Http\Controllers\AuthController;


// お問い合わせフォーム入力画面を表示
Route::get('/', [ContactController::class, 'index']);

// フォーム入力内容確認画面へ
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);

// サンクスページへ
Route::post('/contacts', [ContactController::class, 'store']);

// サンクスページを表示
Route::get('/thanks', [ThanksController::class, 'index']);

// ログインページを表示
Route::get('/login', [AuthController::class, 'login']);
