<?php

use App\Models\Berita;
use App\Models\Profil;
use App\Models\Kategori;
use App\Models\Pengurus;
use App\Models\Pengumuman;
use App\Models\Pendaftaran;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DevisiController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\DashboardBeritaController;

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
// Awal Devisi
Route::resource('/dashboard/devisi', DevisiController::class)->middleware('auth')->except('show');
Route::post('/dashboard/devisi/create', [DevisiController::class, 'store'])->middleware('auth');
// Akhir Devisi


Route::get('/', [BerandaController::class, 'index']);

// Pendaftaran Santri
Route::get('/pendaftaran-santri/daftar', [PendaftaranController::class, 'daftar']);
Route::post('/pendaftaran-santri/daftar', [PendaftaranController::class, 'store']);
Route::get('/pendaftaran-santri/detail', [PendaftaranController::class, 'detailUser']);



// Dashboard Pendaftaran Santri
Route::get('/dashboard/pendaftaran-santri', [PendaftaranController::class, 'index'])->middleware('auth');
Route::get('/dashboard/pendaftaran-santri/create', [PendaftaranController::class, 'create'])->middleware('auth');
Route::get('/dashboard/pendaftaran-santri/{pendaftar:id}', [PendaftaranController::class, 'show'])->middleware('auth');
Route::delete('/dashboard/pendaftaran-santri/{pendaftar:id}', [PendaftaranController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/pendaftaran-santri/{pendaftar:id}/edit', [PendaftaranController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/pendaftaran-santri/{pendaftar:id}', [PendaftaranController::class, 'update'])->middleware('auth');
// Akhri Pendaftaran Santri

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{berita:slug}', [BeritaController::class, 'show']);
Route::get('/kontak', [KontakController::class, 'index']);
Route::get('/kategori/{kategori:slug}', [KategoriController::class, 'kategoriShow']);

//Dashboard Kategori
Route::delete('/dashboard/kategori/{id}', [KategoriController::class, 'destroy'])->middleware('auth');
Route::post('/dashboard/kategori/create', [KategoriController::class, 'store'])->middleware('auth');
Route::get('/dashboard/kategori/create', [KategoriController::class, 'create'])->middleware('auth');
Route::get('/dashboard/kategori', [KategoriController::class, 'index'])->middleware('auth');
Route::get('/dashboard/kategori/{kategori:id}', [KategoriController::class, 'show'])->middleware('auth');
Route::put('/dashboard/kategori/{berita:id}', [KategoriController::class, 'update'])->middleware('auth');
Route::get('/dashboard/kategori/{kategori:id}/edit', [kategoriController::class, 'edit'])->middleware('auth');
// Akhir Dashboard Kategori

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index',[
        'berita' => Berita::get('id')->count(),
        'pengurus' => Pengurus::get('id')->count(),
        'pengumuman' => Pengumuman::get('id')->count(),
        'santriDiproses' => Pendaftaran::where('status_id', '1')->count(),
        'santriAktif' => Pendaftaran::where('status_id', '2')->count(),
        'santriNonAktif' => Pendaftaran::where('status_id', '4')->count(),
        'ngalong' => Pendaftaran::where('status_id', '3')->count(),
    ]);
})->middleware('auth');

// Dashboard Berita
Route::delete('/dashboard/berita/{berita:slug}', [DashboardBeritaController::class, 'destroy'])->middleware('auth');
Route::post('/dashboard/berita/create', [DashboardBeritaController::class, 'store'])->middleware('auth');
Route::get('/dashboard/berita/create', [DashboardBeritaController::class, 'create'])->middleware('auth');
Route::get('/dashboard/berita/{berita:slug}', [DashboardBeritaController::class, 'show'])->middleware('auth');
Route::get('/dashboard/berita', [DashboardBeritaController::class, 'index'])->middleware('auth');
Route::get('/dashboard/berita/{berita:slug}/edit', [DashboardBeritaController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/berita/{berita:slug}', [DashboardBeritaController::class, 'update'])->middleware('auth');
// Akhir Dashboard Berita

// Register
// Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
// Akhir Register

// Dashbord Pengurus
Route::post('/dashboard/pengurus',[PengurusController::class,'store'])->middleware('auth');
Route::get('/dashboard/pengurus',[PengurusController::class, 'index'])->middleware('auth');
Route::get('/dashboard/pengurus/create', [PengurusController::class, 'create'])->middleware('auth');
Route::get('/dashboard/pengurus/{pengurus:id}',[PengurusController::class,'show'])->middleware('auth');
Route::get('/dashboard/pengurus/{pengurus:id}/edit',[PengurusController::class,'edit'])->middleware('auth');
Route::put('/dashboard/pengurus/{pengurus:id}',[PengurusController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/pengurus/{pengurus:id}',[PengurusController::class, 'destroy'])->middleware('auth');
// Akhri Dashbord Pengurus

// Sambutan
Route::resource('/dashboard/sambutan', SambutanController::class)->middleware('auth')->except('show','destroy','create','store');
// Akhir Sambutan

// Awal Dashboard Banner
Route::resource('/dashboard/banner', BannerController::class)->middleware('auth')->except('destroy','show','store','create');
// Akhir

// Awal Dashboard Pengumuman
Route::resource('/dashboard/pengumuman', PengumumanController::class)->middleware('auth');
// Akhir

Route::resource('/dashboard/profil', ProfilController::class)->middleware('auth')->except('show');
Route::get('/dashboard/profil/preview', function(){
    return view('dashboard.profil.show',[
        'title' => 'Detail Profil',
        'profil' => Profil::latest()->get()
    ]);
})->middleware('auth');


Route::get('/pengurus', function () {
    return view('pengurus.index', [
        'title' => 'Pengurus Pondok Putra',
        'semuaPengurus' => Pengurus::first()->where('genre','putra')->get()
    ]);
});
Route::get('/pengurus-putri', function () {
    return view('pengurus.index', [
        'title' => 'Pengurus Pondok Putri',
        'semuaPengurus' => Pengurus::first()->where('genre','putri')->get()
    ]);
});

Route::get('/pengumuman', function () {
    return view('pengumuman',[
        "title" => "pengumuman",
        "pengumuman" => Pengumuman::latest()->paginate(2)
    ]);
});

Route::get('/profil', function (){
    return view('profil',[
        "title" => "profil",
        "profil" => Profil::latest()->get()
    ]);
});

Route::get('/dashboar/informasi', function (){
    return view('dashboard.informasiApp.index');
});









// Testing Print PDF
Route::get('/pdf', function(){
    return view('pdf.biayaPendaftaran');
});

Route::get('/pdf/download', function(){
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadView('pdf.biayaPendaftaran');
    // $pdf->loadHTML('ini hanya test');
    return $pdf->stream();
    // $pdf = Pdf::loadView('pdf.biayaPendaftaran');
    // return $pdf->download('invoice.pdf');
});

// Akhir Testing
