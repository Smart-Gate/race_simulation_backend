<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreakCar extends Model
{
    protected $fillable = ['break_simulator_id','name','top_speed','break_acceleration','dist_until_stop','time_until_stop'];
    public function break_simulator()
    {
        return $this->belongsTo('App\Model\BreakSimulator');
    }
    use HasFactory;
}
