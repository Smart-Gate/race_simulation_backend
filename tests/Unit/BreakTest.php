<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\BreakSimulator;
use App\Models\BreakCar;
use App\Models\Car;
use Illuminate\Support\Facades\DB;
class BreakTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_break_table()
    {
        $columns = DB::getSchemaBuilder()->getColumnListing('break_simulators');
        $this->assertEquals($columns,["id",'name','created_at','updated_at']);
    }
    public function test_break_cars_table()
    {
        $columns = DB::getSchemaBuilder()->getColumnListing('break_cars');
        $this->assertEquals($columns,['id','break_simulator_id','name','top_speed','break_acceleration','dist_until_stop','time_until_stop','created_at','updated_at']);
    }
    public function test_index()
    {
        $response = $this->json('GET', '/api/break');

        $response
            ->assertStatus(200);
    }
   
   
    public function test_store_201()
    {   
        // to make this function work you should add all requeried data as a variables and then pass them in the $response
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        for($i=0;$i<10;$i++)
        {
            $id_car_1 = Car::inRandomOrder()->get()->first()->id; 
            $id_car_2 = Car::inRandomOrder()->get()->first()->id;
            $id_car_3 = Car::inRandomOrder()->get()->first()->id;
            $id_car_4 = Car::inRandomOrder()->get()->first()->id;
            $response = $this->post('/api/break', [
                'name'=>$faker->name(),
                'cars'=>[$id_car_1,$id_car_2,$id_car_3,$id_car_4]
               
                
            ]);
            $response->assertStatus(201);
        }
       

}







 public function test_delete_404()
{
    $id = 999999999999999;         
    $response = $this->json('Delete', '/api/break/'.$id);

    $response
        ->assertStatus(404);  
}
public function test_delete_200()
{
    $id = BreakSimulator::inRandomOrder()->get()->first()->id; 
    $response = $this->json('Delete', '/api/break/'.$id);

    $response
        ->assertStatus(200)
        ->assertJson(['status'=>'deleted']);  
    
}


    
}
