<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('userlevels', 'App\Http\Controllers\UserlevelController@data');

Route::get('userlevels/add', 'App\Http\Controllers\UserlevelController@add');

Route::post('userlevels', 'App\Http\Controllers\UserlevelController@addProcess');

Route::get('userlevels/edit/{id}', 'App\Http\Controllers\UserlevelController@edit');

Route::patch('userlevels/{id}', 'App\Http\Controllers\UserlevelController@editProcess');

Route::delete('userlevels/{id}', 'App\Http\Controllers\UserlevelController@delete');