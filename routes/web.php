<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\PortfolioController;

=======
use App\Http\Controllers\AdminController;
>>>>>>> c9349bd851c4ed29e8778889950d66c0e5b802ab
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

<<<<<<< HEAD


Route::get('/navbar/header', [PortfolioController::class, 'index']);
Route::get('/isi/dashboard', [PortfolioController::class, 'dashboard']);
Route::get('/isi/dataproduk', [PortfolioController::class, 'dataproduk']);
Route::get('/isi/laporan', [PortfolioController::class, 'laporan']);
// Route::get('/layouts/sidebar', [PortfolioController::class, 'dataproduk']);
=======
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/databarang', [AdminController::class, 'databarang'])->name('databarang');
Route::get('/admin/pembayaran', [AdminController::class, 'pembayaran'])->name('pembayaran');
Route::get('/admin/datakategori', [AdminController::class, 'datakategori'])->name('datakategori');
Route::get('/admin/laporan', [AdminController::class, 'laporan'])->name('laporan');


Route::get('/listbarang/{id}', [AdminController::class, 'listbarang'])->name('listbarang');
>>>>>>> c9349bd851c4ed29e8778889950d66c0e5b802ab
