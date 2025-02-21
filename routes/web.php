<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RewardsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CompanyminController;
use App\Http\Controllers\MainUsersController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('main-page');
});

Route::delete('/delete-notification/{id}', function ($id) {
    DB::table('notifications')->where('id', $id)->delete();
    Session::flash('success_second', 'Berhasil Hapus data');
    return redirect()->back();
});

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('processLogin', [AuthController::class, 'processLogin'])->name('processLogin');
    Route::get('/registrasi', [AuthController::class, 'registrasi']);
    Route::post('processRegistrasi', [AuthController::class, 'processRegistrasi'])->name('processRegistrasi');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['AuthIsLogin', 'PreventBackLogout'])->group(function () {
    Route::get('/main-users', [MainUsersController::class, 'index'])->name('mainUsersSearch');
    Route::get('/main-users/{id}', [MainUsersController::class, 'show'])->name('showProject');
    Route::put('/main-users/{id}', [MainUsersController::class, 'join'])->name('joinProject');
    Route::get('/profile/{id}', [UsersController::class, 'show'])->name('profile.show');
    Route::put('/profile/{id}', [UsersController::class, 'update'])->name('updateProfileUsers');
    Route::get('/company', [CompanyController::class, 'index'])->name('companySearch');
    Route::get('/company/{id}', [CompanyController::class, 'show']);
    Route::get('/partner', [PartnerController::class, 'index'])->name('partnerSearch');
    Route::get('/project', [ProjectController::class, 'index'])->name('projectSearch');
    Route::get('/project/{id}', [ProjectController::class, 'show'])->name('showProjectResult');
    Route::put('/project/{id}', [ProjectController::class, 'result'])->name('projectResult');
    Route::get('/notification', [NotificationController::class, 'index']);
    Route::get('/rewards', [RewardsController::class, 'index']);
    Route::get('/main-company', [CompanyminController::class, 'index']);
    Route::get('/company-jobs', [JobController::class, 'index']);
    Route::get('company/verify', [CompanyminController::class, 'verify']);
    Route::get('company/results', [CompanyminController::class, 'result']);
    Route::get('company/notification', [CompanyminController::class, 'notif']);
    Route::get('company/settings', [CompanyminController::class, 'settings']);
});

Route::fallback(function () {
    return view('errors.404');
});
