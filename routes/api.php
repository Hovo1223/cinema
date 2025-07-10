<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FilmController;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\HallController;
use App\Http\Controllers\Api\PromoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('/films/')->group(function() {
    Route::post('/store', [FilmController::class, 'store']);
    Route::post('/edit/{id}', [FilmController::class, 'edit']);

    Route::prefix('/genre/')->group(function() {
        Route::post('/store', [GenreController::class, 'store']);
        Route::post('/edit/{id}', [GenreController::class, 'edit']);
    });
    Route::prefix('/halls/')->group(function() {
        Route::post('/store', [HallController::class, 'store']);
        Route::post('/edit/{id}', [HallController::class, 'edit']);
    });
    Route::prefix('/promos/')->group(function() {
        Route::post('/store', [PromoController::class, 'store']);
        Route::post('/edit/{id}', [PromoController::class, 'edit']);
    });
});