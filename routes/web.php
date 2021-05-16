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
Route::resource('/desa', 'App\Http\Controllers\DesaController');
Route::get('/ulos', 'App\Http\Controllers\UlosController@ulos');
Route::get('/ulos/batak', 'App\Http\Controllers\UlosController@batak');
Route::get('/ulos/karo', 'App\Http\Controllers\UlosController@karo');
Route::get('/katalog', 'App\Http\Controllers\ProdukController@index');
Route::get('/halamanpengrajin', 'App\Http\Controllers\HalamanpengrajinController@index');
Route::get('/kritik', 'App\Http\Controllers\KritikController@tampil');
Route::post('/kritik/simpan', 'App\Http\Controllers\KritikController@store');
Route::get('/join', 'App\Http\Controllers\JoinController@join');
Route::get('/data_web1', 'App\Http\Controllers\Web1Controller@index');
Route::get('/data_web2', 'App\Http\Controllers\Web2Controller@batak');
Route::get('/data_web3', 'App\Http\Controllers\Web3Controller@batak');


//login
Route::post('/login','App\Http\Controllers\login\LoginController@login')->name('login');
Route::get('/login','App\Http\Controllers\login\LoginController@index')->name('login');
Route::group(['middleware' => 'auth'], function(){
Route::post('logout', 'App\Http\Controllers\login\LoginController@logout')->name('logout');

//halaman login
Route::get('/pengrajin', 'App\Http\Controllers\PengrajinController@index');
Route::get('/pengrajin/ubah/{id}', 'App\Http\Controllers\PengrajinController@edit');
Route::post('/pengrajin/update/{id}', 'App\Http\Controllers\PengrajinController@update');
Route::get('/pengrajin/hapus/{id}', 'App\Http\Controllers\PengrajinController@destroy');

//Produk
Route::get('/jenis', 'App\Http\Controllers\JenisController@index');
Route::get('/jenis/ubah/{id}', 'App\Http\Controllers\JenisController@edit');
Route::post('/jenis/update/{id}', 'App\Http\Controllers\JenisController@update');
Route::get('/jenis/hapus/{id}', 'App\Http\Controllers\JenisController@destroy');

//pengguna
Route::get('/kritiksaran', 'App\Http\Controllers\KritikController@index');
Route::get('/kritiksaran/hapus/{id}', 'App\Http\Controllers\KritikController@destroy');
Route::post('/kritiksaran/simpan', 'App\Http\Controllers\KritikController@store');

});