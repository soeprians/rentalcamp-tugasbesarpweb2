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
Route::resource('gscamp/barang','BarangController');
Route::get('/editbarang/{id}','BarangController@edit')->name('editbarang');
Route::get('/hapusbarang/{id}','FacultiController@destroy')->name('hapusbarang');