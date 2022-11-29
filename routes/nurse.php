<?php

use App\Http\Controllers\Nurse\NurseAccountController;
use App\Http\Controllers\Nurse\NurseAuthenticationController;
use App\Http\Controllers\Nurse\NurseRedirectController;
use Illuminate\Support\Facades\Route;

Route::prefix('nurse')->name('nurse.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::view('/', 'nurse.top-page.index')->name('top-page');
        Route::get('/redirect-station', [NurseRedirectController::class, 'redirectToStation'])->name('redirect-station');
        Route::view('/redirect-refuse', 'nurse.top-page.redirect-refuse')->name('redirect-refuse');
        Route::view('/login', 'nurse.login.index')->name('login.index');
        Route::post('/login', [NurseAuthenticationController::class, 'login'])->name('login');
        Route::view('/register', 'nurse.register.index')->name('register.index');
        Route::post('/register', [NurseAccountController::class, 'validateCredential'])->name('register');
        Route::view('/register/confirm', 'nurse.register.confirm');
        Route::post('/register/confirm', [NurseAccountController::class, 'store'])->name('register.confirm');
        Route::post('/register/return', [NurseAccountController::class, 'return'])->name('register.return');
    });

    Route::middleware(['auth', 'role:nurse'])->group(function () {
        Route::post('/logout', [NurseAuthenticationController::class, 'logout'])->name('logout');
        Route::view('/home', 'nurse.home.index')->middleware('verified:nurse.verification.notice')->name('home');
        Route::get('/verify', [NurseAccountController::class, 'showVerifyNotice'])->name('verification.notice');
        Route::post('/verification-notification', [NurseAccountController::class, 'resendVerificationEmail'])->name('verification.send');
        Route::get('/verify/{id}/{hash}', [NurseAccountController::class, 'emailVerify'])->middleware('signed')->name('verification.verify');


        Route::get('/profile', [NurseAccountController::class, 'index'])->name('profile');
        Route::post('/profile', [NurseAccountController::class, 'storeInfo'])->name('storeinfo');
        Route::post('/profile/store-way-of-working', [NurseAccountController::class, 'storeWayOfWorking'])->name('storeWayOfWorking');
        Route::post('/profile/job-history', [NurseAccountController::class, 'storeJobHistory'])->name('storeJobHistory');
        Route::post('/profile/store-license', [NurseAccountController::class, 'storeLicense'])->name('storeLicense');
        Route::post('/profile/store-identity', [NurseAccountController::class, 'storeIdentity'])->name('storeIdentity');
    });
});
