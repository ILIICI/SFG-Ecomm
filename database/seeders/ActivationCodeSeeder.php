<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivationCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activation_codes')->insert([
            [
                'code' => rand(100, 200),
                'belong_To_Product' => rand(1, 3),
                'created_On_Date' => date('Y-m-d'),
                'created_By_User' => 1
            ]
        ]);
    }
}
