<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/logout', [LoginController::class, 'logout']);

//Обращаемся к классу как к методу
Route::get('/', ArticleController::class)
    ->middleware('auth')
    ->name('articles');

/*
 * Формируем ссылку на полную версию статьи,
 * где передаем в метод articleMore переменные
 * userId и postId, которые пригодятся для вытаскивания
 * данных из моделей
 */
Route::get('/more/{userId}/{postId}', [ArticleController::class, 'articleMore'])
    ->middleware('auth')
    ->name('more');
