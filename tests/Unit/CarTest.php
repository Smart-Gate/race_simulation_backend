<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\Car;
use Illuminate\Support\Facades\DB;
class CarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_car_table()
    {
        $columns = DB::getSchemaBuilder()->getColumnListing('cars');
        $this->assertEquals($columns,["id",'name','top_speed','acceleration','break_acceleration',"created_at","updated_at"]);
    }
    public function test_index()
    {
        $response = $this->json('GET', '/api/car');

        $response
            ->assertStatus(200)
            ->assertJson(['status'=>'success','data'=>Car::all()->toArray()]);
    }
    public function test_show_404()
    {
        $id = 999999999999999;          // adding very large number that make impossible to be found in the data base
        $response = $this->json('GET', '/api/car/'.$id);

        $response
            ->assertStatus(404)->assertJson(['status'=>'car not found']);
    }
    public function test_show_200()
    {
        $id = Car::inRandomOrder()->get()->first()->id; // this function will get a random ID from Car Table and store it in the ID variable
        $response = $this->json('GET', '/api/car/'.$id);

        $response
            ->assertStatus(200)
            ->assertJson(['status'=>'success','data'=>Car::find($id)->toArray()]);  // asserting that the response id is the same id in the request
        
    }
    public function test_store_201()
    {   
        // to make this function work you should add all requeried data as a variables and then pass them in the $response
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        $response = $this->post('/api/car', [
            'name'=>$faker->vehicleBrand(),
            'top_speed'=>$faker->numberBetween(0,999,99),
            'acceleration'=>$faker->numberBetween(0,99,99),
            'break_acceleration'=>$faker->numberBetween(0,99,99),
            
        ]);
        $response->assertStatus(201);

}
public function test_store_302_case_1()
{   
    // to make this function work you should add all requeried data as a variables and then pass them in the $response
    $faker = (new \Faker\Factory())::create();
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    $response = $this->post('/api/car', [
        'top_speed'=>$faker->numberBetween(0,999,99),
        'acceleration'=>$faker->numberBetween(0,99,99),
        'break_acceleration'=>$faker->numberBetween(0,99,99),
        
    ]);
    $response->assertStatus(302);

}
public function test_store_302_case_2()
{   
    // to make this function work you should add all requeried data as a variables and then pass them in the $response
    $faker = (new \Faker\Factory())::create();
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    $response = $this->post('/api/car', [
        'name'=>$faker->vehicleBrand(),
            'top_speed'=>$faker->name(),
            'acceleration'=>$faker->numberBetween(0,99,99),
            'break_acceleration'=>$faker->numberBetween(0,99,99),
        
    ]);
    $response->assertStatus(302);

}

    public function test_update_200()
    {   
        // to make this function work you should add all requeried data as a variables and then pass them in the $response
        $id = Car::inRandomOrder()->get()->first()->id; 
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        $response = $this->post('/api/car/'.$id, [
            'name'=>$faker->vehicleBrand(),
            'top_speed'=>$faker->numberBetween(0,999,99),
            'acceleration'=>$faker->numberBetween(0,99,99),
            'break_acceleration'=>$faker->numberBetween(0,99,99),
            
        ]);
        $response->assertStatus(200)->assertJson(['status'=>'updated']);;

}
public function test_update_404()
    {   
        // to make this function work you should add all requeried data as a variables and then pass them in the $response
        $id = 999999999999; 
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        $response = $this->post('/api/car/'.$id, [
            'name'=>$faker->vehicleBrand(),
            'top_speed'=>$faker->numberBetween(0,999,99),
            'acceleration'=>$faker->numberBetween(0,99,99),
            'break_acceleration'=>$faker->numberBetween(0,99,99),
            
        ]);
        $response->assertStatus(404)->assertJson(['status'=>'car not found']);

}
public function test_update_302_case_1()
    {   
        // to make this function work you should add all requeried data as a variables and then pass them in the $response
        $id = Car::inRandomOrder()->get()->first()->id; 
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        $response = $this->post('/api/car/'.$id, [
            'top_speed'=>$faker->numberBetween(0,999,99),
            'acceleration'=>$faker->numberBetween(0,99,99),
            'break_acceleration'=>$faker->numberBetween(0,99,99),
            
        ]);
        $response->assertStatus(302);

}
public function test_update_302_case_2()
    {   
        // to make this function work you should add all requeried data as a variables and then pass them in the $response
        $id = Car::inRandomOrder()->get()->first()->id; 
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        $response = $this->post('/api/car/'.$id, [
            'name'=>$faker->vehicleBrand(),
            'top_speed'=>$faker->name(),
            'acceleration'=>$faker->numberBetween(0,99,99),
            'break_acceleration'=>$faker->numberBetween(0,99,99),
            
        ]);
        $response->assertStatus(302);

}
 public function test_delete_404(Type $var = null)
{
    $id = 999999999999999;          // adding very large number that make impossible to be found in the data base
    $response = $this->json('Delete', '/api/car/'.$id);

    $response
        ->assertStatus(404)->assertJson(['status'=>'car not found']);  
}
public function test_delete_200()
{
    $id = Car::inRandomOrder()->get()->first()->id; // this function will get a random ID from Car Table and store it in the ID variable
    $response = $this->json('Delete', '/api/car/'.$id);

    $response
        ->assertStatus(200)
        ->assertJson(['status'=>'deleted']);  // asserting that the response id is the same id in the request
    
}


    
}
