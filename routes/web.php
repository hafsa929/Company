<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

Route::get('/', function () {
    return view('Home');
});

Route::get('/Home', function () {
    return view('Home');
});

// ربط المعرض بالكنترولر
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
