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

Route::get('/about', function (){
	return view('about');
});

Route::get('/admin', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::get('/', 'DonaturController@index');
Route::get('/formDonasi', 'DonaturController@formDonasi');
Route::get('/konfirmasi', 'DonaturController@konfirmasi');
Route::post('/add', 'DonaturController@addDonatur');

Route::get('/formRelawan', 'RelawanController@formRelawan');
Route::get('/formAbsensiRelawan', 'RelawanController@formAbsensiRelawan');
Route::post('/addRelawan', 'RelawanController@addRelawan');
Route::post('/addAbsensiRelawan', 'RelawanController@addAbsensiRelawan');

Route::get('/formPelatihan', 'PelatihanController@formPelatihan');
Route::post('/addPelatihan', 'PelatihanController@addPelatihan');

Route::get('/report', 'DistribusiController@index');
Route::get('/detailReport/{tgl}', 'DistribusiController@detailReportTanggal');
Route::get('/detailReport/{jenis}', 'DistribusiController@detailReportJenis');

Route::get('/reportKegiatan', 'KegiatanController@index');

Route::group(['middleware' => 'auth'], function(){
	Route::get('/dashboard','DashboardController@index');
	Route::get('/penerima','PenerimaController@index');
	Route::post('/penerima/create','PenerimaController@create');
	Route::get('/penerima/{id}/edit', 'PenerimaController@edit');
	Route::post('/penerima/{id}/update', 'PenerimaController@update');
	Route::get('/penerima/{id}/delete', 'PenerimaController@delete');
	Route::get('/rekomendasi', 'PenerimaController@rekomendasi');
	Route::get('/penerima/{id}/pilih', 'PenerimaController@pilih');
	Route::post('/penerima/{id}/kirim', 'DistribusiController@kirim');

	Route::get('/konfirmasiDonasi', 'DonaturController@konfirmasiDonasi');
	Route::get('/riwayatDonasi', 'DonaturController@riwayatDonasi');
	Route::get('/detailDonatur/{id}', 'DonaturController@detailDonatur');
	Route::get('/updateStatus/{id}', 'DonaturController@updateStatus');

  Route::get('/listRelawan', 'RelawanController@listRelawan');
	Route::get('/detailRelawan/{id}', 'RelawanController@detailRelawan');

  Route::get('/listPelatihan', 'PelatihanController@listPelatihan');
	Route::get('/detailPelatihan/{id}', 'PelatihanController@detailPelatihan');

	Route::get('/listBarang', 'BarangController@index');
	Route::get('/formStok/{id}', 'BarangController@formStok');
	Route::get('/formEdit/{id}', 'BarangController@formEdit');
	Route::get('/formStokKategori/{id}', 'BarangController@formStokKategori');
	Route::get('/formEditKategori/{id}', 'BarangController@formEditKategori');
	Route::post('/tambahBarang', 'BarangController@tambahBarang');
	Route::post('/tambahStok/{id}', 'BarangController@tambahStok');
	Route::post('/editBarang/{id}', 'BarangController@editBarang');
	Route::post('/tambahStokKategori/{id}', 'BarangController@tambahStokKategori');
	Route::post('/editKategori/{id}', 'BarangController@editKategori');
	
	Route::post('/tambahKategori', 'KategoriController@tambahKategori');

	Route::get('/formKegiatan', 'KegiatanController@formKegiatan');
	Route::post('/tambahKegiatan', 'KegiatanController@tambahKegiatan');
});
