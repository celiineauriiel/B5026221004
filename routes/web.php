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

Route::get('/', function () {
    return view('ETS/5026221004');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('/halo2', function () {
    return "<h1>Haloo Fans fans ku tercinta!!!<h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('/p1', function () {
	return view('ETS/p1_hello');
});

Route::get('/p2a', function () {
	return view('ETS/p2_csslink');
});

Route::get('/p2b', function () {
	return view('ETS/p2b_cssstyle');
});

Route::get('/p3', function () {
	return view('ETS/p3_linktree');
});

Route::get('/p4', function () {
	return view('ETS/p4_bs4responsive');
});

Route::get('/p5', function () {
	return view('ETS/p5_layout');
});

Route::get('/p6a', function () {
	return view('ETS/p6_js1');
});

Route::get('/p6b', function () {
	return view('ETS/p6b_js2');
});

Route::get('/p7', function () {
	return view('ETS/p7_validation');
});

Route::get('/p8', function () {
	return view('ETS/p8_ets');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('pegawai/view/{id}', 'App\Http\Controllers\PegawaiController@view');

Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@indexkeranjangbelanja');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/batal/{id}','App\Http\Controllers\KeranjangController@batal');

Route::get('nilai', 'App\Http\Controllers\NilaiKuliahController@DB');
Route::get('nilai/tambah', 'App\Http\Controllers\NilaiKuliahController@tambah');
Route::post('nilai/store', 'App\Http\Controllers\NilaiKuliahController@store');
