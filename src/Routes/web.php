<?php

use Illuminate\Support\Facades\Route;
use Mariojgt\Onixpro\Controllers\PagesController;
use Mariojgt\Onixpro\Controllers\BlocksController;
use Mariojgt\Onixpro\Controllers\AutoloadController;
use Mariojgt\Onixpro\Controllers\OnixStoreController;
use Mariojgt\Onixpro\Controllers\OnixSearchController;
use Mariojgt\Onixpro\Controllers\OnixsPageRenderController;
use Mariojgt\Onixpro\Controllers\OnixproDashboardController;
use Mariojgt\Onixpro\Controllers\OnixProApiValidationController;
// protect route onix pro
Route::group([
    'middleware' => ['web'],
], function () {
    // Example page required to be login
    Route::get('/onixpro', [OnixproDashboardController::class, 'index'])->name('onixpro');

    Route::get('/page/{slug}', [OnixsPageRenderController::class, 'index'])->name('page');
});

// protect route onix pro
Route::group([
    'middleware' => config('onixpro.onixpro_middleware'),
], function () {
    // Example page required to be login
    Route::get('/onix-home', [OnixproDashboardController::class, 'onixHome'])->name('onix-home');

    // Onix Search
    Route::post('/onixserver/search', [OnixSearchController::class, 'index'])
        ->name('onixserver.search');

    // Blocks index
    Route::get('/blocks', [BlocksController::class, 'index'])->name('blocks');
    Route::post('/blocks/store', [BlocksController::class, 'store'])->name('blocks.store');
    Route::any('/blocks/delete/{block}', [BlocksController::class, 'destroy'])->name('blocks.delete');
    Route::post('/blocks/update/{block}', [BlocksController::class, 'update'])->name('blocks.update');
    Route::get('/blocks/edit/{block}', [BlocksController::class, 'edit'])->name('blocks.edit');
    Route::get('/blocks/edit/onix/{block}', [BlocksController::class, 'editHtml'])->name('blocks.edit.onix');
    Route::get('/blocks/duplicate/{block}', [BlocksController::class, 'duplicate'])->name('blocks.duplicate');

    // Onix blocks html edit load and save
    Route::get('/blocks/html/load/{block}', [BlocksController::class, 'editorLoad'])->name('blocks.html.load');
    Route::post('/blocks/html/save/{block}', [BlocksController::class, 'editorSave'])->name('blocks.html.save');

    // Pages
    Route::get('/pages', [PagesController::class, 'index'])->name('pages');
    Route::post('/pages/store', [PagesController::class, 'store'])->name('pages.store');
    Route::get('/pages/edit/{page}', [PagesController::class, 'edit'])->name('pages.edit');
    Route::get('/pages/edit/onix/{page}', [PagesController::class, 'editHtml'])->name('pages.edit.onix');
    Route::get('/pages/duplicate/{page}', [PagesController::class, 'duplicate'])->name('pages.duplicate');
    Route::post('/pages/update/{page}', [PagesController::class, 'update'])->name('pages.update');
    Route::any('/pages/delete/{page}', [PagesController::class, 'destroy'])->name('pages.delete');

    // Onix Pages html edit load and save
    Route::get('/pages/html/load/{page}', [PagesController::class, 'editorLoad'])->name('pages.html.load');
    Route::post('/pages/html/save/{page}', [PagesController::class, 'editorSave'])->name('pages.html.save');

    // Load Image example
    Route::get('/onix/image/imageload', [OnixContoller::class, 'imageLoad'])->name('onix.image.load');
    // Save Image example
    Route::post('/onix/image/imagesave', [OnixContoller::class, 'imageSave'])->name('onix.image.save');

    // Autoload components
    Route::get('/onixpro/autoload', [AutoloadController::class, 'autoload'])->name('onixpro.autoload.block');

    // Onix Store
    Route::get('/onixpro/store/components', [OnixStoreController::class, 'componentsStore'])->name('onixpro.store.components');
    Route::get('/onixpro/store/pages', [OnixStoreController::class, 'pagedStore'])->name('onixpro.store.pages');

    // Onix Pro validation
    Route::post('/onixpro/key/validate', [OnixProApiValidationController::class, 'validaKeyAndSave'])
        ->name('onixpro.key.validate');
    // Downlaod components
    Route::post('/onixpro/component/download', [OnixProApiValidationController::class, 'downloadCompoents'])
        ->name('onixpro.component.download');
    // Download page
    Route::post('/onixpro/page/download', [OnixProApiValidationController::class, 'downloadPages'])
        ->name('onixpro.page.download');
});
