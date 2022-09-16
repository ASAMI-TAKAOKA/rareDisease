<?php

namespace Database\Seeders; // ファイルの居場所を示す

use Illuminate\Database\Seeder;
use App\Models\Article; // クラスをインポート

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // runメソッドはartisan make:seederコマンドが実行された時に呼びだされる。
    // runメソッドの中でデータベースに何でも好きなデーターを挿入できる。
    public function run()
    {
        // レコードは10件つくる。
        // 1からカウントする形にする。
        for ($i = 1; $i <= 10; $i++) {
            Article::create([
                'title' => 'title' . $i,
                'body' => 'body' . $i,
                'user-name' => 'user-name' . $i,
            ]);
        }
    }
}
