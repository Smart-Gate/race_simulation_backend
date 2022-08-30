<?php

namespace Database\Seeders;
use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::truncate();
        return Car::factory()->count(10)->create();
    }
}
