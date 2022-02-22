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
            'product_id'=>$this->faker->numberBetween(1, 20),//  need be betwin key id nmber 
            'customer'=>$this->faker->word,
            'review'=> $this->faker->paragraph,
            'star'=>$this->faker->numberBetween(100,200),
        ];
    }
}
