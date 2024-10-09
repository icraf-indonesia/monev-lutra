<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DasborController;
use App\Http\Controllers\MonevController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontributorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
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
Route::get('/artikel', [ArticleController::class, 'show']);
Route::get('/artikel/{id}', [ArticleController::class, 'detailArticle']);

Route::get('/session', [SessionController::class, 'index'])->name('login');
Route::post('/session/login', [SessionController::class, 'login']);

// Kontributor & Admin
Route::group(['middleware' => 'auth'], function(){
    Route::get('/kontributor', [KontributorController::class, 'index'])->name('kontributor');
    Route::get('intervensi/{id}', [KontributorController::class, 'intervensi']);
    Route::get('intervensi/capaian/{id}', [KontributorController::class, 'intervensiCapaian']);
    Route::get('indikator/{id}', [KontributorController::class, 'indikator']);
    Route::get('satuan/{id}', [KontributorController::class, 'satuan']);
    Route::get('kegiatan/{id_i}/{id_l}', [KontributorController::class, 'kegiatan']);
    Route::get('target/{id}', [KontributorController::class, 'target']);

    Route::get('/kontributor/capaian/tambah', [KontributorController::class, 'tambahCapaian']);
    Route::post('/kontributor/store', [KontributorController::class, 'store']);
    Route::post('/kontributor/store_capaian', [KontributorController::class, 'storeCapaian']);
    Route::get('/kontributor/capaian/{id}', [KontributorController::class, 'revisiCapaian']);
    Route::put('/kontributor/capaian/{id}', [KontributorController::class, 'updateRevisiCapaian']);
    Route::get('/kontributor/export', [KontributorController::class, 'daftarInputCapaianExport']);

    Route::get('/kontributor/realisasi', [KontributorController::class, 'daftarRealisasi']);
    Route::get('/kontributor/realisasi/tambah', [KontributorController::class, 'tambahRealisasi']);
    Route::post('/kontributor/store_realisasi', [KontributorController::class, 'storeRealisasi']);
    Route::get('/kontributor/realisasi/{id}', [KontributorController::class, 'revisiRealisasi']);
    Route::put('/kontributor/realisasi/{id}', [KontributorController::class, 'updateRevisiRealisasi']);
    Route::get('/kontributor/export', [KontributorController::class, 'daftarRealisasiKegiatanExport']);

    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/indikator/{id}', [AdminController::class, 'editIndikator']);
    Route::put('/admin/indikator/{id}', [AdminController::class, 'updateIndikator']);
    Route::delete('/admin/indikator/{id}', [AdminController::class, 'deleteIndikator']);
    Route::get('/admin/capaian', [AdminController::class, 'verifikasiCapaian']);
    Route::put('/admin/capaian/verify/{id}', [AdminController::class, 'approveCapaian']);
    Route::put('/admin/capaian/reject/{id}', [AdminController::class, 'rejectCapaian']);

    Route::get('/admin/kegiatan', [AdminController::class, 'daftarKegiatan']);
    Route::get('/admin/kegiatan/cari', [AdminController::class, 'cariKegiatan']);
    Route::get('/admin/kegiatan/{id}', [AdminController::class, 'editKegiatan']);
    Route::put('/admin/kegiatan/{id}/{p}', [AdminController::class, 'updateKegiatan']);
    Route::get('/admin/kegiatan/periode/tambah', [AdminController::class, 'tambahPeriode']);
    Route::post('/admin/kegiatan/store_periode', [AdminController::class, 'storePeriode']);
    Route::delete('/admin/kegiatan/periode/{id}', [AdminController::class, 'deletePeriode']);
    Route::get('/admin/realisasi', [AdminController::class, 'verifikasiRealisasi']);
    Route::put('/admin/realisasi/verify/{id}', [AdminController::class, 'approveRealisasi']);
    Route::put('/admin/realisasi/reject/{id}', [AdminController::class, 'rejectRealisasi']);

    Route::get('/admin/user', [UserController::class, 'index']);
    Route::get('/admin/user/tambah', [UserController::class, 'tambahUser']);
    Route::post('/admin/user/store', [UserController::class, 'storeUser']);
    Route::delete('/admin/user/{id}', [UserController::class, 'deleteUser']);

    Route::get('/admin/artikel', [ArticleController::class, 'index']);
    Route::get('/admin/artikel/tambah', [ArticleController::class, 'tambahArtikel']);
    Route::post('/admin/artikel/store', [ArticleController::class, 'storeArtikel']);
    Route::delete('/admin/artikel/{id}', [ArticleController::class, 'deleteArticle']);
    Route::get('/admin/artikel/{id}', [ArticleController::class, 'editArticle']);
    Route::put('/admin/artikel/{id}', [ArticleController::class, 'updateArticle']);

    Route::get('/admin/lahan', [AdminController::class, 'daftarAlokasiLahan']);
    Route::post('/admin/lahan/store_tahun', [AdminController::class, 'storeTahun']);
    Route::delete('/admin/lahan/{year}', [AdminController::class, 'deleteTahun']);
    Route::get('/admin/agroforestri/kakao', [AdminController::class, 'luasAgroforestriKakao']);
    Route::get('/admin/agroforestri/kakao/{id}', [AdminController::class, 'editLuasAgroforestriKakao']);
    Route::put('/admin/agroforestri/kakao/{id}/{year}', [AdminController::class, 'updateLuasAgroforestriKakao']);
    Route::get('/admin/agroforestri/kakao/tambah/{year}', [AdminController::class, 'tambahKecamatanPemekaran']);
    Route::post('/admin/agroforestri/kakao/store_kecamatan', [AdminController::class, 'storeKecamatanPemekaran']);

    Route::get('/admin/alokasi/kakao', [AdminController::class, 'luasAlokasiLahanKakao']);
    Route::get('/admin/alokasi/kakao/{id}', [AdminController::class, 'editAlokasiLahanKakao']);
    Route::put('/admin/alokasi/kakao/{id}/{year}', [AdminController::class, 'updateLuasAlokasiLahanKakao']);
    Route::get('/admin/alokasi/kakao/tambah/{year}', [AdminController::class, 'tambahKecamatanPemekaranKakao']);
    Route::post('/admin/alokasi/kakao/store_kecamatan', [AdminController::class, 'storeKecamatanPemekaranKakao']);

    Route::get('/admin/kawasan/hutan', [AdminController::class, 'luasKawasanHutan']);
    Route::get('/admin/kawasan/hutan/{id}', [AdminController::class, 'editKawasanHutan']);
    Route::put('/admin/kawasan/hutan/{id}/{year}', [AdminController::class, 'updateLuasKawasanHutan']);
    Route::get('/admin/kawasan/hutan/tambah/{year}', [AdminController::class, 'tambahKecamatanPemekaranHutan']);
    Route::post('/admin/kawasan/hutan/store_kecamatan', [AdminController::class, 'storeKecamatanPemekaranHutan']);

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
Route::get('/capaian/tahunan/{id}/indikator', [DasborController::class, 'capaianIndikatorMakroMultitahun']);
Route::get('/capaian/tahunan/strategi', [DasborController::class, 'capaianStrategi']);
Route::get('/capaian/tahunan/strategi/{tahun}/{id}/intervensi', [DasborController::class, 'capaianIntervensi']);
Route::get('/capaian/multi', [DasborController::class, 'capaianMulti']);
Route::get('/lahan/multi', [DasborController::class, 'lahanMulti']);
Route::get('/modal/multi', [DasborController::class, 'modalMulti']);
Route::get('/produktivitas/multi', [DasborController::class, 'produktivitasMulti']);
Route::get('/rantainilai/multi', [DasborController::class, 'rantaiNilaiMulti']);
Route::get('/jasaekosistem/multi', [DasborController::class, 'jasaEkosistemMulti']);

#Unduh
Route::get('/unduh', [HomeController::class, 'unduh']);

Route::get('/maps', [MonevController::class, 'maps']);

