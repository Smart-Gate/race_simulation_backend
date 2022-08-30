<?php

namespace App\Http\Controllers;

use App\Models\BreakSimulator;
use App\Models\Car;
use App\Models\BreakCar;
use App\Http\Controllers\Controller;
use App\Http\Resources\BreakSimulatorResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BreakSimulatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BreakSimulatorResource::collection(BreakSimulator::all());
    }

    
    public function store(Request $request)
    {
        $ValidatedData = $request->validate(['name'=>'required|string|max:255','cars'=>'array|required']);
        $cars = $request->cars;
        foreach($cars as $car_id)
        {
            $car = Car::find($car_id);
            if(empty($car)){
                return response()->json(['status'=>'car not found'],404);    
            }

        }
        $break_simulator = new BreakSimulator;
        $break_simulator->name = $request->name;
        $break_simulator->save();
        foreach ($cars as $car_id)
        {
            $car = Car::find($car_id);
          $name = $car->name;
          $top_speed = $car->top_speed;
          $break_acceleration = $car->break_acceleration;
          $time_until_stop = ($top_speed *1000/3600) / $break_acceleration;
          $dist_until_stop = (($top_speed*1000/3600) * $time_until_stop) - (0.5 * $break_acceleration * $time_until_stop * $time_until_stop);
          $break_car = new BreakCar;
          $break_car->create(['break_simulator_id'=>$break_simulator->id,'name'=>$name,'top_speed'=>$top_speed,'break_acceleration'=>$break_acceleration,'dist_until_stop'=>$dist_until_stop,'time_until_stop'=>$time_until_stop]);

        }
        return response()->json(['status'=>'created'],201);
    }

    
    
    public function destroy($id)
    {
        $break_simulator =  BreakSimulator::find($id); 
        if(empty($break_simulator)){
            return response()->json(['status'=>'break_simulator'],404);  
        }
        $break_simulator->delete();
        return response()->json(['status'=>'deleted'],200);
    }
}
