<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BeritaController;

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

Route::get('/', [IndexController::class, 'index']);

Route::get('/berita/{slug}', [BeritaController::class, 'show']);

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin/berita', [BeritaController::class, 'index']);

Route::post('/admin/berita', [BeritaController::class, 'store']);

Route::get('/admin/berita/tambah', function () {
    return view('tambahBerita');
});

Route::get('/admin/berita/hapus/{id}', [BeritaController::class, 'destroy']);
Route::get('/admin/berita/edit/{id}', [BeritaController::class, 'edit']);

Route::post('/admin/berita/edit/{id}', [BeritaController::class, 'update']);
