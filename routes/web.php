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

Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/feature', function () {
    return view('feature');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/daftar_pegawai', function () {
    return view('/daftar_pegawai');
});
Route::get('/edit_pegawai', function () {
    return view('/edit_pegawai');
});
Route::get('/tambah_pegawai', function () {
    return view('/tambah_pegawai');
});
Route::get('/tambah_alamat', function () {
    return view('/tambah_alamat');
});