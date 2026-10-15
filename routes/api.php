<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoGameController;
use App\Http\Controllers\AuthController;

// Public routes: no token required
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes: valid token required
Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);

    Route::get('/video-games', [VideoGameController::class, 'index']);
    Route::post('/video-games', [VideoGameController::class, 'store']);
    Route::get('/video-games/{videoGame}', [VideoGameController::class, 'show']);
    Route::put('/video-games/{videoGame}', [VideoGameController::class, 'update']);
    Route::delete('/video-games/{videoGame}', [VideoGameController::class, 'destroy']);

});
