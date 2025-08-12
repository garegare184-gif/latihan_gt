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
Route::get('/warga', [UserController::class, 'warga']);
Route::get('/kategori', [CategoryController::class, 'index']);
;

Route::middleware(['auth'])->group(function() {
    Route::get('/warga/create', [WargaController::class, 'create'])->name('warga.create');
    Route::get('/warga/store', [WargaController::class, 'store'])->name('warga.store');

    Route::get('/warga/{id}/edit', [WargaController::class, 'edit'])->name('warga.edit');
    Route::put('/warga/{id}', [WargaController::class, 'update'])->name('warga.update');
});


Route::get('/', function () {
    return view('beranda'); 
});
Route::get('/warga', [WargaController::class, 'index'])
    ->name('warga.index')
    ->middleware('auth');


Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');
    
