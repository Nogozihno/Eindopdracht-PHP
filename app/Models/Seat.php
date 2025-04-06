<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seat extends Model{
            /** @use HasFactory<\Database\Factories\SeatFactory> */
            use HasFactory, Notifiable;
    protected $table = 'seats';
    protected $fillable = ['name', 'amount', 'upholstery', 'assembly_time', 'costs', 'image'];
}


