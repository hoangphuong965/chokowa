<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MstPrefectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_prefectures')->insert([
            ['name' => '北海道', 'kana_name' => 'ホッカイドウ', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '青森県', 'kana_name' => 'アオモリケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '岩手県', 'kana_name' => 'イワテケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '宮城県', 'kana_name' => 'ミヤギケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '秋田県', 'kana_name' => 'アキタケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '山形県', 'kana_name' => 'ヤマガタケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '福島県', 'kana_name' => 'フクシマケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '茨城県', 'kana_name' => 'イバラキケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '栃木県', 'kana_name' => 'トチギケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '群馬県', 'kana_name' => 'グンマケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '埼玉県', 'kana_name' => 'サイタマケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '千葉県', 'kana_name' => 'チバケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '東京都', 'kana_name' => 'トウキョウト', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '神奈川県', 'kana_name' => 'カナガワケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '新潟県', 'kana_name' => 'ニイガタケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '富山県', 'kana_name' => 'トヤマケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '石川県', 'kana_name' => 'イシカワケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '福井県', 'kana_name' => 'フクイケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '山梨県', 'kana_name' => 'ヤマナシケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '長野県', 'kana_name' => 'ナガノケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '岐阜県', 'kana_name' => 'ギフケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '静岡県', 'kana_name' => 'シズオカケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '愛知県', 'kana_name' => 'アイチケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '三重県', 'kana_name' => 'ミエケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '滋賀県', 'kana_name' => 'シガケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '京都府', 'kana_name' => 'キョウトフ', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '大阪府', 'kana_name' => 'オオサカフ', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '兵庫県', 'kana_name' => 'ヒョウゴケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '奈良県', 'kana_name' => 'ナラケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '和歌山県', 'kana_name' => 'ワカヤマケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '鳥取県', 'kana_name' => 'トットリケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '島根県', 'kana_name' => 'シマネケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '岡山県', 'kana_name' => 'オカヤマケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '広島県', 'kana_name' => 'ヒロシマケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '山口県', 'kana_name' => 'ヤマグチケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '徳島県', 'kana_name' => 'トクシマケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '香川県', 'kana_name' => 'カガワケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '愛媛県', 'kana_name' => 'エヒメケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '高知県', 'kana_name' => 'コウチケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '福岡県', 'kana_name' => 'フクオカケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '佐賀県', 'kana_name' => 'サガケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '長崎県', 'kana_name' => 'ナガサキケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '熊本県', 'kana_name' => 'クマモトケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '大分県', 'kana_name' => 'オオイタケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '宮崎県', 'kana_name' => 'ミヤザキケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '鹿児島県', 'kana_name' => 'カゴシマケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
            ['name' => '沖縄県', 'kana_name' => 'オキナワケン', 'created_user' => 'seeder', 'updated_user' => 'seeder'],
        ]);
    }
}
