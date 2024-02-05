<?php

use App\Http\Controllers\SubmitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;

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
    return view('layouts/web/index');
});

Route::get('/dashboard', function () {
    return view('layouts/dashboard/index');
});

Route::get('/login', function () {
    return view('auth/login');
});

// Route::get('/login', 'App\Http\Controllers\LoginController@index');

// Route::get('userlevels', 'App\Http\Controllers\UserlevelController@data');

// Route::get('userlevels/add', 'App\Http\Controllers\UserlevelController@add');

// Route::post('userlevels', 'App\Http\Controllers\UserlevelController@addProcess');

// Route::get('userlevels/edit/{id}', 'App\Http\Controllers\UserlevelController@edit');

// Route::patch('userlevels/{id}', 'App\Http\Controllers\UserlevelController@editProcess');

// Route::delete('userlevels/{id}', 'App\Http\Controllers\UserlevelController@delete');

// Route::get('kategoris/add', 'App\Http\Controllers\UserlevelController@add');

// Route::resource('kategoris', KategoriController::class);

// Route::resource('barangs', BarangController::class);

// Route::resource('submits', SubmitController::class);

// Route::get('jumlahbarang/{id}', 'App\Http\Controllers\BarangController@getjumlahbarang');