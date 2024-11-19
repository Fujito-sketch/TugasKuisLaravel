<?php

use App\Http\Controllers\API\KuisController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/kuis', [KuisController::class, 'index']);
Route::post('/kuis', [KuisController::class, 'store']);
Route::get('/kuis/result', [KuisController::class, 'show']);
