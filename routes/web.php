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

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/databarang', [AdminController::class, 'databarang'])->name('databarang');
Route::get('/admin/pembayaran', [AdminController::class, 'pembayaran'])->name('pembayaran');
Route::get('/admin/datakategori', [AdminController::class, 'datakategori'])->name('datakategori');
Route::get('/admin/laporan', [AdminController::class, 'laporan'])->name('laporan');


Route::get('/listbarang/{id}', [AdminController::class, 'listbarang'])->name('listbarang');
