<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Wheel extends Model{
    protected $table = 'wheels';
    protected $fillable = ['name', 'type_of_tire', 'diameter', 'amount', 'compatible_with_chassis', 'assembly_time', 'costs', 'image'];
}