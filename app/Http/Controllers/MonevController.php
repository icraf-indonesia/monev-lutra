<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
// use App\Http\Requests;
// use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class MonevController extends Controller
{
    public function index(Request $request)
    {
        return view('session.login');
    }

    public function indikator(Request $request)
    {
        $tables=DB::table('mnv_instrumen')
            ->join('mnv_iku', 'mnv_instrumen.id_iku', '=', 'mnv_iku.id')
            ->join('mnv_ikk', 'mnv_instrumen.id_ikk', '=', 'mnv_ikk.id')
            ->join('mnv_terpercaya', 'mnv_instrumen.id_terpercaya', '=', 'mnv_terpercaya.id')
            ->join('mnv_landscale', 'mnv_instrumen.id_landscale', '=', 'mnv_landscale.id')
            ->join('mnv_sourceup', 'mnv_instrumen.id_sourceup', '=', 'mnv_sourceup.id')
            ->join('mnv_kdsd', 'mnv_instrumen.id_kdsd', '=', 'mnv_kdsd.id')
            ->join('mnv_intervensi', 'mnv_intervensi.id', '=', 'mnv_instrumen.id_intervensi')
            ->join('mnv_strategi', 'mnv_strategi.id', '=', 'mnv_intervensi.id_strategi')
            ->select('mnv_strategi.strategi','mnv_intervensi.intervensi', 'mnv_instrumen.indikator_intervensi', 'mnv_instrumen.pemangku_kepentingan1',
                    'mnv_iku.nama_indikator as iku', 'mnv_ikk.nama_indikator as ikk', 'mnv_terpercaya.nama_indikator as terpercaya',
                    'mnv_landscale.nama_indikator as landscale', 'mnv_sourceup.nama_indikator as sourceup', 'mnv_kdsd.nama_indikator as kdsd')
            ->paginate(5);

        // $strategi=DB::select('SELECT DISTINCT  mnv_strategi.strategi FROM mnv_strategi');
        $strategi=DB::table('mnv_strategi')->get();

        // return $tables;
        return view('pages.03_indikator', ['tables'=>$tables, 'strategi'=>$strategi]);
    }

    public function insertCheckbox(Request $request)
    {
        dd($request->all());
    }

    public function tentang(Request $request)
    {
        return view('pages.01_tentang');
    }

    public function slider(Request $request)
    {
        return view('pages.slider');
    }

    public function navbar(Request $request)
    {
        return view('navbar');
    }


    public function petajalan(Request $request)
    {
        return view('pages.02_petajalan');
    }

    public function isu(Request $request)
    {
        return view('pages.02_isu');
    }

    public function tentangRoadmap(Request $request)
    {
        return view('pages.02_aboutroadmap');
    }

    public function pendekatan(Request $request)
    {
        return view('pages.02_pendekatan');
    }

    public function jurisdiksi(Request $request)
    {
        // $tables_jurisdiction=DB::select('SELECT mnv_strategi.strategi, mnv_intervensi.intervensi
        // FROM mnv_intervensi, mnv_strategi
        // WHERE mnv_strategi.id = mnv_intervensi.id_strategi');
        $tables_jurisdiction=DB::table('mnv_strategi')
        ->join('mnv_intervensi','intervensi', '=', 'mnv_intervensi.intervensi')
        ->select('strategi')
        ->get();

        // $aspek=DB::select('SELECT DISTINCT  mnv_strategi.strategi FROM mnv_strategi');
        $aspek=DB::table('mnv_strategi')
        ->select('strategi');

        // return $tables_jurisdiction;
        return view('pages.04_juridiksi',['tables_jurisdiction'=>$tables_jurisdiction, 'aspek'=>$aspek]);
    }

    public function umumMulti(Request $request)
    {
        return view('pages.04_umumMulti');
    }

    public function alokasiTahunan(Request $request)
    {
        // $tables_alokasitahun=DB::select('SELECT mnv_instrumen.indikator_intervensi, mnv_instrumen.pemangku_kepentingan1,
        // mnv_instrumen.target, mnv_instrumen.satuan, mnv_instrumen.tahun1, mnv_instrumen.tahun2, mnv_instrumen.tahun3, mnv_instrumen.tahun4, mnv_instrumen.tahun5, mnv_instrumen.tahun6
        // FROM mnv_instrumen');

        $tables_alokasitahun=DB::table('mnv_instrumen')
        ->select('indikator_intervensi','pemangku_kepentingan1', 'target', 'satuan','tahun1','tahun2','tahun3','tahun4','tahun5','tahun6')
        ->paginate(15);

        // return $tables_alokasitahun;
        return view('pages.04_alokasiTahunan',['tables_alokasitahun'=>$tables_alokasitahun]);
    }

    public function alokasiMulti(Request $request)
    {
        $initialMarkers = [
            [
                'position' => [
                    'lat' => 28.625485,
                    'lng' => 79.821091
                ],
                'draggable' => true
            ],
            [
                'position' => [
                    'lat' => 28.625293,
                    'lng' => 79.817926
                ],
                'draggable' => false
            ],
            [
                'position' => [
                    'lat' => 28.625182,
                    'lng' => 79.81464
                ],
                'draggable' => true
            ]
        ];

        $intervensi=DB::select('SELECT DISTINCT  mnv_intervensi.intervensi FROM mnv_intervensi WHERE mnv_intervensi.id_strategi=1');
        return view('pages.04_alokasiMulti',['intervensi'=>$intervensi], compact('initialMarkers'));
    }

    public function aksesTahunan(Request $request)
    {
        return view('pages.04_aksesTahunan');
    }

    public function aksesMulti(Request $request)
    {
        $intervensi2=DB::select('SELECT DISTINCT  mnv_intervensi.intervensi FROM mnv_intervensi WHERE mnv_intervensi.id_strategi=2');
        return view('pages.04_aksesMulti',['intervensi2'=>$intervensi2]);
    }

    public function produktivitasTahunan(Request $request)
    {
        return view('pages.04_produktivitasTahunan');
    }

    public function produktivitasMulti(Request $request)
    {
        $intervensi3=DB::select('SELECT DISTINCT  mnv_intervensi.intervensi FROM mnv_intervensi WHERE mnv_intervensi.id_strategi=3');
        return view('pages.04_produktivitasMulti',['intervensi3'=>$intervensi3]);
    }

    public function rantaiTahunan(Request $request)
    {
        return view('pages.04_rantaiTahunan');
    }

    public function rantaiMulti(Request $request)
    {
        $intervensi4=DB::select('SELECT DISTINCT  mnv_intervensi.intervensi FROM mnv_intervensi WHERE mnv_intervensi.id_strategi=4');
        return view('pages.04_rantaiMulti',['intervensi4'=>$intervensi4]);
    }

    public function jasaTahunan(Request $request)
    {
        return view('pages.04_jasaTahunan');
    }

    public function jasaMulti(Request $request)
    {
        $intervensi5=DB::select('SELECT DISTINCT  mnv_intervensi.intervensi FROM mnv_intervensi WHERE mnv_intervensi.id_strategi=5');
        return view('pages.04_jasaMulti',['intervensi5'=>$intervensi5]);
    }

    public function kelembagaan(Request $request)
    {
        return view('pages.05_kelembagaan');
    }

    public function kontributor(Request $request)
    {
        $strategi = DB::table('monev_strategies')->get();
        // $strategi = DB::table('monev_strategies')->get();
        // $strategi = DB::table('monev_strategies')->get();
        return view('kontributor', ['strategi'=>$strategi]);
    }

    public function admin(Request $request)
    {
        return view('admin');
    }

    public function maps(Request $request)
    {
        return view('maps');
    }

}
