<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
// use App\Http\Requests;
// use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
// use App\Karyawan #model

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        // $data ['jenis'] = $jenis;
        // $data ['PARENTTAG'] = 'karyawan';
        // $data ['CHILDTAG'] = $jenis;
        $tables = DB::select('SHOW TABLES');
        return view('pages.karyawan',['tables'=>$tables]);
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