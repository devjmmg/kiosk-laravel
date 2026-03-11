<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/category', CategoryController::class)->middleware('auth:sanctum');
Route::apiResource('/product', ProductController::class)->middleware('auth:sanctum');

Route::post('/register',[AuthController::class, 'register'])->name('register');
Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::post('/logout',[AuthController::class, 'logout'])->middleware('auth:sanctum')->name('logout');

Route::apiResource('/order', OrderController::class)->middleware('auth:sanctum');
