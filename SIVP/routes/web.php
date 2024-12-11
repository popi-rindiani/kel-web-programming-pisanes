<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\CalonController;
use App\Http\Controllers\PemilihController;
use App\Http\Controllers\VotingController;
use App\Http\Controllers\KategoriVotingController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\HasilVotingController;
use App\Http\Controllers\PengaturanController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pengguna', PenggunaController::class);

// Rute untuk Calon
Route::resource('calon', CalonController::class);

// Rute untuk Pemilih
Route::resource('pemilih', PemilihController::class);

// Rute untuk Voting
Route::resource('voting', VotingController::class);

// Rute untuk Kategori Voting
Route::resource('kategori_voting', KategoriVotingController::class);

// Rute untuk Laporan
Route::resource('laporan', LaporanController::class);

// Rute untuk Hasil Voting
Route::resource('hasil_voting', HasilVotingController::class);
Route::resource('pengaturan', PengaturanController::class);


// Rute untuk Pengaturan
Route::get('/pengaturan', [PengaturanController::class, 'index'])->name('pengaturan.index');

Route::get('/pengaturan/create', [PengaturanController::class, 'create'])->name('pengaturan.create');
Route::post('/pengaturan', [PengaturanController::class, 'store'])->name('pengaturan.store');
Route::get('/pengaturan/{pengaturan}/edit', [PengaturanController::class, 'edit'])->name('pengaturan.edit');
Route::put('/pengaturan/{pengaturan}', [PengaturanController::class, 'update'])->name('pengaturan.update');
Route::delete('/pengaturan/{pengaturan}', [PengaturanController::class, 'destroy'])->name('pengaturan.destroy');

