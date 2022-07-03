<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

// Admin
use App\Http\Controllers\Admin\DashboardUserController;
use App\Http\Controllers\Admin\DashboardUmkmController;
use App\Http\Controllers\Admin\DashboardKoperasiController;
use App\Http\Controllers\Admin\DashboardPengajuanController;

// User Umkm
use App\Http\Controllers\User\Umkm\DashboardUserUmkmController;
use App\Http\Controllers\User\Umkm\DashboardUserProductController;

// User Koperasi
use App\Http\Controllers\User\Koperasi\DashboardUserKoperasiController;
use App\Http\Controllers\User\Koperasi\DashboardProductKoperasiController;
use App\Http\Controllers\User\Koperasi\DashboardJasaKoperasiController;

// User Izin
use App\Http\Controllers\User\Izin\DashboardUserIzinController;


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

// Auntentikasi
Auth::routes();

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/umkm/{umkm}', [HomeController::class, 'umkm'])->name('umkm');
Route::get('/koperasi/{koperasi}', [HomeController::class, 'koperasi'])->name('koperasi');

//  Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/profile', [DashboardController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/profile/edit', [DashboardController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/profile', [DashboardController::class, 'destroy'])->middleware('auth');

Route::get('/dashboard/izin/surat', [DashboardUserIzinController::class, 'surat'])->middleware('auth');
Route::post('/dashboard/izin/surat', [DashboardUserIzinController::class, 'suratStore'])->middleware('auth');
Route::delete('/dashboard/izin/surat/{izin}', [DashboardUserIzinController::class, 'suratDestroy'])->middleware('auth');



Route::get('/dashboard/izin/register', [DashboardUserIzinController::class, 'register'])->middleware('auth');

// Dashboard User UMKM Product
Route::get('/dashboard/umkm/{umkm:id}/umkm-product', [DashboardUserProductController::class, 'index'])->middleware('auth');
Route::post('/dashboard/umkm/{umkm:id}/umkm-product', [DashboardUserProductController::class, 'store'])->middleware('auth');
Route::get('/dashboard/umkm/{umkm:id}/umkm-product/create', [DashboardUserProductController::class, 'create'])->middleware('auth');
Route::put('/dashboard/umkm-product/{product:id}', [DashboardUserProductController::class, 'update'])->middleware('auth');
Route::put('/dashboard/umkm-product/{product:id}/unggulan', [DashboardUserProductController::class, 'isUnggulan'])->middleware('auth');
Route::delete('/dashboard/umkm-product/{product:id}', [DashboardUserProductController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/umkm-product/{product:id}/edit', [DashboardUserProductController::class, 'edit'])->middleware('auth');

// Dashboard User UMKM Profile
Route::get('/dashboard/umkm/{umkm:id}/umkm-profile', [DashboardUserUmkmController::class, 'index'])->middleware('auth');
Route::get('/dashboard/umkm/{umkm:id}/umkm-profile/edit', [DashboardUserUmkmController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/umkm/{umkm:id}/umkm-profile', [DashboardUserUmkmController::class, 'update'])->middleware('auth');

// Dashboard User Koperasi Profile
Route::get('/dashboard/koperasi/{koperasi:id}/koperasi-profile', [DashboardUserKoperasiController::class, 'index'])->middleware('auth');
Route::get('/dashboard/koperasi/{koperasi:id}/koperasi-profile/edit', [DashboardUserKoperasiController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/koperasi/{koperasi:id}/koperasi-profile', [DashboardUserKoperasiController::class, 'update'])->middleware('auth');

// Dashboard User Koperasi Product
Route::get('/dashboard/koperasi/{koperasi:id}/koperasi-product', [DashboardProductKoperasiController::class, 'index'])->middleware('auth');
Route::post('/dashboard/koperasi/{koperasi:id}/koperasi-product', [DashboardProductKoperasiController::class, 'store'])->middleware('auth');
Route::get('/dashboard/koperasi/{koperasi:id}/koperasi-product/create', [DashboardProductKoperasiController::class, 'create'])->middleware('auth');
Route::put('/dashboard/koperasi-product/{productKoperasi:id}', [DashboardProductKoperasiController::class, 'update'])->middleware('auth');
Route::put('/dashboard/koperasi-product/{productKoperasi:id}/unggulan', [DashboardProductKoperasiController::class, 'isUnggulan'])->middleware('auth');
Route::delete('/dashboard/koperasi-product/{productKoperasi:id}', [DashboardProductKoperasiController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/koperasi-product/{productKoperasi:id}/edit', [DashboardProductKoperasiController::class, 'edit'])->middleware('auth');

// Dashboard User Koperasi Jasa
Route::get('/dashboard/koperasi/{koperasi:id}/koperasi-jasa', [DashboardJasaKoperasiController::class, 'index'])->middleware('auth');
Route::post('/dashboard/koperasi/{koperasi:id}/koperasi-jasa', [DashboardJasaKoperasiController::class, 'store'])->middleware('auth');
Route::get('/dashboard/koperasi/{koperasi:id}/koperasi-jasa/create', [DashboardJasaKoperasiController::class, 'create'])->middleware('auth');
Route::put('/dashboard/koperasi-jasa/{jasaKoperasi:id}', [DashboardJasaKoperasiController::class, 'update'])->middleware('auth');
Route::put('/dashboard/koperasi-jasa/{jasaKoperasi:id}/unggulan', [DashboardJasaKoperasiController::class, 'isUnggulan'])->middleware('auth');
Route::delete('/dashboard/koperasi-jasa/{jasaKoperasi:id}', [DashboardJasaKoperasiController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/koperasi-jasa/{jasaKoperasi:id}/edit', [DashboardJasaKoperasiController::class, 'edit'])->middleware('auth');

// Dashboard Admin
Route::resource('/dashboard/user', DashboardUserController::class)->middleware('admin');
Route::resource('/dashboard/umkm', DashboardUmkmController::class)->middleware('admin');
Route::resource('/dashboard/koperasi', DashboardKoperasiController::class)->middleware('admin');


Route::get('/dashboard/pengajuan', [DashboardPengajuanController::class, 'index'])->middleware('admin');
Route::get('/dashboard/comp', [DashboardController::class, 'comp'])->middleware('admin');


// Pengajuan UMKM
Route::put('/dashboard/pengajuan/umkm/{umkm}', [DashboardPengajuanController::class, 'aproved'])->middleware('admin');
Route::put('/dashboard/pengajuan/{izin}/izin', [DashboardPengajuanController::class, 'izin'])->middleware('admin');



// Route::resource('/dashboard/pengajuan', DashboardKoperasiController::class)->middleware('admin');

//Dashboard User
// Route::get('/', [DashboardController::class, 'index'])->name('home');
