<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PesanKonsulController;
use App\Http\Controllers\PesanKursusController;
use App\Http\Controllers\MataPelajaranController;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/kursus', [WelcomeController::class, 'kursus']);
Route::get('/detail_mapel/{id}', [WelcomeController::class, 'detail'])->name('detail_mapel');
Route::get('/pelayanan', [WelcomeController::class, 'pelayanan']);
Route::get('/konsultasi', [WelcomeController::class, 'konsultasi']);
Route::get('/pesan', [PesanKursusController::class, 'pesan']);

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

// View::composer('layouts.header_footer', function ($view) {
//     $muridData = Auth::user()->murid;
//     $view->with('$muridData', $muridData);
// });


Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('/admin', [HomeController::class, 'index']);
    Route::resource('/mata_pelajaran', MataPelajaranController::class);
    Route::resource('/murid', MuridController::class);
    Route::resource('/pesan_kursus', PesanKursusController::class);
    Route::resource('/mentor', MentorController::class);
    Route::resource('/pesan_konsul', PesanKonsulController::class);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('/user', UserController::class);
    Route::post('/user/{id}', [UserController::class, 'changePassword'])->name('user.changePassword');

});

Route::middleware(['auth', 'role:murid'])->group(function () {
    Route::get('/dashboard_murid', [MuridController::class, 'showForm'])->name('murid.dashboard');
    Route::post('/dashboard_murid', [MuridController::class, 'store'])->name('murid_ngeseng.store');
    Route::get('/akses_matapelajaran_murid', [MuridController::class, 'mataPelajaran']);

    //Transaksi Kursus
    Route::get('/pesan/get-bidang/', [PesanKursusController::class, 'fetchMapelOptions']);
    Route::get('/pesan/get-mentor/', [PesanKursusController::class, 'fetchMentorOptions']);
    Route::get('/pesan/get-harga/', [PesanKursusController::class, 'fetchHarga']);
    Route::post('/simpan-pesan-kursus', [PesanKursusController::class, 'savePesanKursus'])->name('save.pesan.kursus');
    Route::get('/pesankursus', [PesanKursusController::class, 'pesanKursus']);
    Route::get('/bayar_kursus', [PesanKursusController::class, 'bayarKursus'])->name('bayar.kursus');
    Route::post('/bayar_kursus', [PesanKursusController::class, 'buktiBayarKursus'])->name('buktiBayarKursus');
    Route::get('/pesankonsul', [PesanKursusController::class, 'pesanKonsul']);
    Route::post('/save-bukti-pembayaran', [PesanKursusController::class, 'saveBuktiPembayaran'])->name('save.bukti.pembayaran');
});


Route::middleware(['auth', 'role:mentor'])->group(function () {
    Route::get('/dashboard', [MentorController::class, 'dashboard']);
    Route::get('/akses_matapelajaran_mentor', [MentorController::class, 'mataPelajaran']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/404', function () {
    return view('admin.errors.404');
})->name('custom.404');
