<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ConcertController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('artists', ArtistController::class)
    ->only(['index', 'show'])
    ->middleware(['auth']);

Route::resource('concerts', ConcertController::class)
->only(['index', 'show'])
->middleware(['auth','admin']);

/*

Route::middleware(['check_admin'])->group(function () {
    // Your admin-only routes here
});

// Example for an artist-only route
Route::middleware(['check_artist'])->group(function () {
    // Your artist-only routes here
});

    */
require __DIR__.'/auth.php';
