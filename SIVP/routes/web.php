<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CalonController;
use App\Http\Controllers\PemilihController;
use App\Http\Controllers\VotingController;
use App\Http\Controllers\KategoriVotingController;
use App\Http\Controllers\HasilVotingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route untuk login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);



// Menggunakan middleware auth untuk memverifikasi pengguna
Route::middleware(['auth'])->group(function () {
    // Default route untuk dashboard
    Route::get('/dashboard', function () {
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('masyarakat.dashboard');
    })->name('dashboard');

    // Routes untuk admin
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
        //user
        Route::resource('users', UserController::class);
        //calon
        Route::resource('calon', CalonController::class);
        //pemilih
        Route::resource('pemilih', PemilihController::class);
        Route::post('/pemilih/{id}/vote', [PemilihController::class, 'vote'])->name('pemilih.vote');
        //kategori voting
        Route::resource('kategori_voting', KategoriVotingController::class);
        //hasil voting
        Route::resource('hasil_voting', HasilVotingController::class);

    });

    // Routes untuk masyarakat
    Route::middleware(['role:masyarakat'])->group(function () {
        Route::get('/masyarakat/dashboard', [MasyarakatController::class, 'dashboard'])->name('masyarakat.dashboard');
        //voting
        Route::resource('voting', VotingController::class);
        // Route::post('/voting/{id}', [VotingController::class, 'vote'])->name('voting.vote');
        // Route::post('/vote/{id}', [VotingController::class, 'vote'])->name('vote');

        Route::get('/voting', [VotingController::class, 'index'])->name('voting.index');
        Route::post('/voting', [VotingController::class, 'vote'])->name('voting.vote');
        Route::get('/voting/results', [VotingController::class, 'showVotes'])->name('voting.results');
        
    });
});
