<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\SanksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;

Route::get('/', function () {
    return view('welcome');
});

// Default dashboard route
Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Routes for admin with middleware
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::resource('buku', BukuController::class, ['as' => 'admin']);
    Route::resource('penulis', PenulisController::class, ['parameters' => ['penulis' => 'penulis'], 'as' => 'admin']);
    Route::resource('rak', RakController::class, ['as' => 'admin']);
    Route::resource('anggota', AnggotaController::class, ['as' => 'admin']);
    Route::resource('peminjaman', PeminjamanController::class, ['as' => 'admin']);
    Route::resource('sanksi', SanksiController::class, ['as' => 'admin']);
    
    // Profile routes for admin
    Route::get('profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
});

// Routes for user to view only
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/user/buku', [BukuController::class, 'index'])->name('user.buku.index');
    Route::get('/user/penulis', [PenulisController::class, 'index'])->name('user.penulis.index');
    Route::get('/user/rak', [RakController::class, 'index'])->name('user.rak.index');
    Route::get('/user/profile/edit', [UserProfileController::class, 'edit'])->name('user.profile.edit');
    Route::patch('/user/profile', [UserProfileController::class, 'update'])->name('user.profile.update');
    Route::delete('/user/profile', [UserProfileController::class, 'destroy'])->name('user.profile.destroy');
    
});

// Middleware to protect routes and manage profiles
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
