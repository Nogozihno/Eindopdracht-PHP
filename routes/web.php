<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Seat;
use App\Models\Chassis;
use App\Models\Drive;
use App\Models\SteeringWheel;
use App\Models\Wheel;

Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    return view('products', [
        'chassises' => Chassis::all(), //haalt alle chassis op uit de database met Chassis::all()
        'seats' => Seat::all(),
        'drives' => Drive::all(),
        'steering_wheels' => SteeringWheel::all(),
        'wheels' => Wheel::all()
    ]);
});

Route::get('/seat/{id}', function ($id) {
    $seat = Seat::findOrFail($id); // als ID niet bestaat: error 404
    return view('seat', ['seat' => $seat]);
});
Route::get('/chassis/{id}', function ($id) {
    $chassis = Chassis::findOrFail($id); 
    return view('chassis', ['chassis' => $chassis]);
});
Route::get('/drive/{id}', function ($id) {
    $drive = Drive::findOrFail($id); 
    return view('drive', ['drive' => $drive]);
});
Route::get('/steering_wheel/{id}', function ($id) {
    $steering_wheel = SteeringWheel::findOrFail($id); 
    return view('steering_wheel', ['steering_wheel' => $steering_wheel]);
});
Route::get('/wheel/{id}', function ($id) {
    $wheel = Wheel::findOrFail($id); 
    return view('wheel', ['wheel' => $wheel]);
});


Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/shoppingbag', function () {
//     return view('shoppingbag', [
//         'products' => Product::getFive()
//     ]);
// });

// Route::get('/checkout', function () {
//     return view('checkout', [
//         'products' => Product::getFive()
//     ]);
// });

// Route::get('/thankyou', function () {
//     return view('thankyou');
// });


