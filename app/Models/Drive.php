<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Drive extends Model{
    protected $table = 'drives';
    protected $fillable = ['name', 'type_of_drive', 'horsepower', 'assembly_time', 'costs', 'image'];
}

