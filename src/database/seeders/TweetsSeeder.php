<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
        'content' => 'おはようございます',
        'member_id' => '1'
        ];
        DB::table('tweets')->insert($param);
        $param = [
        'content' => 'おやすみなさい',
        'member_id' => '3'
        ];
        DB::table('tweets')->insert($param);
        $param = [
        'content' => 'こんにちは',
        'member_id' => '3'
        ];
        DB::table('tweets')->insert($param);
        $param = [
        'content' => 'こんばんは',
        'member_id' => '1'
        ];
        DB::table('tweets')->insert($param);
        $param = [
        'content' => 'さようなら',
        'member_id' => '2'
        ];
        DB::table('tweets')->insert($param);
        $param = [
        'content' => 'ありがとうございました',
        'member_id' => '1'
        ];
        DB::table('tweets')->insert($param);
    }
}
