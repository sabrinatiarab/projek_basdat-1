<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderDetailController;


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
Route::get('/pemesanan', function () {
    return view('pemesanan');
});
Route::get('/sandwich', function () {
    return view('sandwich');
});
Route::get('/sides', function () {
    return view('snack');
});
Route::get('/beverages', function () {
    return view('beverages');
});
// });
// // Route::post('sandwich_detail', [OrderDetailController::class, 'getData']);

// Route::post('sandwich_detal', function (){
//     OrderDetail::create([
//         'bread' -> request('bread'),
//         'size' -> request('size'),
//         'extras' -> request('extras'),
//         'veggies' -> reqest('veggies'),
//         'sauces' -> request('sauces')
//     ]);
//     return redirect('/sandwich_detal');
//     return view('sandwich_detail');
// });

// });
Route::get('/sandwich_detail', [SandwichDetailController::class, "index"]);
Route::post('/sandwich_detail', [SandwichDetailController::class, "store"]);

// Route::get('/sides', [OrderDetailController::class, "index"]);
// Route::post('/sides', [OrderDetailController::class, "store"]);

// Route::get('/beverages', [OrderDetailController::class, "index"]);
// Route::post('/beverages', [OrderDetailController::class, "store"]);

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

