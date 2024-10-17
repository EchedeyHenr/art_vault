<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaintingController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('paintings', PaintingController::class);

Route::view('/about', 'under_construction')->name('about');
Route::view('/contact', 'under_construction')->name('contact');