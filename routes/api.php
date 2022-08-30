<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PathController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\BreakSimulatorController;
use App\Http\Controllers\testController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Cars APIs
Route::get('car', [CarController::class,'index']);
Route::get('car/{id}', [CarController::class,'show']);
Route::post('car', [CarController::class,'store']);
Route::post('car/{id}', [CarController::class,'update']);
Route::delete('car/{id}', [CarController::class,'destroy']);

//Pathes APIs
Route::get('path', [PathController::class,'index']);
Route::get('path/{id}', [PathController::class,'show']);
Route::post('path', [PathController::class,'store']);
Route::post('path/{id}', [PathController::class,'update']);
Route::delete('path/{id}', [PathController::class,'destroy']);


//Races APIs
Route::get('race', [RaceController::class,'index']);
Route::post('race', [RaceController::class,'store']);
Route::get('race/{id}', [RaceController::class,'show']);
Route::delete('race/{id}', [RaceController::class,'destroy']);

//Break APIs
Route::get('break', [BreakSimulatorController::class,'index']);
Route::post('break', [BreakSimulatorController::class,'store']);
Route::get('break/{id}', [BreakSimulatorController::class,'show']);
Route::delete('break/{id}', [BreakSimulatorController::class,'destroy']);



// test APIs
Route::get('test_connection', [testController::class,'test_connection']);