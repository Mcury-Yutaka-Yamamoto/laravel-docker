<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// 掲示板のルート
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');