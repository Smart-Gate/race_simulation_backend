<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\Path;
use Illuminate\Support\Facades\DB;
class PathTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_path_table()
    {
        $columns = DB::getSchemaBuilder()->getColumnListing('paths');
        $this->assertEquals($columns,["id",'name','length',"created_at","updated_at"]);
    }
    public function test_index()
    {
        $response = $this->json('GET', '/api/path');

        $response
            ->assertStatus(200)
            ->assertJson(['status'=>'success','data'=>Path::all()->toArray()]);
    }
    public function test_show_404()
    {
        $id = 999999999999999;          // adding very large number that make impossible to be found in the data base
        $response = $this->json('GET', '/api/path/'.$id);

        $response
            ->assertStatus(404)->assertJson(['status'=>'path not found']);
    }
    public function test_show_200()
    {
        $id = Path::inRandomOrder()->get()->first()->id; // this function will get a random ID from Path Table and store it in the ID variable
        $response = $this->json('GET', '/api/path/'.$id);

        $response
            ->assertStatus(200)
            ->assertJson(['status'=>'success','data'=>Path::find($id)->toArray()]);  // asserting that the response id is the same id in the request
        
    }
    public function test_store_201_case_1()
    {   
        // to make this function work you should add all requeried data as a variables and then pass them in the $response
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        $response = $this->post('/api/path', [
            'name'=>$faker->streetName(),
            'length'=>$faker->numberBetween(0,9999,99),
            
            
        ]);
        $response->assertStatus(201);

}
public function test_store_201_case_2()
{   
    // to make this function work you should add all requeried data as a variables and then pass them in the $response
    $faker = (new \Faker\Factory())::create();
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    $response = $this->post('/api/path', [
        'name'=>$faker->streetName(),
        'length'=>$faker->numberBetween(0,9999,99),   
    ]);
    $response->assertStatus(201);

}
public function test_store_302_case_1()
{   
    // to make this function work you should add all requeried data as a variables and then pass them in the $response
    $faker = (new \Faker\Factory())::create();
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    $response = $this->post('/api/path', [
        'name'=>$faker->streetName(),
            'length'=>$faker->name(),
            
        
    ]);
    $response->assertStatus(302);

}
public function test_store_302_case_2()
{   
    // to make this function work you should add all requeried data as a variables and then pass them in the $response
    $faker = (new \Faker\Factory())::create();
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    $response = $this->post('/api/path', [
            'length'=>$faker->numberBetween(0,9999,99),
            
        
    ]);
    $response->assertStatus(302);

}

    public function test_update_200()
    {   
        // to make this function work you should add all requeried data as a variables and then pass them in the $response
        $id = Path::inRandomOrder()->get()->first()->id; 
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        $response = $this->post('/api/path/'.$id, [
            'name'=>$faker->streetName(),
            'length'=>$faker->numberBetween(0,9999,99),
            'ending_spped'=>$faker->numberBetween(0,999,99),
            
        ]);
        $response->assertStatus(200)->assertJson(['status'=>'updated']);;

}
public function test_update_404()
    {   
        // to make this function work you should add all requeried data as a variables and then pass them in the $response
        $id = 999999999999; 
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        $response = $this->post('/api/path/'.$id, [
            'name'=>$faker->streetName(),
            'length'=>$faker->numberBetween(0,9999,99),
            
            
        ]);
        $response->assertStatus(404)->assertJson(['status'=>'path not found']);

}
public function test_update_302_case_1()
    {   
        // to make this function work you should add all requeried data as a variables and then pass them in the $response
        $id = Path::inRandomOrder()->get()->first()->id; 
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        $response = $this->post('/api/path/'.$id, [
            'length'=>$faker->numberBetween(0,9999,99),
            
            
        ]);
        $response->assertStatus(302);

}
public function test_update_302_case_2()
    {   
        // to make this function work you should add all requeried data as a variables and then pass them in the $response
        $id = Path::inRandomOrder()->get()->first()->id; 
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        $response = $this->post('/api/path/'.$id, [
            'name'=>$faker->streetName(),
            'length'=>$faker->name(),
            
            
        ]);
        $response->assertStatus(302);

}
 public function test_delete_404(Type $var = null)
{
    $id = 999999999999999;          // adding very large number that make impossible to be found in the data base
    $response = $this->json('Delete', '/api/path/'.$id);

    $response
        ->assertStatus(404)->assertJson(['status'=>'path not found']);  
}
public function test_delete_200()
{
    $id = Path::inRandomOrder()->get()->first()->id; // this function will get a random ID from Path Table and store it in the ID variable
    $response = $this->json('Delete', '/api/path/'.$id);

    $response
        ->assertStatus(200)
        ->assertJson(['status'=>'deleted']);  // asserting that the response id is the same id in the request
    
}


    
}
