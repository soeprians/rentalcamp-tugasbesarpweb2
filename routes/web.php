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

Route::get('/gscamp', function () {
    return view('gscamp');
});

//Barang
Route::resource('gscamp/barangs','BarangController');
Route::get('/editbarangs/{id}','BarangController@edit')->name('editbarangs');
Route::get('/hapusbarangs/{id}','BarangController@destroy')->name('hapusbarangs');

//Barang
Route::resource('gscamp/transaksi','TransaksiController');
Route::get('/edittransaksi/{id}','TransaksiController@edit')->name('edittransaksi');
Route::get('/hapustransaksi/{id}','TransaksiController@destroy')->name('hapustransaksi');