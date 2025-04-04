<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class SteeringWheel extends Model{
    protected $table = 'steering_wheels';
    protected $fillable = ['name', 'special_adjustment', 'shape', 'assembly_time', 'costs', 'image'];
}