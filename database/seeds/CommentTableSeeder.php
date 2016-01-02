<?php

use Illuminate\Database\Seeder;  //これを追加しないとエラー
use App\Comment; //モデルクラスの名前空間を指定

class CommentTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('comments')->delete();

        Comment::create([
                'author' => '山本さん',
                'text'   => '今日は良い天気ですね',
        ]);

        Comment::create([
                'author' => '山田さん',
                'text'   => 'お久しぶりです',
        ]);

        Comment::create([
                'author' => '竹下さん',
                'text'   => '便利ですね。',
        ]);
    }
}
