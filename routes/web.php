<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MovesController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AboutController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::prefix('/home')->group(function () {
    Route::post('/', [HomepageController::class, 'index'])->name('home.index');
    Route::get('/', [HomepageController::class, 'index']);
    Route::get('/view/{id}', [HomepageController::class, 'view'])->name('home.view');
    Route::get('/about', [HomepageController::class, 'about']);

});

// Admin routes protected by middleware
Route::prefix('/admin')->middleware('auth')->group(function () {

    // Moves (Films) Routes
    Route::get('/', [MovesController::class, 'index']);
    Route::prefix('/films')->group(function () {
        Route::get('/', [MovesController::class, 'index'])->name('films');
        Route::get('/new', [MovesController::class, 'create'])->name('films.create');
        Route::get('/update/{id}', [MovesController::class, 'update'])->name('films.update');
        Route::delete('/delete/{id}', [MovesController::class, 'destroy'])->name('films.destroy');
    });

    // Genre Routes
    Route::prefix('/genres')->group(function () {
        Route::get('/', [GenreController::class, 'index'])->name('genre');
        Route::get('/new', [GenreController::class, 'create'])->name('genre.create');
        Route::get('/update/{id}', [GenreController::class, 'update'])->name('genre.update');
        Route::delete('/destroy/{id}', [GenreController::class, 'destroy'])->name('genre.destroy');
    });

    // Hall Routes
    Route::prefix('/halls')->group(function () {
        Route::get('/', [HallController::class, 'index'])->name('hall');
        Route::get('/new', [HallController::class, 'create'])->name('hall.create');
        Route::get('/update/{id}', [HallController::class, 'update'])->name('hall.update');
        Route::delete('/destroy/{id}', [HallController::class, 'destroy'])->name('hall.destroy');
    });

    // Promo Routes
    Route::prefix('/promos')->group(function () {
        Route::get('/', [PromoController::class, 'index'])->name('promo');
        Route::get('/new', [PromoController::class, 'create'])->name('promo.create');
        Route::get('/update/{id}', [PromoController::class, 'update'])->name('promo.update');
        Route::delete('/destroy/{id}', [PromoController::class, 'destroy'])->name('promo.destroy');
    });

    // Pages Routes
    Route::prefix('/pages')->group(function () {
        Route::get('/', [PagesController::class, 'index'])->name('pages');
        Route::get('/update', [PagesController::class, 'update'])->name('pages.update');
    });
    Route::prefix('/about')->group(function () {
        Route::get('/', [AboutController::class, 'index'])->name('about');
        Route::get('/create', [AboutController::class, 'create'])->name('about.new');

    });

});

// Profile Routes (auth required)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Auth routes for guest users (login/register)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
});

// Logout Route
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


require __DIR__.'/auth.php';
