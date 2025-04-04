<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Vehicle extends Model{
    protected $table = 'vehicle';
    protected $fillable = ['name', 'number_of_wheels', 'type_of_vehicle', 'size', 'assembly_time', 'costs', 'image'];
}






// public static function all(): array
    // {
    //         // [
    //         //     'id' => 1,
    //         //     'name' => 'Chassis nikinella',
    //         //     'number_of_wheels' => '4',
    //         //     'type_of_vehicle' => 'personenauto',
    //         //     'size' => '[l => 400, B => 186, H => 165]',
    //         //     'assembly_time' => '2',
    //         //     'costs' => '4400',
    //         //     'image' => 'https://netrinoimages.s3.eu-west-2.amazonaws.com/2016/06/26/415927/205241/pickup_truck_chassis_2wd_3d_model_c4d_max_obj_fbx_ma_lwo_3ds_3dm_stl_2381013.jpg'
    //         // ]
    // }

    // public static function find(int $id): array
    // {
    //     $product = Arr::first(static::all(), fn($product) => $product['id'] == $id);

    //     if (! $product) {
    //         abort(404);
    //     }

    //     return $product;
    // }

    // public static function getFive(): array
    // {
    //     return array_slice(static::all(), 0, 5, true);
    // }