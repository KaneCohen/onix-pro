<?php

use Illuminate\Support\Facades\Route;
use Mariojgt\Onixpro\Controllers\Auth\LoginController;
use Mariojgt\Onixpro\Controllers\Auth\RegisterController;
use Mariojgt\Onixpro\Controllers\Auth\ResetPassword;

// Login | Register Route need to be logout to view this page
Route::group([
    'middleware' => ['web', 'guest'],
], function () {
    // User Login
    Route::get('/onixpro/login', [LoginController::class, 'index'])->name('onix.login');
    // Dologin
    Route::post('/onixpro/login/user', [LoginController::class, 'login'])->name('onix.login.user');

    // User Registration
    Route::get('/onixpro/register', [RegisterController::class, 'register'])->name('onix.register');
    Route::post('/onixpro/register/user', [RegisterController::class, 'userRegister'])->name('onix.register.user');

    // Password Reset
    Route::get('/onixpro/forgot-password', [ResetPassword::class, 'index'])->name('onix.forgot-password');
    Route::post('/onixpro/password-reset', [ResetPassword::class, 'reset'])->name('onix.password-reset');
    Route::get('/onixpro/password-reset/{token}', [ResetPassword::class, 'passwordReset'])->name('onix.password.reset');
    Route::post('/onixpro/password-change', [ResetPassword::class, 'passwordChange'])->name('onix.password.change');
});

// protect route onix pro
Route::group([
    'middleware' => ['web', 'auth'],
], function () {
    // Logout function
    Route::get('/logout', [LoginController::class, 'logout'])->name('onix.logout');
});


// User verify account
Route::group([
    'middleware' => ['web'],
], function () {
    // Warn the user need to be verify
    Route::get('/onixpro/email/verify', [LoginController::class, 'needVerify'])->name('onix.verification.notice');

    // Login to verify the user
    Route::get('/onixpro/user/verify/{id}/{time}', [LoginController::class, 'verify'])->name('onix.user.verify');
});
