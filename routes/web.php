<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    if (auth()->check()) {
        return redirect()->route('games.index');
    }

    return view('welcome');
})->name('welcome.index');

Route::post('/', static function (Request $request) {
    $name = $request->input('name', 'Guest');

    $user = \App\Models\User::query()->firstOrCreate([
        'name' => $name
    ]);

    \Illuminate\Support\Facades\Auth::login($user);

    return redirect()->route('games.index');
})->name('welcome.store');


Route::get('/games', [\App\Http\Controllers\GameController::class, 'index'])->middleware(['auth'])->name('games.index');
Route::post('/games', [\App\Http\Controllers\GameController::class, 'store'])->middleware(['auth'])->name('games.store');
Route::get('/games/result', [\App\Http\Controllers\GameController::class, 'show'])->middleware(['auth'])->name('games.show');
// route untuk user kalo dia pengen main lagi
Route::get('/games/restart', [\App\Http\Controllers\GameController::class, 'restart'])->name('games.restart');
Route::redirect('/login', '/')->name('login');

