<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('lang/change', [LanguageController::class, 'change'])->name('lang.change');
Route::get('/Contact-us',[HomeController::class, 'Contact'])->name('Contact');
Route::get('/About-us',[HomeController::class, 'About'])->name('About');
Route::get('/services',[HomeController::class, 'Service'])->name('Service');

