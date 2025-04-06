<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chassis extends Model{
        /** @use HasFactory<\Database\Factories\ChassisFactory> */
        use HasFactory, Notifiable;
        
    protected $table = 'chassises';
    protected $fillable = ['name', 'number_of_wheels', 'type_of_vehicle', 'size', 'assembly_time', 'costs', 'image'];
}

