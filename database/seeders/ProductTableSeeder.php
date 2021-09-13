<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'imagePath' => 'https://oyster.ignimgs.com/mediawiki/apis.ign.com/pokemon-sun-pokemon-moon/6/6d/Partnercappikachu.jpg',
                'name' => 'Test 1',
                'price' => '12',
                'description' => 'A lot of description' 
            ],
            [
                'imagePath' => 'https://oyster.ignimgs.com/mediawiki/apis.ign.com/pokemon-sun-pokemon-moon/6/6d/Partnercappikachu.jpg',
                'name' => 'Test 2',
                'price' => '15',
                'description' => 'A lot of description dadadadasdas' 
            ],
            [
                'imagePath' => 'https://oyster.ignimgs.com/mediawiki/apis.ign.com/pokemon-sun-pokemon-moon/6/6d/Partnercappikachu.jpg',
                'name' => 'Test 3',
                'price' => '100',
                'description' => 'Even more description dfgfdgdsfgfdsgfdsgsgsf' 
            ]
        ]);
    }
}
