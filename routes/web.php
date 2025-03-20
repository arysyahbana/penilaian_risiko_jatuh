<?php

use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\MateriController as AdminMateriController;
use App\Http\Controllers\Admin\PenilaianController as AdminPenilaianController;
use App\Http\Controllers\Admin\QuizController as AdminQuizController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('admin.pages.dashboard');
// });

// Guest
Route::get('/', [PenilaianController::class, 'index'])->name('index');

// Admin
Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::prefix('penilaian')->group(function () {
        Route::get('/show', [AdminPenilaianController::class, 'index'])->name('penilaian.show');
        Route::get('/create', [AdminPenilaianController::class, 'create'])->name('penilaian.create');
        Route::post('/store', [AdminPenilaianController::class, 'store'])->name('penilaian.store');
        Route::get('/edit', [AdminPenilaianController::class, 'edit'])->name('penilaian.edit');
        Route::post('/update/{id}', [AdminPenilaianController::class, 'update'])->name('penilaian.update');
        Route::get('/destroy/{id}', [AdminPenilaianController::class, 'destroy'])->name('penilaian.destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__ . '/auth.php';
