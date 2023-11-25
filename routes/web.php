<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\TempatController;
use App\Http\Controllers\AmbilKuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/kursus', [WelcomeController::class, 'kursus']);
Route::get('/pelayanan', [WelcomeController::class, 'pelayanan']);
Route::get('/konsultasi', [WelcomeController::class, 'konsultasi']);
Route::get('/pesan', [WelcomeController::class, 'pesan']);

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

View::composer('layouts.master', function ($view) {
    $loggedInUser = Auth::user();
    $view->with('loggedInUser', $loggedInUser);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [HomeController::class, 'index']);
    Route::resource('/mata_kuliah', MataKuliahController::class);
    Route::resource('/dosen', MuridController::class);
    Route::resource('/ruang', RuangController::class);
    Route::resource('/tempat', TempatController::class);
    Route::resource('/ambil_kuliah', AmbilKuliahController::class);
    Route::resource('/mentor', MentorController::class);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('/user', UserController::class);
    Route::post('/user/{id}', [UserController::class, 'changePassword'])->name('user.changePassword');
    Route::get('/histori_mk', [AuditController::class, 'showAudit'])->name('audit.showAudit');
});

Route::get('/404', function () {
    return view('admin.errors.404');
})->name('custom.404');
