<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by MARYADI the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something GANTENG great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', 'HomeController@index')->name('home');
#route mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('/mahasiswa/tambah', 'MahasiswaController@create')->name('mahasiswa_tambah');
Route::get('/mahasiswa/daftar', 'MahasiswaController@daftar')->name('mahasiswa_daftar');
Route::post('/mahasiswa/simpan', 'MahasiswaController@store')->name('mahasiswa_simpan');
Route::post('/mahasiswa/hapus', 'MahasiswaController@destroy')->name('mahasiswa_hapus');
Route::get('/mahasiswa/edit', 'MahasiswaController@edit')->name('mahasiswa_edit');
Route::post('/mahasiswa/update', 'MahasiswaController@update')->name('mahasiswa_update');