<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PenjualanController;
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

Route::get('/transaksi', 'TransaksiController@index');
