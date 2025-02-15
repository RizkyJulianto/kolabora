<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RewardsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CompanyminController;
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

Route::middleware(['AuthIsLogin', 'PreventBackLogout'])->group(function() {
    Route::get('/main-users', [UsersController::class, 'index']);
    Route::get('/profile/{id}', [UsersController::class, 'show'])->name('profile.show');
    Route::post('/profile/{id}', [UsersController::class, 'updatedData'])->name('updatedData');
    Route::get('/company', [CompanyController::class, 'index']);
    Route::get('/partner', [PartnerController::class, 'index']);
    Route::get('/project', [ProjectController::class, 'index']);
    Route::get('/notification', [NotificationController::class, 'index']);
    Route::get('/rewards', [RewardsController::class, 'index']);
});

Route::fallback(function () {
    return view('errors.404');
});

Route::get('layout_1', function () {
    return view('template.layout_1') ;
});

Route::get('/main-company', [CompanyminController::class, 'index']);
Route::get('company/jobs', [CompanyminController::class, 'jobs']);


Route::get('company/verify', [CompanyminController::class, 'verify']);
Route::get('company/results', [CompanyminController::class, 'result']);
Route::get('company/notification', [CompanyminController::class, 'notif']);
Route::get('company/settings', [CompanyminController::class, 'settings']);
