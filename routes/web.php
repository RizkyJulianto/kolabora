<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main-page') ;
});

Route::prefix('auth')->group(function() {
    Route::get("/login", [AuthController::class, 'login']);
    Route::post('processLogin', [AuthController::class, 'processLogin'])->name('processLogin');
    Route::get("/registrasi", [AuthController::class, 'registrasi']);
    Route::post('processRegistrasi', [AuthController::class, 'processRegistrasi'])->name('processRegistrasi');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['AuthIsLogin'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});

Route::fallback(function () {
    return view('errors.404');
});