<?php

use App\Http\Controllers\ResetPassword\ResetPasswordController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::view('/', 'welcome')->name('welcome');

require __DIR__ . '/admin.php';
require __DIR__ . '/station.php';
require __DIR__ . '/nurse.php';
require __DIR__ . '/password.php';
