<?php

namespace App\Http\Controllers;

use App\Models\Race;
use App\Models\Car;
use App\Models\Path;
use App\Models\RaceCar;
use App\Http\Resources\RaceResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RaceResource::collection(Race::all());
        
    }

    public function store(Request $request)
    {

        $race = new Race;
        $errors_number = 0;
        $race->name = $request->name;
        $race->save();
        if(empty(Path::find($request->path))){
            return response()->json(['status'=>'path not found'],404);    
        }
        $ValidatedData = $request->validate(['name'=>'required|string|max:255','cars'=>'array|required','path'=>'integer|required']);
        $cars = $request->cars;
        $path_length = Path::find($request->path)->length;
        foreach($cars as $car_id)
        {
            $car = Car::find($car_id);
            if(empty($car)){
                return response()->json(['status'=>'car not found'],404);    
            }
        }
        foreach ($cars as $car_id)
        {
          $car = Car::find($car_id);
          
          $name = $car->name;
          $top_speed = $car->top_speed;
          $acceleration = $car->acceleration;
          $time_until_top_speed = ($top_speed*1000/3600) / $acceleration;
          $dist_until_top_speed = 0.5 * $acceleration * $time_until_top_speed * $time_until_top_speed; 
          if($path_length >= $dist_until_top_speed )
          {
            $dist_with_top_speed = $path_length - $dist_until_top_speed;
            $time_with_top_speed = $dist_with_top_speed / ($top_speed*1000/3600);
            $total_time = $time_until_top_speed + $time_with_top_speed;
            $total_dist = $dist_until_top_speed + $dist_with_top_speed ;
          }
          else
          {
            $dist_with_top_speed = 0;
            $time_with_top_speed = 0;
            $total_dist = $path_length;
            $total_time = sqrt(2*$total_dist/$acceleration);

          }
          $test_result = $total_dist==$path_length?1:0;
          if($test_result ==0)
          {
            $errors_number = $errors_number +1;
          }
          $race_car = new RaceCar;
          $race_car->create(['race_id'=>$race->id,'name'=>$car->name,'time_until_top_speed'=>$time_until_top_speed,'dist_until_top_speed'=>$dist_until_top_speed,'time_with_top_speed'=>$time_with_top_speed,'dist_with_top_speed'=>$dist_with_top_speed,'total_time'=>$total_time,'total_dist'=>$total_dist,'top_speed'=>$top_speed,'path_length'=>$path_length,'acceleration'=>$car->acceleration,'test_result'=>$test_result]);  
        }
        
          return response()->json(['errors_number'=>$errors_number],201);
        
    }

    
    public function show($id)
    {
        $race = Race::find($id);
        if(empty($race)){
            return response()->json(['status'=>'race not found'],404);  
        }
        return new RaceResource($race);
        
    }

   
    public function destroy( $id)
    {
        $race = Race::find($id);
        if(empty($race)){
            return response()->json(['status'=>'race not found'],404);  
        }
        $race->delete();
        return response()->json(['status'=>'deleted'],200);
    }
}
