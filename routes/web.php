<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\CookieController;

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
Route::get('/pendaftaran-online', [FrontController::class, 'formDaftar']);
Route::get('/ajax-paginate', [FrontController::class, 'ajaxPaginate'])->name('ajax.paginate');

//Admin Side
// Cookie Config
Route::get('/cookie/set', [CookieController::class, 'setCookie']);
Route::get('/cookie/get', [CookieController::class, 'setCookie']);


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

//Kategori Route
Route::get('/artikel/kategori', [KategoriController::class, 'index'])->middleware('auth');
Route::post('/artikel/kategori/create', [KategoriController::class, 'create'])->name('create')->middleware('auth');
Route::put('/artikel/kategori/update/{id}', [KategoriController::class, 'update'])->middleware('auth');
Route::get('/artikel/kategori/destroy/{id}', [KategoriController::class, 'destroy'])->middleware('auth');
