<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZombieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('welcome');
});

Route::middleware(['web'])->group(function () {
Route::get('home', function () {
return view('home');
})->name('home');
Route::prefix('admin')->group(function () {
Route::resource('zombies', ZombieController::class);
});
});

Route::get('/dashboard', function () {
return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

Route::get('profile', [UserController::class, 'profile'])->middleware('auth')->name('profile');

require __DIR__.'/auth.php';
