<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;


//auth routes start
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
});
//auth end
