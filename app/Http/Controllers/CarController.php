<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['status'=>'success','data'=>Car::all()],200);    
    }

    

    public function store(Request $request)
    {
        $ValidatedData = $request->validate(['name'=>'required|string|max:255','top_speed'=>'numeric|between:0,999.99|required','acceleration'=>'numeric|between:0.1,99.99|required','break_acceleration'=>'numeric|between:0,99.99|required']);  
        Car::create($ValidatedData);
        return response()->json(['status'=>'created'],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $car = Car::find($id);
       if(empty($car)){
        return response()->json(['status'=>'car not found'],404);    
    }
    return response()->json(['status'=>'success','data'=>$car],200);

    }

    
    
    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        if(empty($car)){
         return response()->json(['status'=>'car not found'],404);    
     }
     $ValidatedData = $request->validate(['name'=>'required|string|max:255','top_speed'=>'numeric|between:0,999.99|required','acceleration'=>'numeric|between:0,99.99|required','break_acceleration'=>'numeric|between:0,99.99|required']);  
     $car->update(['name'=>$request->name,'top_speed'=>$request->top_speed,'acceleration'=>$request->acceleration,'break_acceleration'=>$request->break_acceleration]);
     return response()->json(['status'=>'updated'],200);

        
    }

    
    public function destroy($id)
    {
        $car = Car::find($id);
        if(empty($car)){
         return response()->json(['status'=>'car not found'],404);    
     }
     $car->delete();
     return response()->json(['status'=>'deleted'],200); 
    }
}
