<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm']);
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('login', [AuthController::class, 'getlistEmail']);