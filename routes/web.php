<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

Route::get('/', [AnggotaController::class, 'index'])->name('anggota.index');
Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');
Route::get('/anggota/create', [AnggotaController::class, 'create'])->name('anggota.create');
Route::post('/anggota', [AnggotaController::class, 'store'])->name('anggota.store');
Route::get('/anggota/{id}', [AnggotaController::class, 'show'])->name('anggota.show');
Route::get('/anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');
Route::put('/anggota/{id}', [AnggotaController::class, 'update'])->name('anggota.update');
Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');

use App\Http\Controllers\PeminjamanController;

Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
Route::get('/peminjaman/{id}/edit', [PeminjamanController::class, 'edit'])->name('peminjaman.edit');
Route::put('/peminjaman/{id}', [PeminjamanController::class, 'update'])->name('peminjaman.update');
Route::delete('/peminjaman/{id}', [PeminjamanController::class, 'destroy'])->name('peminjaman.destroy');





use App\Http\Controllers\BukuController;
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/{no_buku}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::put('/buku/{no_buku}', [BukuController::class, 'update'])->name('buku.update');
Route::delete('/buku/{no_buku}', [BukuController::class, 'destroy'])->name('buku.destroy');

use App\Http\Controllers\PenulisController;

Route::get('/penulis', [PenulisController::class, 'index'])->name('penulis.index');
Route::get('/penulis/create', [PenulisController::class, 'create'])->name('penulis.create');
Route::post('/penulis', [PenulisController::class, 'store'])->name('penulis.store');
Route::get('/penulis/{id}/edit', [PenulisController::class, 'edit'])->name('penulis.edit'); // Tambahkan rute ini
Route::put('/penulis/{id}', [PenulisController::class, 'update'])->name('penulis.update');
Route::delete('/penulis/{id}', [PenulisController::class, 'destroy'])->name('penulis.destroy');

use App\Http\Controllers\RakController;

// Menampilkan daftar rak
Route::get('/rak', [RakController::class, 'index'])->name('rak.index');

// Menampilkan formulir untuk menambahkan rak baru
Route::get('/rak/create', [RakController::class, 'create'])->name('rak.create');

// Menyimpan rak baru ke dalam database
Route::post('/rak', [RakController::class, 'store'])->name('rak.store');

// Menampilkan formulir untuk mengedit rak
Route::get('/rak/{rak}/edit', [RakController::class, 'edit'])->name('rak.edit');

// Mengupdate rak dalam database
Route::put('/rak/{rak}', [RakController::class, 'update'])->name('rak.update');

// Menghapus rak dari database
Route::delete('/rak/{rak}', [RakController::class, 'destroy'])->name('rak.destroy');

