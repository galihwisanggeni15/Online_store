<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login/submit', [AdminController::class, 'loginsubmit'])->name('loginsubmit');


Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/databarang', [AdminController::class, 'databarang'])->name('databarang');
Route::post('/admin/pembayaran', [AdminController::class, 'pembayaran'])->name('pembayaran');
Route::post('/admin/bayar', [AdminController::class, 'bayar'])->name('bayar');
// Route::get('/admin/pembayarann', [AdminController::class, 'pembayarann'])->name('pembayarann');
Route::get('/admin/datakategori', [AdminController::class, 'datakategori'])->name('datakategori');
Route::get('/admin/laporan', [AdminController::class, 'laporan'])->name('laporan');


Route::get('/listbarang/{id}', [AdminController::class, 'listbarang'])->name('listbarang');
// Route::post('/bayar', [AdminController::class, 'bayar'])->name('bayar');
