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
    public function store(Request $request) // formで入力された値を保存するstoreメソッド
    {
        return Article::create($request->all()); // allメソッドでリクエストの全入力データを取得しcreateメソッドでデータ登録
    }
    public function update(Request $request, $article) // update()メソッドの第2引数で、URLに埋め込まれたarticleが$articleとして受け取られている
    {
        $article = Article::find($article); // Articleモデルクラスのfind()メソッドの引数に$articleを渡して、指定した記事インスタンスを$articleで参照している
        $article -> update($request->all()); // update()メソッドの引数に、更新したい要素を渡し、それを$articleに代入（上書き）
        return $article;
    }
    public function destroy(Article $article) // update()メソッドの第2引数で、URLに埋め込まれたarticleが$articleとして受け取られている
    {
        $article -> delete();
        return $article;
    }
}
