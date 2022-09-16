<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
    }
    public function show(Article $article) // アクションメソッドの第２引数でパラメータを受け取る
    {
        return $article;
    }
}
