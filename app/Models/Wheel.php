<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wheel extends Model{
                    /** @use HasFactory<\Database\Factories\WheelFactory> */
                    use HasFactory, Notifiable;
    protected $table = 'wheels';
    protected $fillable = ['name', 'type_of_tire', 'diameter', 'amount', 'compatible_with_chassis', 'assembly_time', 'costs', 'image'];
}