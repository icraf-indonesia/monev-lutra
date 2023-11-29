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
        if($request->strategi){
            $checked = $_GET['strategi'];
            $indikator = DB::table('mnv_instrumen')
                    ->join('mnv_iku', 'mnv_instrumen.id_iku', '=', 'mnv_iku.id')
                    ->join('mnv_ikk', 'mnv_instrumen.id_ikk', '=', 'mnv_ikk.id')
                    ->join('mnv_terpercaya', 'mnv_instrumen.id_terpercaya', '=', 'mnv_terpercaya.id')
                    ->join('mnv_landscale', 'mnv_instrumen.id_landscale', '=', 'mnv_landscale.id')
                    ->join('mnv_sourceup', 'mnv_instrumen.id_sourceup', '=', 'mnv_sourceup.id')
                    ->join('mnv_kdsd', 'mnv_instrumen.id_kdsd', '=', 'mnv_kdsd.id')
                    ->join('mnv_intervensi', 'mnv_intervensi.id', '=', 'mnv_instrumen.id_intervensi')
                    ->join('mnv_strategi', 'mnv_strategi.id', '=', 'mnv_intervensi.id_strategi')
                    ->whereIn('mnv_strategi.id', $checked)
                    ->select('mnv_strategi.strategi','mnv_intervensi.intervensi', 'mnv_instrumen.indikator_intervensi', 'mnv_instrumen.pemangku_kepentingan1',
                            'mnv_iku.nama_indikator as iku', 'mnv_ikk.nama_indikator as ikk', 'mnv_terpercaya.nama_indikator as terpercaya',
                            'mnv_landscale.nama_indikator as landscale', 'mnv_sourceup.nama_indikator as sourceup', 'mnv_kdsd.nama_indikator as kdsd')
                    ->paginate(15);
        } else {
            $indikator = DB::table('mnv_instrumen')
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
                    ->paginate(15);
        }


        $strategies = DB::table('monev_strategies')->get();

        return view('pages.indikator', ['strat'=>$strategies, 'tables'=>$indikator]);
    }

    public function tentang(Request $request)
    {
        return view('pages.beranda');
    }

    public function slider(Request $request)
    {
        return view('pages.slider');
    }

    public function navbar(Request $request)
    {
        return view('navbar');
    }

    public function maps(Request $request)
    {
        return view('maps');
    }

}
