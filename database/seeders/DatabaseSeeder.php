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
    {
       //\App\Models\Product::factory(10)->create();
        \App\Models\Reviews::factory(10)->create();
    }
}
