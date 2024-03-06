<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;

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

// Route::get('/main', function () {
//     return view('dashboard.header');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/admin', function () {
//     return "hello admin";
// })->middleware(['auth', 'verified', 'role:admin']);

Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/manajemen', function () {
    return view('layouts/dashboard/manajemen_siswa');
})->name('manajemen')->middleware(['auth', 'verified', 'role:admin|guru']);

Route::get('/kelola-barang',[BarangController::class, 'index'])->name('barang')->middleware(['auth', 'verified', 'role:admin']);

Route::get('/kategori-inventaris', [KategoriController::class, 'index'])->name('kategori-inventaris')->middleware(['auth', 'verified', 'role:admin']);

Route::get('/riwayat-peminjaman',[PeminjamanController::class, 'index'] )->name('riwayat-peminjaman')->middleware(['auth', 'verified']);

Route::get('/riwayat-pengembalian', function () {
    return view('inventaris/rwyt_pengembalian/index');
})->name('riwayat-pengembalian')->middleware(['auth', 'verified', 'role:admin|guru']);

// Route::get('/user', function () {
//     return "hello user";
// })->middleware(['auth', 'verified', 'role:user']);

Route::get('/tulisan', function () {
    return "<h1>ini hanya bisa diakses admin untuk tambah user</h1>";
})->middleware(['auth', 'verified', 'permission:tambah-user']);

require __DIR__.'/auth.php';
