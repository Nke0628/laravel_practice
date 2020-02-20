<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropatiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('properties')->insert([
            'id' => '1',
            'key' => str_random(10),
            'val' => str_random(10),
        ]);
    }
}
