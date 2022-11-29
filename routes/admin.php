<?php

use App\Http\Controllers\Admin\AdminAuthenticationController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::view('/', 'admin.login.index');
        Route::view('/login', 'admin.login.index')->name('login.index');
        Route::post('/login', [AdminAuthenticationController::class, 'login'])->name('login');
    });
    
    Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::post('/logout', [AdminAuthenticationController::class, 'logout'])->name('logout');
        Route::view('/home', 'admin.home.index')->name('home');
    });
});