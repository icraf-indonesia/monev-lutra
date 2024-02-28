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
            $indikator = DB::table('monev_indikators')
                    ->join('mnv_iku', 'monev_indikators.id_iku', '=', 'mnv_iku.id')
                    ->join('mnv_ikk', 'monev_indikators.id_ikk', '=', 'mnv_ikk.id')
                    ->join('mnv_terpercaya', 'monev_indikators.id_terpercaya', '=', 'mnv_terpercaya.id')
                    ->join('mnv_landscale', 'monev_indikators.id_landscale', '=', 'mnv_landscale.id')
                    ->join('mnv_sourceup', 'monev_indikators.id_sourceup', '=', 'mnv_sourceup.id')
                    ->join('mnv_kdsd', 'monev_indikators.id_kdsd', '=', 'mnv_kdsd.id')
                    ->join('mnv_intervensi', 'mnv_intervensi.id', '=', 'monev_indikators.id_intervensi')
                    ->join('mnv_strategi', 'mnv_strategi.id', '=', 'mnv_intervensi.id_strategi')
                    ->whereIn('mnv_strategi.id', $checked)
                    ->select('mnv_strategi.strategi','mnv_intervensi.intervensi', 'monev_indikators.indikator', 'monev_indikators.stakeholder1',
                            'mnv_iku.nama_indikator as iku', 'mnv_ikk.nama_indikator as ikk', 'mnv_terpercaya.nama_indikator as terpercaya',
                            'mnv_landscale.nama_indikator as landscale', 'mnv_sourceup.nama_indikator as sourceup', 'mnv_kdsd.nama_indikator as kdsd')
                    ->paginate(10);
        } else {
            $indikator = DB::table('monev_indikators')
                    ->join('mnv_iku', 'monev_indikators.id_iku', '=', 'mnv_iku.id')
                    ->join('mnv_ikk', 'monev_indikators.id_ikk', '=', 'mnv_ikk.id')
                    ->join('mnv_terpercaya', 'monev_indikators.id_terpercaya', '=', 'mnv_terpercaya.id')
                    ->join('mnv_landscale', 'monev_indikators.id_landscale', '=', 'mnv_landscale.id')
                    ->join('mnv_sourceup', 'monev_indikators.id_sourceup', '=', 'mnv_sourceup.id')
                    ->join('mnv_kdsd', 'monev_indikators.id_kdsd', '=', 'mnv_kdsd.id')
                    ->join('mnv_intervensi', 'mnv_intervensi.id', '=', 'monev_indikators.id_intervensi')
                    ->join('mnv_strategi', 'mnv_strategi.id', '=', 'mnv_intervensi.id_strategi')
                    ->select('mnv_strategi.strategi','mnv_intervensi.intervensi', 'monev_indikators.indikator', 'monev_indikators.stakeholder1',
                            'mnv_iku.nama_indikator as iku', 'mnv_ikk.nama_indikator as ikk', 'mnv_terpercaya.nama_indikator as terpercaya',
                            'mnv_landscale.nama_indikator as landscale', 'mnv_sourceup.nama_indikator as sourceup', 'mnv_kdsd.nama_indikator as kdsd')
                    ->paginate(10);
        }


        $strategies = DB::table('monev_strategies')->get();

        return view('pages.indikator', ['strat'=>$strategies, 'tables'=>$indikator]);
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
