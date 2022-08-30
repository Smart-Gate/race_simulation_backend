<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceCar extends Model
{
    public function race()
    {
        return $this->belongsTo('App\Model\Race');
    }
    protected $fillable = ['name','race_id','time_until_top_speed','dist_until_top_speed','time_with_top_speed','dist_with_top_speed','total_dist','top_speed','path_length','test_result','acceleration','total_time'];
    use HasFactory;
}
