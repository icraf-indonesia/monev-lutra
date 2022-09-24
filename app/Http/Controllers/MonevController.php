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
        // $data=ModelsMnv_iku::all() -> ModelsMnv_ikk::all();
        // // return $data_ikk;
        // return view('pages.indikator', compact('data_iku'), compact('data_ikk'));

        // $tables = DB::select('SHOW TABLES');
        $tables=DB::select('SELECT mnv_strategi.strategi, mnv_intervensi.intervensi, mnv_instrumen.indikator_intervensi, mnv_instrumen.pemangku_kepentingan1, 
        mnv_iku.nama_indikator AS iku, 
        mnv_ikk.nama_indikator AS ikk, 
        mnv_terpercaya.nama_indikator AS terpercaya, 
        mnv_landscale.nama_indikator AS landscale, 
        mnv_sourceup.nama_indikator AS sourceup, 
        mnv_kdsd.nama_indikator AS kdsd 
        FROM mnv_instrumen, mnv_iku, mnv_intervensi, mnv_strategi, mnv_ikk, mnv_terpercaya, mnv_landscale, mnv_sourceup, mnv_kdsd  
        WHERE mnv_strategi.id = mnv_intervensi.id_strategi AND mnv_instrumen.id_iku = mnv_iku.id AND mnv_instrumen.id_ikk = mnv_ikk.id AND mnv_instrumen.id_terpercaya = mnv_terpercaya.id AND mnv_instrumen.id_landscale = mnv_landscale.id AND mnv_instrumen.id_sourceup = mnv_sourceup.id AND mnv_instrumen.id_kdsd = mnv_kdsd.id AND mnv_intervensi.id = mnv_instrumen.id_intervensi');
        // return $tables;
        return view('pages.indikator',['tables'=>$tables]);
    }

    public function about(Request $request)
    {
        return view('pages.tentang');
    }

    public function jurisdiction(Request $request)
    {
        return view('pages.juridiksi');
    }

    public function umumMulti(Request $request)
    {
        return view('pages.umumMulti');
    }

    public function alokasiTahunan(Request $request)
    {
        return view('pages.alokasiTahunan');
    }

    public function alokasiMulti(Request $request)
    {
        return view('pages.alokasiMulti');
    }

    public function aksesTahunan(Request $request)
    {
        return view('pages.aksesTahunan');
    }

    public function aksesMulti(Request $request)
    {
        return view('pages.aksesMulti');
    }

    public function produktivitasTahunan(Request $request)
    {
        return view('pages.produktivitasTahunan');
    }

    public function produktivitasMulti(Request $request)
    {
        return view('pages.produktivitasMulti');
    }

    public function rantaiTahunan(Request $request)
    {
        return view('pages.rantaiTahunan');
    }

    public function rantaiMulti(Request $request)
    {
        return view('pages.rantaiMulti');
    }

    public function jasaTahunan(Request $request)
    {
        return view('pages.jasaTahunan');
    }

    public function jasaMulti(Request $request)
    {
        return view('pages.jasaMulti');
    }

    public function data(Request $request)
    {
    	$orderBy = 'karyawan.strategi';
        switch($request->input('order.0.column')){
            case "1":
                $orderBy = 'karyawan.intervensi';
                break;
            case "2":
                $orderBy = 'karyawan.petajalan';
                break;
            case "3":
                $orderBy = 'karyawan.pemangku';
                break;
            case "4":
                $orderBy = 'karyawan.terpercaya';
                break;
            case "5":
                $orderBy = 'organisasi.landscale';
                break;
            case "6":
                $orderBy = 'karyawan.sourceup';
                break;
            case "7":
                $orderBy = 'karyawan.phbmlei';
                break;
            case "8":
                $orderBy = 'karyawan.kdsd';
                break; 
        }           
    }
    // $table = Karyawan::select([ #model
    //     'karyawan.*'
    // ]);
    // $recordsFiltered = $data->get()->count();
    // if($request->input('length')!=-1) $data = $data->skip($request->input('start'))->take($request->input('length'));
    // $data = $data->orderBy($orderBy,$request->input('order.0.dir'))->get();
    // $recordsTotal = $data->count();
    // return response()->json([
    //     'draw'=>$request->input('draw'),
    //     'recordsTotal'=>$recordsTotal,
    //     'recordsFiltered'=>$recordsFiltered,
    //     'data'=>$data
    // ]);
    // }
}