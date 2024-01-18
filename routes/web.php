<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DasborController;
use App\Http\Controllers\MonevController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontributorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\DB;

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

// Home & Main Page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/isu_strategis', [HomeController::class, 'isustrategi']);
Route::get('/strategi_intervensi', [HomeController::class, 'visi']);

Route::get('/session', [SessionController::class, 'index'])->name('login');
Route::post('/session/login', [SessionController::class, 'login']);

// Kontributor & Admin
Route::group(['middleware' => 'auth'], function(){
    Route::get('/kontributor', [KontributorController::class, 'index'])->name('kontributor');
    Route::get('intervensi/{id}', [KontributorController::class, 'intervensi']);
    Route::get('indikator/{id}', [KontributorController::class, 'indikator']);
    Route::get('satuan/{id}', [KontributorController::class, 'satuan']);
    Route::get('kegiatan/{id_i}/{id_l}', [KontributorController::class, 'kegiatan']);
    Route::get('target/{id}', [KontributorController::class, 'target']);

    Route::get('/kontributor/capaian/tambah', [KontributorController::class, 'tambahCapaian']);
    Route::post('/kontributor/store', [KontributorController::class, 'store']);
    Route::post('/kontributor/store_capaian', [KontributorController::class, 'storeCapaian']);
    Route::get('/kontributor/capaian/{id}', [KontributorController::class, 'revisiCapaian']);
    Route::put('/kontributor/capaian/{id}', [KontributorController::class, 'updateRevisiCapaian']);

    Route::get('/kontributor/realisasi', [KontributorController::class, 'daftarRealisasi']);
    Route::get('/kontributor/realisasi/tambah', [KontributorController::class, 'tambahRealisasi']);
    Route::post('/kontributor/store_realisasi', [KontributorController::class, 'storeRealisasi']);
    Route::get('/kontributor/realisasi/{id}', [KontributorController::class, 'revisiRealisasi']);
    Route::put('/kontributor/realisasi/{id}', [KontributorController::class, 'updateRevisiRealisasi']);

    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/indikator/{id}', [AdminController::class, 'editIndikator']);
    Route::put('/admin/indikator/{id}', [AdminController::class, 'updateIndikator']);
    Route::delete('/admin/indikator/{id}', [AdminController::class, 'deleteIndikator']);
    Route::get('/admin/capaian', [AdminController::class, 'verifikasiCapaian']);
    Route::put('/admin/capaian/verify/{id}', [AdminController::class, 'approveCapaian']);
    Route::put('/admin/capaian/reject/{id}', [AdminController::class, 'rejectCapaian']);

    Route::get('/admin/kegiatan', [AdminController::class, 'daftarKegiatan']);
    Route::get('/admin/kegiatan/{id}', [AdminController::class, 'editKegiatan']);
    Route::put('/admin/kegiatan/{id}/{p}', [AdminController::class, 'updateKegiatan']);
    Route::get('/admin/kegiatan/periode/tambah', [AdminController::class, 'tambahPeriode']);
    Route::post('/admin/kegiatan/store_periode', [AdminController::class, 'storePeriode']);
    Route::delete('/admin/kegiatan/periode/{id}', [AdminController::class, 'deletePeriode']);
    Route::get('/admin/realisasi', [AdminController::class, 'verifikasiRealisasi']);
    Route::put('/admin/realisasi/verify/{id}', [AdminController::class, 'approveRealisasi']);
    Route::put('/admin/realisasi/reject/{id}', [AdminController::class, 'rejectRealisasi']);

    Route::get('/admin/user', [UserController::class, 'index']);

    Route::get('/lahan/tahunan', [DasborController::class, 'lahanTahunan']);
    Route::get('/modal/tahunan', [DasborController::class, 'modalTahunan']);
    Route::get('/produktivitas/tahunan', [DasborController::class, 'produktivitasTahunan']);
    Route::get('/rantainilai/tahunan', [DasborController::class, 'rantaiNilaiTahunan']);
    Route::get('/jasaekosistem/tahunan', [DasborController::class, 'jasaEkosistemTahunan']);

    Route::get('/session/logout', [SessionController::class, 'logout'])->name('logout');
});

# Indikator
Route::get('/indikator', [MonevController::class, 'indikator']);

# Profil Jurisdiksi
Route::get('/capaian/tahunan', [DasborController::class, 'index']);
Route::get('/capaian/multi', [DasborController::class, 'capaianMulti']);
Route::get('/lahan/multi', [DasborController::class, 'lahanMulti']);
Route::get('/modal/multi', [DasborController::class, 'modalMulti']);
Route::get('/produktivitas/multi', [DasborController::class, 'produktivitasMulti']);
Route::get('/rantainilai/multi', [DasborController::class, 'rantaiNilaiMulti']);
Route::get('/jasaekosistem/multi', [DasborController::class, 'jasaEkosistemMulti']);
Route::get('/kelembagaan', [MonevController::class, 'kelembagaan']);

// Route::get('/navbar', [MonevController::class, 'navbar']);
// Route::get('/login', [MonevController::class, 'login']);

Route::get('/maps', [MonevController::class, 'maps']);
// Route::get('/petajalan', [MonevController::class, 'getStrategi']);
// Route::get('/petajalan', [MonevController::class, 'getDetail']);

// Route::get('/slider', [SliderController::class, 'index']);


