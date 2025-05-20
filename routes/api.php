<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DashboardController;



// API Routes
Route::middleware('api')->group(function () {
    Route::post('/login', [\App\Http\Controllers\Api\Auth\LoginController::class, 'login']);
    Route::post('/register', [\App\Http\Controllers\Api\Auth\RegisterController::class, 'register']);
    Route::post('/logout', [\App\Http\Controllers\Api\Auth\LoginController::class, 'logout']);
});
// Dashboard Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'data']);
});


