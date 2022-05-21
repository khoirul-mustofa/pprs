<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PendaftaranController;

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

Route::get('/pendaftaran', [PendaftaranController::class, 'index']);

// metod get : jika requestnya /berita maka panggil controllerBerita yang methodnya index
Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/author/{user:username}', [BeritaController::class, 'userBerita']);

Route::get('/berita/{berita:slug}', [BeritaController::class, 'show']);

Route::get('/pengumuman', [PengumumanController::class, 'index']);

Route::get('/kontak', [KontakController::class, 'index']);

route::get('/admin', [AdminController::class, 'index']);

Route::get('/kategori/{kategori:slug}', [KategoriController::class, 'show']);

Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/bootstrap', function(){
    return view('startbootstrap-blog-post.dist.index');
});


