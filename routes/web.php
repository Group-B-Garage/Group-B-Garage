<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\CarrosController::class, 'indexhome']);

Route::get('/allcars', [\App\Http\Controllers\CarrosController::class, 'index']);

Route::get('/car/{car_codigo}', [\App\Http\Controllers\CarrosController::class, 'show']);

Route::get('/dashboard', [\App\Http\Controllers\CarrosController::class, 'dash'])->middleware(['auth']);

Route::get('/addcar', [\App\Http\Controllers\CarrosController::class, 'create'])->middleware(['auth']);

Route::post('/createcar', [\App\Http\Controllers\CarrosController::class, 'store'])->middleware(['auth'])->name('car.store');

Route::get('/edit/{car_codigo}', [\App\Http\Controllers\CarrosController::class, 'edit'])->middleware(['auth'])->name('car.edit');

Route::put('/update/{car_codigo}', [\App\Http\Controllers\CarrosController::class, 'update'])->middleware(['auth'])->name('car.update');

Route::delete('/car/{car_codigo}', [\App\Http\Controllers\CarrosController::class, 'destroy']);

Route::get('/hally', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
