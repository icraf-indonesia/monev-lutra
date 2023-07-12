<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MonevController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontributorController;
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
    Route::post('/kontributor/store', [KontributorController::class, 'store']);

    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::put('/admin/verify/{id}', [AdminController::class, 'approveCapaian']);
    Route::put('/admin/reject/{id}', [AdminController::class, 'rejectCapaian']);
    Route::get('/admin/indikator/{id}', [AdminController::class, 'editIndikator']);
    Route::put('/admin/indikator/{id}', [AdminController::class, 'updateIndikator']);
    Route::delete('/admin/indikator/{id}', [AdminController::class, 'deleteIndikator']);

    Route::get('/session/logout', [SessionController::class, 'logout'])->name('logout');
});

Route::get('/indikator', [MonevController::class, 'indikator']);
Route::post('/indikator', [MonevController::class, 'insertCheckbox']);
// Route::get('/indikator', [MonevController::class, 'getDetail']);
Route::get('/gambaran_umum_tahunan', [MonevController::class, 'jurisdiksi']);
Route::get('/gambaran_umum_multi', [MonevController::class, 'umumMulti']);
Route::get('/alokasi_tataguna_lahan_tahunan', [MonevController::class, 'alokasiTahunan']);
Route::get('/alokasi_tataguna_lahan_multi', [MonevController::class, 'alokasiMulti']);
Route::get('/akses_modal_tahunan', [MonevController::class, 'aksesTahunan']);
Route::get('/akses_modal_multi', [MonevController::class, 'aksesMulti']);
Route::get('/produktivitas_tahunan', [MonevController::class, 'produktivitasTahunan']);
Route::get('/produktivitas_multi', [MonevController::class, 'produktivitasMulti']);
Route::get('/rantai_nilai_tahunan', [MonevController::class, 'rantaiTahunan']);
Route::get('/rantai_nilai_multi', [MonevController::class, 'rantaiMulti']);
Route::get('/jasa_ekosistem_tahunan', [MonevController::class, 'jasaTahunan']);
Route::get('/jasa_ekosistem_multi', [MonevController::class, 'jasaMulti']);
Route::get('/kelembagaan', [MonevController::class, 'kelembagaan']);

// Route::get('/navbar', [MonevController::class, 'navbar']);
// Route::get('/login', [MonevController::class, 'login']);

Route::get('/maps', [MonevController::class, 'maps']);
// Route::get('/petajalan', [MonevController::class, 'getStrategi']);
// Route::get('/petajalan', [MonevController::class, 'getDetail']);

// Route::get('/slider', [SliderController::class, 'index']);


