<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PasienController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Client Side
Route::get('/', [FrontController::class, 'index']);
Route::get('/berita/{slug}', [FrontController::class, 'detail_artikel'])->name('detail_artikel');
Route::get('/layanan', [FrontController::class, 'showLayanan'])->name('showLayanan');
Route::get('/pendaftaran-online', [FrontController::class, 'pasienLink']);
Route::get('/pendaftaran-online/pasienbaru', [FrontController::class, 'PasienBaruShow']);
Route::post('/pendaftaran-online/pasienbaru/create', [FrontController::class, 'PasienBaruCreate']);
Route::get('/pendaftaran-online/pasienlama', [FrontController::class, 'PasienLamaShow']);
Route::get('/ajax-paginate', [FrontController::class, 'ajaxPaginate'])->name('ajax.paginate');

//Gallery Section
Route::get('/gallery', [FrontController::class, 'showGallery']);
// Route::get('/gallery/photo', [FrontController::class, 'showPhoto']);
// Route::get('/gallery/video', [FrontController::class, 'showVideo']);

//Admin Side
//Login Authentification
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout');
});

//Dashboard Route
Route::get('/dashboard', [AdminController::class, 'index'])->middleware('auth');

//Artikel Route
Route::get('/artikel', [ArtikelController::class, 'index'])->middleware('auth');
Route::get('/artikel/create', [ArtikelController::class, 'createPage'])->middleware('auth');
Route::get('/artikel/update/{id}', [ArtikelController::class, 'updatePage'])->middleware('auth');
Route::post('/artikel/create/store', [ArtikelController::class, 'store'])->middleware('auth');
Route::put('/artikel/update/edit/{id}', [ArtikelController::class, 'edit'])->middleware('auth');
Route::get('/artikel/destroy/{id}', [ArtikelController::class, 'destroy'])->middleware('auth');

//Pasien Route
Route::get('/pasien', [PasienController::class, 'index'])->middleware('auth');
Route::put('/pasien/update/{id}', [PasienController::class, 'update'])->middleware('auth');
Route::get('/pasien/delete/{id}', [PasienController::class, 'delete'])->middleware('auth');


//Kategori Route
Route::get('/artikel/kategori', [KategoriController::class, 'index'])->middleware('auth');
Route::post('/artikel/kategori/create', [KategoriController::class, 'create'])->name('create')->middleware('auth');
Route::put('/artikel/kategori/update/{id}', [KategoriController::class, 'update'])->middleware('auth');
Route::get('/artikel/kategori/destroy/{id}', [KategoriController::class, 'destroy'])->middleware('auth');

//Data Gallery  Route
//Foto
Route::get('/gallery/foto', [FotoController::class, 'showDataFoto'])->middleware('auth');
Route::post('/gallery/foto/create', [FotoController::class, 'create'])->name('create')->middleware('auth');
Route::put('/gallery/foto/update/{id}', [FotoController::class, 'update'])->middleware('auth');
Route::get('/gallery/foto/delete/{id}', [FotoController::class, 'delete'])->middleware('auth');
//Video
Route::get('/gallery/video', [VideoController::class, 'showDataVideo'])->middleware('auth');
Route::post('/gallery/video/create', [VideoController::class, 'create'])->name('create')->middleware('auth');
Route::put('/gallery/video/update/{id}', [VideoController::class, 'update'])->middleware('auth');
Route::get('/gallery/video/delete/{id}', [VideoController::class, 'delete'])->middleware('auth');
