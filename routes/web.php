<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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
// Authentication
//Route::get('register', [AuthController::class, 'register'])
//    ->middleware('guest')
//    ->name('register');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

// Dashboard
Route::get('/', [DashboardController::class, 'show'])
    ->name('welcome');

Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // My profile
    Route::get('/profile', [ProfileController::class, 'myProfile'])
        ->name('my.profile');

    // Edit Resume
    Route::get('/resume', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/resume', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/resume', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';
