<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ReviewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id'=>function(){
                return Product::all()->random(); // product her is model
            },
            'customer'=>$faker->name,
            'review'=>$faker->paragraph,
            'star'=>$faker->numberBetween(100,200),
        ];
    }
}
