<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
     protected $fillable = [
        'team1',
        'team2',
        'point1',
        'point2', 
        'result'  
    ];
}
   