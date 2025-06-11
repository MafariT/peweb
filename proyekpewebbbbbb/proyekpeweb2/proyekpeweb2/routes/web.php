<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\ForgotPasswordController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/berita', function () {
    return view('berita.berita');
});

Route::get('/register', function () {
    return view('register');
})->name('register.form');

Route::post('/register', function (\Illuminate\Http\Request $request) {
    // Validasi dan simpan (sementara hanya redirect)
    $request->validate([
        'nama' => 'required|varchar|max:100',
        'email' => 'required|varchar|max:100',
        'telepon' => 'required|int|max:13',
    ]);

    return redirect()->route('register.form')->with('success', 'Pendaftaran berhasil!');
})->name('register.store');

Route::get('/login', function () {
    return view('User.index');
});
