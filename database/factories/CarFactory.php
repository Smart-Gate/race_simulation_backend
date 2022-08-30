<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = (new \Faker\Factory())::create();
$faker->addProvider(new \Faker\Provider\Fakecar($faker));
        return [
            'name'=>$faker->vehicleBrand(),
            'top_speed'=>$faker->numberBetween(0.1,999,99),
            'acceleration'=>$faker->numberBetween(0,99,99),
            'break_acceleration'=>$faker->numberBetween(0,99,99),
        ];
    }
}
