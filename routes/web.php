<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ConcertController;
use App\Http\Controllers\UserController;

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
->middleware(['auth']);

Route::resource('users', UserController::class)
->only(['index', 'show', 'store', 'create'])
->middleware(['auth','admin']);

Route::post('/concerts/{concert}/join', [ConcertController::class, 'joinConcert'])->name('concerts.join')
->middleware(['auth']);;

Route::get('/concerts/user/concerts', [ConcertController::class,'indexUserConcerts'])->name('index.user.concerts')
->middleware(['auth']);;

Route::get('/concerts/artist/concerts', [ConcertController::class,'indexArtistConcerts'])->name('index.artist.concerts')
->middleware(['auth']);;


require __DIR__.'/auth.php';
