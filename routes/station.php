<?php

use App\Http\Controllers\Nurse\NurseAccountController;
use App\Http\Controllers\Station\MyPageController;
use App\Http\Controllers\Station\StationAuthenticationController;
use Illuminate\Support\Facades\Route;

Route::prefix('station')->name('station.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::view('/', 'station.login.index');
        Route::view('/login', 'station.login.index')->name('login.index');
        Route::post('/login', [StationAuthenticationController::class, 'login'])->name('login');
    });

    Route::middleware(['auth', 'role:station'])->group(function () {
        Route::post('/logout', [StationAuthenticationController::class, 'logout'])->name('logout');
        Route::view('/home', 'station.home.index')->name('home');
        Route::get('/profile', [NurseAccountController::class, 'index'])->name('mypage');
    });
});
