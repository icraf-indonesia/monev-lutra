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
    Route::post('/kontributor/store', [KontributorController::class, 'store']);
    Route::post('/kontributor/store_kegiatan', [KontributorController::class, 'storeKegiatan']);
    Route::post('/kontributor/store_capaian', [KontributorController::class, 'storeCapaian']);

    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::put('/admin/verify/{id}', [AdminController::class, 'approveCapaian']);
    Route::put('/admin/reject/{id}', [AdminController::class, 'rejectCapaian']);
    Route::get('/admin/indikator/{id}', [AdminController::class, 'editIndikator']);
    Route::put('/admin/indikator/{id}', [AdminController::class, 'updateIndikator']);
    Route::delete('/admin/indikator/{id}', [AdminController::class, 'deleteIndikator']);

    Route::get('/admin/kegiatan/{id}', [AdminController::class, 'editKegiatan']);
    Route::put('/admin/kegiatan/{id}', [AdminController::class, 'updateKegiatan']);

    Route::get('/admin/user', [UserController::class, 'index']);

    Route::get('/session/logout', [SessionController::class, 'logout'])->name('logout');
});

# Indikator
Route::get('/indikator', [MonevController::class, 'indikator']);

# Profil Jurisdiksi
Route::get('/capaian/tahunan', [DasborController::class, 'index']);
Route::get('/capaian/multi', [DasborController::class, 'capaianMulti']);
Route::get('/lahan/tahunan', [DasborController::class, 'lahanTahunan']);
Route::get('/lahan/multi', [DasborController::class, 'lahanMulti']);
Route::get('/modal/tahunan', [DasborController::class, 'modalTahunan']);
Route::get('/modal/multi', [DasborController::class, 'modalMulti']);
Route::get('/produktivitas/tahunan', [DasborController::class, 'produktivitasTahunan']);
Route::get('/produktivitas/multi', [DasborController::class, 'produktivitasMulti']);
Route::get('/rantainilai/tahunan', [DasborController::class, 'rantaiNilaiTahunan']);
Route::get('/rantainilai/multi', [DasborController::class, 'rantaiNilaiMulti']);
Route::get('/jasaekosistem/tahunan', [DasborController::class, 'jasaEkosistemTahunan']);
Route::get('/jasaekosistem/multi', [DasborController::class, 'jasaEkosistemMulti']);

Route::get('/kelembagaan', [MonevController::class, 'kelembagaan']);

// Route::get('/navbar', [MonevController::class, 'navbar']);
// Route::get('/login', [MonevController::class, 'login']);

Route::get('/maps', [MonevController::class, 'maps']);
// Route::get('/petajalan', [MonevController::class, 'getStrategi']);
// Route::get('/petajalan', [MonevController::class, 'getDetail']);

// Route::get('/slider', [SliderController::class, 'index']);


