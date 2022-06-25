<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\RegisterController;
use App\Models\Pendaftaran;

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


Route::get('/pendaftaran-santri/daftar',[PendaftaranController::class, 'daftar']);
Route::post('/pendaftaran-santri/daftar',[PendaftaranController::class, 'store']);
Route::get('/pendaftaran-santri/detail',[PendaftaranController::class, 'detailUser']);
Route::get('/dashboard/pendaftaran-santri',[PendaftaranController::class, 'index'])->middleware('auth');
Route::get('/dashboard/pendaftaran-santri/create',[PendaftaranController::class, 'create'])->middleware('auth');
Route::get('/dashboard/pendaftaran-santri/{pendaftar:id}',[PendaftaranController::class, 'show'])->middleware('auth');
Route::delete('/dashboard/pendaftaran-santri/{pendaftar:id}',[PendaftaranController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/pendaftaran-santri/{pendaftar:id}/edit',[PendaftaranController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/pendaftaran-santri/{pendaftar:id}',[PendaftaranController::class, 'update'])->middleware('auth');


Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/berita/{berita:slug}', [BeritaController::class, 'show']);

Route::get('/pengumuman', [PengumumanController::class, 'index']);

Route::get('/kontak', [KontakController::class, 'index']);

Route::get('/kategori/{kategori:slug}', [KategoriController::class, 'show']);

Route::get('/login',[LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login',[LoginController::class, 'authenticate'])->middleware('guest');

Route::get('/logout',[LoginController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', function(){return view('dashboard.index');})->middleware('auth');

Route::delete('/dashboard/berita/{berita:slug}',[DashboardBeritaController::class, 'destroy'])->middleware('auth');
Route::post('/dashboard/berita/create',[DashboardBeritaController::class, 'store'])->middleware('auth');
Route::get('/dashboard/berita/create',[DashboardBeritaController::class, 'create'])->middleware('auth');
Route::get('/dashboard/berita/{berita:slug}',[DashboardBeritaController::class, 'show'])->middleware('auth');
Route::get('/dashboard/berita',[DashboardBeritaController::class, 'index'])->middleware('auth');
Route::get('/dashboard/berita/{berita:slug}/edit',[DashboardBeritaController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/berita/{berita:slug}',[DashboardBeritaController::class, 'update'])->middleware('auth');

Route::get('/register',[RegisterController::class, 'create'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store'])->middleware('guest');

Route::get('/pprs/pengurus',[PengurusController::class, 'index']);

// ini ditambahkan dari github web



