<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

// Route::get('/', function () {
<<<<<<< HEAD
//     return view('welcome');
// });

Route::get('/', [FrontController::class, 'index'])->name('index');
=======
//     return view('client/index');
// });

Route::get('/', [FrontController::class, 'home']); 
Route::get('/Home', [FrontController::class, 'index']);
>>>>>>> 0f09ee5c84d775dba49fdf29b7823a0f6ae82deb
