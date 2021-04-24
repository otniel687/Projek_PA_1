<?php

use Illuminate\Support\Facades\Route;

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


// Route::get('/', function () {
//     return view('layouts.defaultone');
// });

// Route::get('/desa', function () {
//     return view('about.desa');
// });

Route::get('/', 'App\Http\Controllers\DesaController@home');
Route::get('/desa', 'App\Http\Controllers\DesaController@tentang');
Route::get('/ulos', 'App\Http\Controllers\UlosController@ulos');
Route::get('/ulos/batak', 'App\Http\Controllers\UlosController@batak');
Route::get('/ulos/karo', 'App\Http\Controllers\UlosController@karo');
Route::get('/katalog', 'App\Http\Controllers\ProdukController@index');
Route::get('/pengrajin', 'App\Http\Controllers\PengrajinController@buat');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
