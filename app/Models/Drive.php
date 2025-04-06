<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Drive extends Model{
            /** @use HasFactory<\Database\Factories\DriveFactory> */
            use HasFactory, Notifiable;
    protected $table = 'drives';
    protected $fillable = ['name', 'type_of_drive', 'horsepower', 'assembly_time', 'costs', 'image'];
}