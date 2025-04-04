<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SteeringWheel extends Model{
                /** @use HasFactory<\Database\Factories\SteeringWheelFactory> */
                use HasFactory, Notifiable;
    protected $table = 'steering_wheels';
    protected $fillable = ['name', 'special_adjustment', 'shape', 'assembly_time', 'costs', 'image'];
}