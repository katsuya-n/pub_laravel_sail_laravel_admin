<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notifications')->insert([
            'title' => 'サンプルお知らせタイトル1',
            'text' => 'サンプルお知らせ本文1です．',
        ]);
        DB::table('notifications')->insert([
            'title' => '2022/05/24お知らせ',
            'text' => '今日は天気が良いですね．まだ5月なのに真夏の気分です．',
        ]);
    }
}
