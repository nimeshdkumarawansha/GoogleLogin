<?php

use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/google/callback-url', [SocialLoginController::class, 'handleGoogleCallback']);

// Route::prefix('social-login')->group(function () {
//     // Google login
//     Route::get('google', [SocialLoginController::class, 'redirectToGoogle'])->name('google.login');
//     Route::get('google/callback-url', [SocialLoginController::class, 'handleGoogleCallback']);
// });