<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DudiController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SubmitController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\ContentManagementController;
use App\Http\Controllers\InternshipManagementController;

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


Route::middleware('auth')->group(function() {
    Route::get('/home', function () {
        return view('layouts/dashboard/index');
    })->name('home');

    Route::middleware('student_access')->group(function() {
         Route::resource('/siswa', UserManagementController::class);
         Route::resource('/konten', ContentManagementController::class);

    });
//    Close Rute
        Route::resource('/pkl', InternshipManagementController::class);

});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-authenticating', [AuthController::class, 'authenticating'])->name('login-authenticating');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


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