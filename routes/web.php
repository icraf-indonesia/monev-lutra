<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

// routes.php
Route::get('/tables', function () {
    $tables = DB::select('SHOW TABLES'); // returns an array of stdObjects
return view('tables', compact('tables'));
});

Route::get('/', [KaryawanController::class, 'about']);
Route::get('/indikator', [KaryawanController::class, 'index']);
Route::get('/gambaran_umum_tahunan', [KaryawanController::class, 'jurisdiction']);
Route::get('/gambaran_umum_multi', [KaryawanController::class, 'umumMulti']);
Route::get('/alokasi_tataguna_lahan_tahunan', [KaryawanController::class, 'alokasiTahunan']);
Route::get('/alokasi_tataguna_lahan_multi', [KaryawanController::class, 'alokasiMulti']);
Route::get('/akses_modal_tahunan', [KaryawanController::class, 'aksesTahunan']);
Route::get('/akses_modal_multi', [KaryawanController::class, 'aksesMulti']);
Route::get('/produktivitas_tahunan', [KaryawanController::class, 'produktivitasTahunan']);
Route::get('/produktivitas_multi', [KaryawanController::class, 'produktivitasMulti']);
Route::get('/rantai_nilai_tahunan', [KaryawanController::class, 'rantaiTahunan']);
Route::get('/rantai_nilai_multi', [KaryawanController::class, 'rantaiMulti']);
Route::get('/jasa_ekosistem_tahunan', [KaryawanController::class, 'jasaTahunan']);
Route::get('/jasa_ekosistem_multi', [KaryawanController::class, 'jasaMulti']);


Route::get('/karyawan/{jenis}', [KaryawanController::class, 'index']);
Route::get('/struktur-organisasi', [OrganisasiController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/pengaturan', [PengaturanController::class, 'index']);

Route::get('/karyawan/data', [KaryawanController::class, 'data']);



