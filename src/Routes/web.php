<?php

use Illuminate\Support\Facades\Route;
use Mariojgt\Onixpro\Controllers\HomeContoller;
use Mariojgt\Onixpro\Controllers\BlocksController;
use Mariojgt\Onixpro\Controllers\Auth\LoginController;
use Mariojgt\Onixpro\Controllers\OnixproDashboardController;

// protect route onix pro
Route::group([
    'middleware' => ['web'],
], function () {
    // Example page required to be login
    Route::get('/onixpro', [OnixproDashboardController::class, 'index'])->name('onixpro');
});

// protect route onix pro
Route::group([
    'middleware' => ['web', 'auth'],
], function () {
    // Example page required to be login
    Route::get('/onix-home', [OnixproDashboardController::class, 'onixHome'])->name('onix-home');
    // Blocks index
    Route::get('/blocks', [BlocksController::class, 'index'])->name('blocks');
});
