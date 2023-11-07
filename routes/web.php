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