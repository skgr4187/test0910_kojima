<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => '男性',
            'email' => 'text@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'categories' => '商品の交換について',
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。',
        ];
    }
}
