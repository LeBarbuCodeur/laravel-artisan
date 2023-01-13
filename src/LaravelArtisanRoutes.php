<?php

use LeBarbuCodeur\LaravelArtisan\LaravelArtisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| LaravelArtisan Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('artisan')->name('laravel-artisan.')->group(function () {
    Route::get('', [LaravelArtisan::class, 'list'])->name('list');
    Route::get('/{command}', [LaravelArtisan::class, 'play'])->name('play');
});
