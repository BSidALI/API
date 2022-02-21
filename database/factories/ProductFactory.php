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

        return ['user_id'=>$this->faker->numberBetween(100,200),
                'name' => $name=$this->faker->word,
                'detail'=> $this->faker->paragraph,
                'price'=> $this->faker->numberBetween(100,200),
                'stock'=> $this->faker->randomDigit,
                'discount'=> $this->faker->numberBetween(2,30),

            //
        ];
    }
}
