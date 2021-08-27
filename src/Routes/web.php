<?php

use Illuminate\Support\Facades\Route;
use Mariojgt\Onixpro\Controllers\HomeContoller;
use Mariojgt\Onixpro\Controllers\BlocksController;
use Mariojgt\Onixpro\Controllers\Auth\LoginController;
use Mariojgt\Onixpro\Controllers\OnixproDashboardController;
use Mariojgt\Onixpro\Controllers\AutoloadController;
// protect route onix pro
Route::group([
    'middleware' => ['web'],
], function () {
    // Example page required to be login
    Route::get('/onixpro', [OnixproDashboardController::class, 'index'])->name('onixpro');
});

// protect route onix pro
Route::group([
    'middleware' => config('onixpro.onixpro_middleware'),
], function () {
    // Example page required to be login
    Route::get('/onix-home', [OnixproDashboardController::class, 'onixHome'])->name('onix-home');
    // Blocks index
    Route::get('/blocks', [BlocksController::class, 'index'])->name('blocks');
    Route::post('/blocks/store', [BlocksController::class, 'store'])->name('blocks.store');
    Route::post('/blocks/update/{block}', [BlocksController::class, 'update'])->name('blocks.update');
    Route::get('/blocks/edit/{block}', [BlocksController::class, 'edit'])->name('blocks.edit');
    Route::get('/blocks/edit/onix/{block}', [BlocksController::class, 'editHtml'])->name('blocks.edit.onix');

    // Onix html edit load and save
    Route::get('/blocks/html/load/{block}', [BlocksController::class, 'editorLoad'])->name('blocks.html.load');
    Route::post('/blocks/html/save/{block}', [BlocksController::class, 'editorSave'])->name('blocks.html.save');

    // Autoload components
    Route::get('/onixpro/autoload', [AutoloadController::class, 'autoload'])->name('onixpro.autoload.block');
});
