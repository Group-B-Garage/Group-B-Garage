<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PagesController::class, 'index']);

Route::get('/allcars', [\App\Http\Controllers\CarrosController::class, 'index']);

Route::get('/car/{car_codigo}', [\App\Http\Controllers\CarrosController::class, 'show']);

