<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  API\database\seeders\ProductSeeder as Pseeder;
use  API\database\seeders\ReviewsSeeder as Rseeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {// entry 1 after u need entry 2 becouse thy have fogeting key
       //\App\Models\Product::factory(100)->create();
       \App\Models\Reviews::factory(100)->create();
    }
}
