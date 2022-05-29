<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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

Route::get('/', [BerandaController::class, 'index']);

Route::get('/profil', [ProfilController::class, 'index']);

Route::get('/pendaftaran-santri', [PendaftaranController::class, 'create']);

Route::post('/pendaftaran-santri', [PendaftaranController::class, 'store']);
//
Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/berita/{berita:slug}', [BeritaController::class, 'show']);

Route::get('/pengumuman', [PengumumanController::class, 'index']);

Route::get('/kontak', [KontakController::class, 'index']);

// Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');

Route::get('/kategori/{kategori:slug}', [KategoriController::class, 'show']);

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/dashboard', function(){return view('dashboard.layouts.main');})->middleware('auth');

// Route::resource('/dashboard/berita',DashboardBeritaController::class);
Route::post('/dashboard/berita/create',[DashboardBeritaController::class, 'store'])->middleware('auth');
Route::get('/dashboard/berita/create',[DashboardBeritaController::class, 'create'])->middleware('auth');
Route::get('/dashboard/berita/{berita:slug}',[DashboardBeritaController::class, 'show'])->middleware('auth');
Route::get('/dashboard/berita',[DashboardBeritaController::class, 'index'])->middleware('auth');
// Route::get('/dashboard/berita/checkSlug', 'DashboardBeritaController@checkSlug');


Route::get('/register',[RegisterController::class, 'create'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store'])->middleware('guest');





