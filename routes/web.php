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

Route::get('/', function () {
    return view('welcome');
});

Route::get('checkout', function () {
    return view('checkout');
});

Route::get('contact', function () {
    return view('contact');
});

// Route::get('home', function () {
//     return view('home');
// });

Route::get('keranjang', function () {
    return view('keranjang');
});

Route::get('login', function () {
    return view('login');
});

Route::get('nota', function () {
    return view('nota');
});

Route::get('produk', function () {
    return view('produk');
});

Route::get('pembelian', function () {
    return view('pembelian');
});

Route::get('produkadm', function () {
    return view('produkadm');
});

Route::get('register', function () {
    return view('register');
});

Route::get('user', function () {
    return view('user');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware(['auth'])->group(function () {
//     Auth::routes();
// Route::get('pesan/{id}, [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('pesan/{id}', [App\Http\Controllers\PesanController::class, 'index']);
// Route::post('pesan/{id}', 'PesanController@pesan');
// Route::get('check-out', 'PesanController@check_out');
// Route::delete('check-out/{id}', 'PesanController@delete');

// Route::get('konfirmasi-check-out', 'PesanController@konfirmasi');

// Route::get('profile', 'ProfileController@index');
// Route::post('profile', 'ProfileController@update');

// Route::get('history', 'HistoryController@index');
// Route::get('history/{id}', 'HistoryController@detail');
// });