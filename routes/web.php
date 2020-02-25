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



Route::get('/', 'DashboardController@index');
   
// Admin
Route::group(['middleware' => ['auth']], function () {

// siswa
    Route::get('/admin/siswa','Admin\StudentController@index');
    Route::get('/admin/siswa/tambah-siswa', 'Admin\StudentController@create');

    Route::post('/admin/siswa/tambah-siswa/add', 'Admin\StudentController@store')->name('addStudent');
    Route::get('/admin/siswa/edit-siswa/{student}','Admin\StudentController@edit');
    Route::post('/admin/siswa/edit-siswa/{student}/update-student','Admin\StudentController@update')->name('updateStudent');
    Route::get('/admin/siswa/hapus-siswa/{student}','Admin\StudentController@destroy');  
    Route::get('/admin/siswa/detail-siswa/{student}','Admin\StudentController@show');
    Route::get('/admin/pembayaran/{student}','Admin\StudentController@bayarSiswa');
    Route::get('/admin/pembayaran/detail-pembayaran/{student}/{bulan}', 'Admin\StudentController@tambahSPP')->name('tambahSPP');
    Route::post('/admin/pembayaran/detail-pembayaran/tambah/{student}/{bulan}', 'Admin\StudentController@bayarSpp')->name('bayarSpp');
    
    // petugas
    Route::get('/admin/petugas', 'Admin\UserController@index');
    Route::get('/admin/petugas/tambah-petugas','Admin\UserController@create');
    Route::post('/admin/petugas/tambah-petugas/add','Admin\UserController@store')->name('addEmployee');
    Route::get('/admin/petugas/edit-petugas/{users}', 'Admin\UserController@edit');
    Route::post('/admin/petugas/edit-petugas/{users}/update', 'Admin\UserController@update')->name('updateUser');
    Route::get('/admin/petugas/delete-petugas/{users}','Admin\UserController@destroy');

    // kelas
    Route::get('/admin/kelas','Admin\GradeController@index'); 
    Route::get('/admin/kelas/tambah-kelas', 'Admin\GradeController@create');
    Route::post('/admin/kelas/tambah-kelas/add', 'Admin\GradeController@store')->name('addGrade');
    Route::get('/admin/kelas/edit-kelas/{grade}', 'Admin\GradeController@edit');    
    Route::post('/admin/kelas/edit-kelas/{grade}/update', 'Admin\GradeController@update')->name('updateGrade'); 
    Route::get('/admin/kelas/delete-kelas/{grade}', 'Admin\GradeController@destroy');   

    // spp
    Route::get('/admin/spp', 'Admin\MoneyOrderController@index');
    Route::get('/admin/spp/tambah-spp', 'Admin\MoneyOrderController@create');
    Route::post('/admin/spp/tambah-spp/add', 'Admin\MoneyOrderController@store')->name('addSpp');
    Route::get('/admin/spp/edit-spp/{money_order}', 'Admin\MoneyOrderController@edit');
    Route::post('/admin/spp/edit-spp/{money_order}/update', 'Admin\MoneyOrderController@update')->name('updateSpp');

    // // pembayaran
    // Route::get('/admin/pembayaran', function () {
    //     return view('admin.pembayaran.index');
    // });
    // Route::get('/admin/pembayaran/detail-pembayaran', function () {
    //     return view('admin.pembayaran.detail-pembayaran');
    // });
    // Akhir Admin

    Route::get('/admin/pembayaran/edit/{transaction}/{student}/{bulan}', 'Admin\TransactionController@edit');
    Route::patch('/admin/pembayaran/edit/{transaction}/{student}/{bulan}', 'Admin\TransactionController@update')->name('pembayaran.update');
});

// Siswa
Route::get('/siswa', function () {
    return view('siswa.index');
});
Route::get('/siswa/histori-pembayaran', 'HistoriController@index');

// Akhir Siswa

// Petugas
Route::get('/petugas', 'Petugas\TransactionController@index');
Route::get('/cari_siswa', 'Petugas\TransactionController@findStudent')->name('cari_siswa');
Route::get('/petugas/pembayaran', 'Petugas\TransactionController@Student')->name('cari');
Route::post('/petugas/ganti-password/', 'Petugas\TransactionController@update')->name('gantiPassword');
Route::get('/petugas/pembayaran/detail-pembayaran', function () {
    return view('petugas.detail-pembayaran');
});

