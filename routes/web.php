<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RelasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pilihan');
});

Route::get('/daftar', function () {
    return view('pendaftaran/daftar');
});

Route::get('/masuk', [LoginController::class, 'login'])->name('login');
Route::post('/masuk1', [LoginController::class, 'authenticate']);

Route::get('/daftarlinked', [RegisterController::class, 'daftarlinked']);
Route::post('/daftarlinked', [RegisterController::class, 'store']);

Route::get('/isi', [RegisterController::class, 'isi']);
Route::post('/isi', [RegisterController::class, 'isidong']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [HomeController::class, 'dashboard']);

Route::get('/relasi/1', [RelasiController::class, 'view1']);
Route::get('/relasi/2', [RelasiController::class, 'view2']);
Route::get('/relasi/3', [RelasiController::class, 'view3']);
Route::get('/autentikasi', [RelasiController::class, 'autentikasi']);
