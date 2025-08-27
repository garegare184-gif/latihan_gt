<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WargaController;


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/login', [AuthController::class, 'login'])->name('login.process');

Route::middleware(['auth', 'warga'])->group(function () {
    Route::get('/warga/dashboard', [WargaController::class, 'dashboard'])->name('warga.dashboard');
});

Route::middleware(['admin'])->group(function () {
    
    Route::get('/admin/dasboard', [AdminController::class, 'index']);

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/warga', [AdminController::class, 'indexWarga'])->name('admin.warga.index');
    Route::post('/warga', [AdminController::class, 'storeWarga'])->name('admin.warga.store');
    Route::get('/warga/{id}/edit', [AdminController::class, 'editWarga'])->name('admin.warga.edit');
    Route::put('/warga/{id}', [AdminController::class, 'updateWarga'])->name('admin.warga.update');
    Route::delete('/warga/{id}', [AdminController::class, 'destroyWarga'])->name('admin.warga.destroy');

    Route::post('/kategori', [AdminController::class, 'storeCategory'])->name('admin.kategori.store');
    Route::delete('/kategori/{id}', [AdminController::class, 'destroyCategory'])->name('admin.kategori.destroy');
    Route::get('/kategori', [AdminController::class, 'indexKategori'])->name('admin.kategori.index');
    Route::get('/admin/kategori/{id}/edit', [AdminController::class, 'edit'])->name('admin.kategori.edit');
    Route::put('/admin/kategori/{id}', [AdminController::class, 'update'])->name('admin.kategori.update');


    Route::put('/pembayaran/{id}', [AdminController::class, 'updatePayment'])->name('admin.pembayaran.update');
    Route::delete('/pembayaran/{id}', [AdminController::class, 'destroyPayment'])->name('admin.pembayaran.destroy');
    Route::get('/pembayaran', [AdminController::class, 'indexPayment'])->name('admin.pembayaran.index');
    Route::post('/pembayaran', [AdminController::class, 'store'])->name('admin.pembayaran.store');


});
