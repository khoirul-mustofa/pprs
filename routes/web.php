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
use League\CommonMark\Extension\SmartPunct\DashParser;

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

Route::get('/pendaftaran-santri', [PendaftaranController::class, 'index']);

Route::post('/pendaftaran-santri', [PendaftaranController::class, 'create']);
//
Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/berita/{berita:slug}', [BeritaController::class, 'show']);

Route::get('/pengumuman', [PengumumanController::class, 'index']);

Route::get('/kontak', [KontakController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/kategori/{kategori:slug}', [KategoriController::class, 'show']);

Route::get('/login',[LoginController::class, 'index'])->middleware('guest');

Route::post('/login',[LoginController::class, 'authenticate']);

Route::get('/dashboard', function(){return view('dashboard.index');});

// Route::resource('/dashboard/berita',DashboardBeritaController::class);
Route::get('/dashboard/berita/create',[DashboardBeritaController::class, 'create']);
Route::get('/dashboard/berita/{berita:slug}',[DashboardBeritaController::class, 'show']);
Route::get('/dashboard/berita',[DashboardBeritaController::class, 'index']);

Route::get('/dashboard/berita/checkSlug', 'DashboardBeritaController@checkSlug');


Route::get('/register',[RegisterController::class, 'create']);
Route::post('/register',[RegisterController::class, 'store']);





