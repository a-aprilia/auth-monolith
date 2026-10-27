<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Controllers\AdminDashboardController;

Route::middleware(['web', 'auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
        ->name('admin.dashboard');
});

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/user/dashboard', function () {
        return view('dashboard');
    })->name('user.dashboard');
});