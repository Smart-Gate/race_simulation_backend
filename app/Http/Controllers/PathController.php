<?php

namespace App\Http\Controllers;

use App\Models\Path;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class PathController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['status'=>'success','data'=>Path::all()],200);   
    }

    
    public function store(Request $request)
    {
        $ValidatedData = $request->validate(['name'=>'required|string|max:255','length'=>'numeric|between:0,9999.99|required']);  
        Path::create($ValidatedData);
        return response()->json(['status'=>'created'],201);
    }

    
    public function show($id)
    {
        $path = Path::find($id);
       if(empty($path)){
        return response()->json(['status'=>'path not found'],404);    
    }
    return response()->json(['status'=>'success','data'=>$path],200);
        
    }

    
    public function update(Request $request,  $id)
    {
        $path = Path::find($id);
        if(empty($path)){
         return response()->json(['status'=>'path not found'],404);  
     }
     $ValidatedData = $request->validate(['name'=>'required|string|max:255','length'=>'numeric|between:0,9999.99|required']);
     $path->update(['name'=>$request->name,'length'=>$request->length,'ending_spped'=>$request->ending_spped]);
     return response()->json(['status'=>'updated'],200);
    }

    
    public function destroy($id)
    {
        $path = Path::find($id);
        if(empty($path)){
         return response()->json(['status'=>'path not found'],404);  
     }
     $path->delete();
     return response()->json(['status'=>'deleted'],200); 
        
    }
}
