<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function __invoke()
    {
        return view('articles');
    }

    public function articleMore($userId, $postId)
    {
        return view('more', [
            'postId' => $postId,
            'userId' => $userId,
        ]);
    }
}
