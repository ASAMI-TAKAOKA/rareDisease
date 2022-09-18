<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiseaseArticle;

class DiseaseArticleController extends Controller
{
    public function index()
    {
        return DiseaseArticle::all();
    }
    public function show(DiseaseArticle $diseaseArticle) // アクションメソッドの第２引数でパラメータを受け取る
    {
        return $diseaseArticle;
    }
    public function store(Request $request) // formで入力された値を保存するstoreメソッド
    {
        return DiseaseArticle::create($request->all()); // allメソッドでリクエストの全入力データを取得しcreateメソッドでデータ登録
    }
    public function update(Request $request, $diseaseArticle) // update()メソッドの第2引数で、URLに埋め込まれたdiseaseArticleが$diseaseArticleとして受け取られている
    {
        $diseaseArticle = DiseaseArticle::find($diseaseArticle); // DiseaseArticleモデルクラスのfind()メソッドの引数に$diseaseArticleを渡して、指定した記事インスタンスを$diseaseArticleで参照している
        $diseaseArticle -> update($request->all()); // update()メソッドの引数に、更新したい要素を渡し、それを$articleに代入（上書き）
        return $diseaseArticle;
    }
    public function destroy(DiseaseArticle $diseaseArticle) // update()メソッドの第2引数で、URLに埋め込まれたarticleが$articleとして受け取られている
    {
        $diseaseArticle -> delete();
        return $diseaseArticle;
    }
}
