<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return view('index');
// });

//Route untuk Data Buku
Route::get('/visionmision/tampil', 'Visionmision@visionmisiontampil');
Route::post('/visionmision/tambah','VisionmisionController@visionmisiontambah');
Route::get('/visionmision/hapus/{id_buku}','VisionmisionController@visionmisionhapus');
Route::put('/visionmision/edit/{id_buku}', 'VisionmisionController@visionmisionedit');

//Route untuk Data Buku
Route::get('/home', function(){return view('view_home');});

//Route untuk Data Anggota
Route::get('/banners', 'BannerController@bannertampil');
Route::post('/banners/tambah', 'BannerController@bannertambah');
Route::get('/banners/hapus/{id}', 'BannerController@bannerhapus');
Route::put('/banners/edit/{id}', 'BannerController@banneredit');

//Route untuk Data Petugas
Route::get('/petugas', 'PetugasController@petugastampil');
Route::post('/petugas/tambah', 'PetugasController@petugastambah');
Route::get('/petugas/hapus/{id_petugas}', 'PetugasController@petugashapus');
Route::put('/petugas/edit/{id_petugas}', 'PetugasController@petugasedit');

//Route untuk Data Peminjaman
Route::get('/pinjam', 'PinjamController@pinjamtampil');
Route::post('/pinjam/tambah','PinjamController@pinjamtambah');
Route::get('/pinjam/hapus/{id_pinjam}','PinjamController@pinjamhapus');
Route::put('/pinjam/edit/{id_pinjam}', 'PinjamController@pinjamedit');

Route::get('/dashboard/posts', [PostController::class, 'index']);
Route::get('/dashboard/posts/create', [PostController::class, 'create']);
Route::post('/dashboard/posts/create', [PostController::class, 'store']);