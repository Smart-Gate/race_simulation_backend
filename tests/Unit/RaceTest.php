<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\Car;
use App\Models\Path;
use App\Models\Race;
use App\Models\RaceCar;
use Illuminate\Support\Facades\DB;
class RaceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_race_table()
    {
        $columns = DB::getSchemaBuilder()->getColumnListing('races');
        $this->assertEquals($columns,["id",'name','created_at','updated_at']);
    }
    public function test_race_cars_table()
    {
        $columns = DB::getSchemaBuilder()->getColumnListing('race_cars');
        $this->assertEquals($columns,["id","race_id","name","top_speed","acceleration","time_until_top_speed","dist_until_top_speed","time_with_top_speed","dist_with_top_speed","total_time","path_length","total_dist","test_result","created_at","updated_at"]);
    }
    public function test_index()
    {
        $response = $this->json('GET', '/api/race');

        $response
            ->assertStatus(200);
    }
    public function test_show_404()
    {
        $id = 999999999999999;          // adding very large number that make impossible to be found in the data base
        $response = $this->json('GET', '/api/race/'.$id);

        $response
            ->assertStatus(404)->assertJson(['status'=>'race not found']);
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
            $id_path = Path::inRandomOrder()->get()->first()->id;
            $response = $this->post('/api/race', [
                'name'=>$faker->name(),
                'cars'=>[$id_car_1,$id_car_2,$id_car_3,$id_car_4],
                'path'=>$id_path,
                
            ]);
            $response->assertStatus(201)->assertJson(['errors_number'=>0]);
        }
       

}
public function test_show_200()
{
    $id = Race::inRandomOrder()->get()->first()->id; // this function will get a random ID from Car Table and store it in the ID variable
    $response = $this->json('GET', '/api/race/'.$id);
    $response
        ->assertStatus(200);
    
}
public function test_store_302_case_1()
{   
    // to make this function work you should add all requeried data as a variables and then pass them in the $response
    $faker = (new \Faker\Factory())::create();
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    $id_path = Path::inRandomOrder()->get()->first()->id;
    $response = $this->post('/api/race', [
        'name'=>$faker->name(),
            'path'=>$id_path,
        
    ]);
    $response->assertStatus(302);

}
public function test_store_404()
{   
    // to make this function work you should add all requeried data as a variables and then pass them in the $response
    $faker = (new \Faker\Factory())::create();
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    $id_car_1 = Car::inRandomOrder()->get()->first()->id; 
    $id_car_2 = Car::inRandomOrder()->get()->first()->id;
    $id_car_3 = Car::inRandomOrder()->get()->first()->id;
    $id_car_4 = Car::inRandomOrder()->get()->first()->id;
    $response = $this->post('/api/race', [
        'name'=>$faker->name(),
        'cars'=>[$id_car_1,$id_car_2,$id_car_3,$id_car_4],
        'path'=>99999,
        
    ]);
    $response->assertStatus(404);

}




 public function test_delete_404()
{
    $id = 999999999999999;          // adding very large number that make impossible to be found in the data base
    $response = $this->json('Delete', '/api/race/'.$id);

    $response
        ->assertStatus(404)->assertJson(['status'=>'race not found']);  
}
public function test_delete_200()
{
    $id = Race::inRandomOrder()->get()->first()->id; // this function will get a random ID from Race Table and store it in the ID variable
    $response = $this->json('Delete', '/api/race/'.$id);

    $response
        ->assertStatus(200)
        ->assertJson(['status'=>'deleted']);  // asserting that the response id is the same id in the request
    
}


    
}
