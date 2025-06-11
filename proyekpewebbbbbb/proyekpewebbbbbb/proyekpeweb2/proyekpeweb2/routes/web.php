<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/berita', function () {
    return view('berita.berita');
});

// === AUTH ROUTES ===

// Register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');

// Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// === DASHBOARD ROUTES ===

// Admin Login Page
Route::get('/login-admin', function () {
    return view('admin.login-admin');
})->name('admin.login');

// Admin Dashboard (optional: middleware 'auth:admin' if separated)
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// User Dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/welcome', [DashboardController::class, 'index'])->name('dashboard');
});
//Route::get('/dashboard', function () {
//return view('admin.dashboard');
//})->name('dashboard');

//menampilkan data siswa pada manajemen siswa 
Route::get('/admin/datasiswa', [SiswaController::class, 'index'])->name('data-siswa');

Route::get('/admin/validasi', function () {
    return view('admin.validasi');
})->name('validasi');

// Menampilkan halaman akun
Route::get('/admin/akun', [AuthController::class, 'showAccount'])->middleware('auth')->name('akun');

// Menyimpan update profil
Route::post('/admin/akun/update-profile', [AuthController::class, 'updateProfile'])->middleware('auth')->name('akun.updateProfile');

// Menyimpan update password
Route::post('/admin/akun/update-password', [AuthController::class, 'updatePassword'])->middleware('auth')->name('akun.updatePassword');

//halaman sesi kelas 
Route::get('/admin/sesi-kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::post('/admin/sesi-kelas', [KelasController::class, 'store'])->name('kelas.store');

//materi
Route::get('/admin/materi', [MateriController::class, 'index'])->name('admin.materi.index');
Route::post('/admin/materi', [MateriController::class, 'store'])->name('admin.materi.store');

Route::get('/admin/tugas', [TugasController::class, 'index'])->name('tugas.index');
Route::post('/admin/tugas', [TugasController::class, 'store'])->name('tugas.store');
Route::get('/admin/tugas/{id}', [TugasController::class, 'show'])->name('tugas.show');
Route::get('/admin/tugas/{id}/edit', [TugasController::class, 'edit'])->name('tugas.edit');
Route::put('/admin/tugas/{id}', [TugasController::class, 'update'])->name('tugas.update');
Route::delete('/admin/tugas/{id}', [TugasController::class, 'destroy'])->name('tugas.destroy');

//paketbimbel
Route::get('/paketpppk', function () {
    return view('paketpppk');
})->name('paket.pppk');

Route::get('/paket', function () {
    // halaman list paket
})->name('paket.index');

Route::get('/paket/beli/{id}', function ($id) {
    // logic pembelian paket
})->name('paket.beli');
