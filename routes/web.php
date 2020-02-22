<?php

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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/', function () {
    return view('admin.index');
});
// Admin

// siswa
Route::get('/admin/siswa', function () {
    return view('admin.siswa.index');
});
Route::get('/admin/siswa/tambah-siswa', function () {
    return view('admin.siswa.tambah-siswa');
});
Route::get('/admin/siswa/edit-siswa', function () {
    return view('admin.siswa.edit-siswa');
});
Route::get('/admin/siswa/detail-siswa', function () {
    return view('admin.siswa.detail-siswa');
});


// petugas
Route::get('/admin/petugas', function () {
    return view('admin.petugas.index');
});
Route::get('/admin/petugas/tambah-petugas', function () {
    return view('admin.petugas.tambah-petugas');
});
Route::get('/admin/petugas/edit-petugas', function () {
    return view('admin.petugas.edit-petugas');
});

// kelas
Route::get('/admin/kelas', function () {
    return view('admin.kelas.index');
});
Route::get('/admin/kelas/tambah-kelas', function () {
    return view('admin.kelas.tambah-kelas');
});
Route::get('/admin/kelas/edit-kelas', function () {
    return view('admin.kelas.edit-kelas');
});

// spp
Route::get('/admin/spp', function () {
    return view('admin.spp.index');
});
Route::get('/admin/spp/tambah-spp', function () {
    return view('admin.spp.tambah-spp');
});
Route::get('/admin/spp/edit-spp', function () {
    return view('admin.spp.edit-spp');
});

// pembayaran
Route::get('/admin/pembayaran', function () {
    return view('admin.pembayaran.index');
});
Route::get('/admin/pembayaran/detail-pembayaran', function () {
    return view('admin.pembayaran.detail-pembayaran');
});
// Akhir Admin

// Siswa
Route::get('/siswa', function () {
    return view('siswa.index');
});
Route::get('/siswa/histori-pembayaran', function () {
    return view('siswa.histori_pembayaran');
});

// Akhir Siswa

