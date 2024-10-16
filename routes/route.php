<?php

use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Support\Facades\Route;
use JobMetric\Huma\Http\Controllers\HumaController;

/*
|--------------------------------------------------------------------------
| Laravel Media Routes
|--------------------------------------------------------------------------
|
| All Route in Laravel Huma package
|
*/

// media
Route::prefix('huma')->name('huma.')->namespace('JobMetric\Huma\Http\Controllers')->group(function () {
    Route::middleware([
        SubstituteBindings::class
    ])->group(function () {
        Route::get('/', [HumaController::class, 'index'])->name('index');
    });
});
