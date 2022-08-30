<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $fillable = ['name'];
    public function cars()
    {
        return $this->hasMany('App\Models\RaceCar');
    }
    use HasFactory;
}
