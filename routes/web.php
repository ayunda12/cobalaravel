<?php

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
use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'BerandaController@index');
Route::get('/petugas', 'PetugasController@index');
Route::get('/anggota', 'AnggotaController@index');
Route::get('/buku', 'BukuController@index');
Route::get('/login', 'LoginController@index');
Route::get('/peminjaman', 'PeminjamanController@index');
Route::get('/pengembalian', 'PengembalianController@index');
