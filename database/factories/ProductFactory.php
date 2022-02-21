<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Generator as Faker;

class ProductFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return ['name'=>$faker->word,
                'detail'=>$faker->paragraph,
                'price'=>$faker->numberBetween(100,200),
                'stock'=>$faker->randomDigit,
                'discount'=>$faker->numberBetween(2,30),

            //
        ];
    }
}
