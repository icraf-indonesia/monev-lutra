<?php

use App\Http\Controllers\MonevController;
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

Route::get('/', [MonevController::class, 'about']);
Route::get('/indikator', [MonevController::class, 'index']);
Route::get('/gambaran_umum_tahunan', [MonevController::class, 'jurisdiction']);
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


// Route::get('/karyawan/{jenis}', [KaryawanController::class, 'index']);
// Route::get('/struktur-organisasi', [OrganisasiController::class, 'index']);
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/pengaturan', [PengaturanController::class, 'index']);
// Route::get('/karyawan/data', [KaryawanController::class, 'data']);



