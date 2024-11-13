<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', [\App\Http\Controllers\GameController::class, 'index'])->name('games.index');
Route::post('/games', [\App\Http\Controllers\GameController::class, 'store'])->name('games.store');
