<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Car;
class testController extends Controller
{
    public function test_connection()
    {
        $id = Car::inRandomOrder()->get()->first()->id;
        return $id  ; 
    }
}
