<?php

use App\Http\Controllers\MonevController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SessionController;
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

Route::get('/', [MonevController::class, 'tentang']);
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
Route::get('/petajalan', [MonevController::class, 'petajalan']);
Route::get('/pendekatan', [MonevController::class, 'pendekatan']);
Route::get('/isu', [MonevController::class, 'isu']);
Route::get('/aboutroadmap', [MonevController::class, 'tentangRoadmap']);
Route::get('/navbar', [MonevController::class, 'navbar']);
// Route::get('/login', [MonevController::class, 'login']);
Route::get('/kontributor', [MonevController::class, 'kontributor']);
Route::get('/admin', [MonevController::class, 'admin']);
Route::get('/maps', [MonevController::class, 'maps']);
// Route::get('/petajalan', [MonevController::class, 'getStrategi']);
// Route::get('/petajalan', [MonevController::class, 'getDetail']);

Route::get('/session', [SessionController::class, 'index']);
Route::post('/session/login', [SessionController::class, 'login']);
Route::get('/session/logout', [SessionController::class, 'logout']);

Route::get('/slider', [SliderController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
