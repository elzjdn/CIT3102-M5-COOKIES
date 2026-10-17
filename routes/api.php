<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CookieController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me',      [AuthController::class, 'me']);

    Route::get('/cookies',            [CookieController::class, 'index']);
    Route::post('/cookies',           [CookieController::class, 'store']);
    Route::get('/cookies/{cookie}',   [CookieController::class, 'show']);
    Route::put('/cookies/{cookie}',   [CookieController::class, 'update']);
    Route::delete('/cookies/{cookie}',[CookieController::class, 'destroy']);
});