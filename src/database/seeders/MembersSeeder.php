<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
        'name' => '西野七瀬',
        ];
        DB::table('members')->insert($param);
        $param = [
        'name' => '長濱ねる',
        ];
        DB::table('members')->insert($param);
        $param = [
        'name' => '福原遥',
        ];
        DB::table('members')->insert($param);
    }
}
