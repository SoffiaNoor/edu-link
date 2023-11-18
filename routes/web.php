<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ThankYouController;

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

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/about_us', [WelcomeController::class, 'about_us']);
Route::get('/portofolio', [WelcomeController::class, 'portofolio']);
Route::get('/testimoni', [WelcomeController::class, 'testimoni']);
Route::get('/kontak', [KontakController::class, 'index']);
Route::get('/thank_you',[ThankYouController::class,'show']);
Route::post('/thank_you', [KontakController::class, 'store'])->name('kontak.store');
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{id}', [BeritaController::class, 'detail_berita']);
