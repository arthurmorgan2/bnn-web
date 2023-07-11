<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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
Route::get('/pendaftaran-online', [FrontController::class, 'formDaftar']);

//Admin Side
//Login Authentification
Route::get('/login', [LoginController::class, 'index']);

//Dashboard Route
Route::get('/dashboard', [AdminController::class, 'index']);
