<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

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



Route::get('/navbar/header', [PortfolioController::class, 'index']);
Route::get('/isi/dashboard', [PortfolioController::class, 'dashboard']);
Route::get('/isi/dataproduk', [PortfolioController::class, 'dataproduk']);
Route::get('/isi/laporan', [PortfolioController::class, 'laporan']);
// Route::get('/layouts/sidebar', [PortfolioController::class, 'dataproduk']);