<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MstExpectTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_expect_tasks')->insert([
            ['name' => '定期アセスメント訪問', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => 'サービス担当者会議', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '排泄介助', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '買い物代行', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '夜勤', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => 'バイタルチェック', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '入浴', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '服薬管理', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '病院同行', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => 'オンコール対応', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '定期巡回', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '食事介助', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '家事援助', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '教育指導', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
        ]);
    }
}
