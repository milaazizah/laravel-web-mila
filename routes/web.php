<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

// Route::get('/mahasiswa', function () {
//     return 'Halo Mahasiswa';
// });

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/matakuliah', [MatakuliahController::class, 'index']);

Route::get('/matakuliah/{param1}', [MatakuliahController::class, 'show']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/data', [PegawaiController::class, 'index']);

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::post('/home/signup', [AuthController::class, 'signup']);

Route::get('/auth', [AuthController::class, 'index'])->name('auth.login');

Route::post('/auth/login', [AuthController::class, 'index']);


Route::get('/go/{tujuan}', [HomeController::class, 'redirectTo'])->name('go');

Route::post('/home/post', function () {
    return view('home');
});

// Register route
Route::get('/auth/register', [AuthController::class, 'showRegisterForm'])->name('register.show');
Route::post('/auth/register', [AuthController::class, 'register'])->name('register.submit');
Route::get('/redirect/{tujuan}', [HomeController::class, 'redirectTo']);

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('pelanggan', [PelangganController::class, 'index'])->name('pelanggan.list');

Route::get('pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');

Route::post('pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');
