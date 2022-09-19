<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiseaseArticleController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/diseaseArticles', 'App\Http\Controllers\DiseaseArticleController@index');
Route::get('/diseaseArticles/{diseaseArticle}', 'App\Http\Controllers\DiseaseArticleController@show');
Route::post('/diseaseArticles', 'App\Http\Controllers\DiseaseArticleController@store');
Route::put('/diseaseArticles/{diseaseArticle}', 'App\Http\Controllers\DiseaseArticleController@update');
Route::delete('/diseaseArticles/{diseaseArticle}', 'App\Http\Controllers\DiseaseArticleController@destroy');
Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::get('/users/{user}', 'App\Http\Controllers\UserController@show');