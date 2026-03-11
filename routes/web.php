<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'api' => 'Kiosko API',
        'version' => '1.0'
    ]);
});

// Route::get('/', function () {
//     return view('welcome');
// });
