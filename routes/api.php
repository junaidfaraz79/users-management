<?php

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\UserController;
// use App\Http\Controllers\MediaController;

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [LogoutController::class, 'logout']);
    Route::post('user/update', [UserController::class, 'update']);
    Route::get('user/{id}', [UserController::class, 'findUserById']);
    Route::get('users', [UserController::class, 'listAllUsers']);
    // Route::post('media/upload', [MediaController::class, 'upload']);
});
