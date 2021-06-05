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

Route::get('/', 'DokterController@index')->name('Pasien');
Route::get('/tambah', 'DokterController@tambah')->name('Pasien.tambah');
Route::get('/edit{id}', 'DokterController@edit')->name('Pasien.edit');
Route::get('/search', 'DokterController@search')->name('Pasien.search');
Route::get('/proses', 'DokterController@proses')->name('Pasien.proses');
Route::get('/hapus{id}', 'DokterController@hapus')->name('Pasien.hapus');
Route::get('/update{id}', 'DokterController@update')->name('Pasien.update');
