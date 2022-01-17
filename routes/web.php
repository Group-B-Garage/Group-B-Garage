<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\CarrosController::class, 'indexhome']);

Route::get('/allcars', [\App\Http\Controllers\CarrosController::class, 'index']);

Route::get('/car/{car_codigo}', [\App\Http\Controllers\CarrosController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
