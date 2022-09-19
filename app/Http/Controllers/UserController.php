<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }
    public function show(User $user) // 「モデル結合ルート」を利用して簡潔に記述するため、showメソッドの引数は$idではなくUser $userとします。
    {
        return $user;
    }
}
