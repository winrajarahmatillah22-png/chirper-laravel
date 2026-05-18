<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 🌟 Halaman utama (sudah tidak default Laravel lagi)
Route::get('/', function () {
    return redirect()->route('chirps.index');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Auth protected routes
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth']);
    Route::post(
    '/chirps/{chirp}/like',
    [LikeController::class, 'toggle']
)->name('chirps.like');
    Route::post(
    '/chirps/{chirp}/comments',
    [CommentController::class, 'store']
)->name('comments.store');

Route::delete(
    '/comments/{comment}',
    [CommentController::class, 'destroy']
)->name('comments.destroy');

});

require __DIR__.'/auth.php';