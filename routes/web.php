<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\CarrosController::class, 'indexhome']);

Route::get('/allcars', [\App\Http\Controllers\CarrosController::class, 'index']);

Route::get('/car/{car_codigo}', [\App\Http\Controllers\CarrosController::class, 'show']);

Route::get('/dashtemporario', [\App\Http\Controllers\CarrosController::class, 'dash']);

Route::get('/teladecadastro', [\App\Http\Controllers\CarrosController::class, 'cadastro']);

Route::get('/addcar', [\App\Http\Controllers\CarrosController::class, 'create']);

Route::post('/createcar', [\App\Http\Controllers\CarrosController::class, 'store'])->name('car.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
