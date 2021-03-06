<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;
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
    return view('Dashboard');
});

Route::resource('product', 'ProductController');
Route::resource('category', 'CategoryController');

Route::get('/discount', 'DiscountController@index');
Route::get('/discount/create', 'DiscountController@create');
Route::post('/discount', 'DiscountController@store');
Route::get('/discount/{discount}/edit', 'DiscountController@edit');
Route::patch('/discount/{discount}', 'DiscountController@update');
Route::delete('/discount/{id}', 'DiscountController@delete');

Route::get('/order', 'OrderController@index');

Route::get('/penjualan', 'PenjualanController@index');

//Bagian Pembelian
Route::resource('pembelian', 'PembelianController');

// Bagian Laporan
Route::resource('laporan', 'LaporanController');

// Bagian User
Route::resource('user', 'UserController');


Route::get('/transaksi', 'TransaksiController@index');
Route::get('/transaksi/create', 'TransaksiController@create');
Route::post('/transaksi', 'TransaksiController@store');
Route::get('/transaksi/{transaksi}/edit', 'TransaksiController@edit');
Route::patch('/transaksi/{transaksi}', 'TransaksiController@update');
Route::delete('/transaksi/{id}', 'TransaksiController@delete');
