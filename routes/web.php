<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaintingController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('paintings', PaintingController::class);