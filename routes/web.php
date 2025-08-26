<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IuranController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PembayaranController;

Route::resource('categories', CategoryController::class);
Route::get('/iuran/create', [IuranController::class, 'create'])->middleware('auth');
Route::post('/iuran', [IuranController::class, 'store'])->middleware('auth');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/warga', [WargaController::class, 'index'])->name('warga.index');

Route::get('/iuran', [IuranController::class, 'index'])->name('iuran.index');
Route::get('/register', [LoginController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [LoginController::class, 'register']);
Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
Route::get('/kategori', [CategoryController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [CategoryController::class, 'create'])->name('kategori.create');
Route::post('/kategori/create', [CategoryController::class, 'store'])->name('kategori.store');
Route::get('/kategori/edit/{id}', [CategoryController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/update/{id}', [CategoryController::class, 'update'])->name('kategori.update');

Route::get('/pembayaran', [PembayaranController::class, 'showForm'])->name('pembayaran.form');
Route::post('/pembayaran', [PembayaranController::class, 'process'])->name('pembayaran.submit');
Route::get('/pembayaran/konfirmasi', [PembayaranController::class, 'confirmation'])->name('pembayaran.konfirmasi');


Route::get('/pembayaran/create', [PembayaranController::class, 'create'])->name('pembayaran.create');
Route::post('/pembayaran/create', [PembayaranController::class, 'store'])->name('pembayaran.store');
Route::get('/pembayaran/edit/{id}', [PembayaranController::class, 'edit'])->name('pembayaran.edit');
Route::put('/pembayaran/update/{id}', [PembayaranController::class, 'update'])->name('pembayaran.update');

    Route::get('/warga', [WargaController::class, 'index'])->name('warga.index');
    Route::get('/warga/create', [WargaController::class, 'create'])->name('warga.create');
    Route::post('/warga', [WargaController::class, 'store'])->name('warga.store');

    Route::get('/warga/edit/{id}', [WargaController::class, 'edit'])->name('warga.edit');
    Route::put('/warga/update{id}', [WargaController::class, 'update'])->name('warga.update');


Route::get('/', function () {
    return view('beranda'); 
});
Route::get('/warga', [WargaController::class, 'index'])->name('warga.index')
    ->middleware('auth');


Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');
    
