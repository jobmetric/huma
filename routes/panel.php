<?php

use Illuminate\Support\Facades\Route;
use JobMetric\Huma\Http\Controllers\HumaController;

/*
|--------------------------------------------------------------------------
| Laravel Huma Panel Routes
|--------------------------------------------------------------------------
|
| All Route in Laravel Huma panel package
|
*/

// route huma panel
Route::name('huma.')->namespace('JobMetric\Huma\Http\Controllers')->group(function () {
    Route::get('/', [HumaController::class, 'index'])->name('dashboard');
});
