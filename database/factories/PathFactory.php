<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PathFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = (new \Faker\Factory())::create();
        return [
            
            'name'=>$faker->streetName(),
            'length'=>$faker->numberBetween(0,9999,99),
        ];
    }
}
