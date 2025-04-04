<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Chassis extends Model{
    protected $table = 'chassises';
    protected $fillable = ['name', 'number_of_wheels', 'type_of_vehicle', 'size', 'assembly_time', 'costs', 'image'];
}

