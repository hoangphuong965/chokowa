<?php

use App\Http\Controllers\Password\PasswordController;
use Illuminate\Support\Facades\Route;

Route::prefix('password')->name('password.')->middleware('guest')->group(function () {
    Route::view('/forgot', 'password.forgot')->name('request');
    Route::post('/forgot', [PasswordController::class, 'sendPasswordResetEmail'])->name('forgot');
    Route::get('/reset/{token}', [PasswordController::class, 'index'])->name('reset');
    Route::post('/reset', [PasswordController::class, 'resetPassword'])->name('update');
    Route::view('/success', 'password.success')->name('success');
});