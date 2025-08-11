<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IuranController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WargaController;

Route::get('/iuran/create', [IuranController::class, 'create'])->middleware('auth');
Route::post('/iuran', [IuranController::class, 'store'])->middleware('auth');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/warga', [WargaController::class, 'index'])->name('warga.index');
Route::get('/iuran', [IuranController::class, 'index'])->name('iuran.index');

Route::get('/register', [LoginController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [LoginController::class, 'register']);
Route::get('/profil', [ProfileController::class, 'profil'])->name('datawarga.profil');



Route::get('/', function () {
    return view('beranda'); // file resources/views/beranda.blade.php
});



Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');

Route::get('/warga', function () {
    return view('warga');
})->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});