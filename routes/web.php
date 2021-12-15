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
    return view('welcome');
});

Route::get('praktikum1', function () {
    return view('prak1web');
});

Route::get('tugas4', function () {
    return view('tugas4web');
});

Route::get('praktikum2', 'ViewController@showPraktikum2');

Route::get('ets', 'ViewController@showEts');

Route::match(['get','post'],'tugasphp', 'ViewController@showTugasPHP');


Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');



Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');


Route::get('/laptop','LaptopController@index');
Route::get('/laptop/tambah','LaptopController@tambah');
Route::post('/laptop/store','LaptopController@store');
Route::get('/laptop/hapus/{id}','LaptopController@hapus');
Route::get('/laptop/edit/{id}','LaptopController@edit');
Route::post('/laptop/update','LaptopController@update');
Route::get('/laptop/cari','LaptopController@cari');
Route::get('/laptop/view/{id}','LaptopController@detail');

Route::get('/karyawan1','Karyawan1Controller@index');
Route::get('/karyawan1/tambah','Karyawan1Controller@tambah');
Route::post('/karyawan1/store','Karyawan1Controller@store');
Route::get('/karyawan1/hapus/{id}','Karyawan1Controller@hapus');




