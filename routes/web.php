<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
<<<<<<< HEAD
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
=======
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IuranController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PembayaranController;
use App\Models\Category;

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
Route::resource('kategori', CategoryController::class);

Route::get('/pembayaran', [PembayaranController::class, 'showForm'])->name('pembayaran.form');
Route::post('/pembayaran', [PembayaranController::class, 'process'])->name('pembayaran.submit');
Route::get('/pembayaran/konfirmasi', [PembayaranController::class, 'confirmation'])->name('pembayaran.konfirmasi');


Route::get('/pembayaran/create', [PembayaranController::class, 'create'])->name('pembayaran.create');
Route::post('/pembayaran/create', [PembayaranController::class, 'store'])->name('pembayaran.store');
Route::get('/pembayaran/edit/{id}', [PembayaranController::class, 'edit'])->name('pembayaran.edit');
Route::put('/pembayaran/update/{id}', [PembayaranController::class, 'update'])->name('pembayaran.update');
Route::post('/pembayaran/status', [PembayaranController::class, 'updateStatus'])->name('pembayaran.updateStatus');


    Route::get('/warga', [WargaController::class, 'index'])->name('warga.index');
    Route::get('/warga/create', [WargaController::class, 'create'])->name('warga.create');
    Route::post('/warga', [WargaController::class, 'store'])->name('warga.store');

    Route::get('/warga/edit/{id}', [WargaController::class, 'edit'])->name('warga.edit');
    Route::put('/warga/update{id}', [WargaController::class, 'update'])->name('warga.update');
    // Route::delete('/warga/{id}', [WargaController::class, 'destroy'])->name('warga.destroy');
    Route::resource('warga', WargaController::class);




Route::get('/', function () {
    return view('beranda'); 
});
Route::get('/warga', [WargaController::class, 'index'])->name('warga.index')
    ->middleware('auth');


Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');
    
>>>>>>> bc2ad695c0609d92750c1856b833669eeb3001c0
