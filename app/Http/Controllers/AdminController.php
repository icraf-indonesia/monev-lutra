<?php

namespace App\Http\Controllers;

use App\Models\MonevCapaian;
use App\Models\MonevIndikator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $strategi = DB::table('monev_strategies')->get();

        $tables = DB::table('monev_indikators')
                        ->join('monev_capaians', 'monev_indikators.id', '=', 'monev_capaians.id_indikator')
                        ->select('monev_capaians.id', 'monev_indikators.indikator', 'target', 'satuan', 'tahun', 'capaian', 'verified_by', 'status')
                        ->paginate(10);

        $target = DB::table('monev_indikators')
                        ->select('id', 'indikator', 'target', 'satuan', 'dokumen')
                        ->paginate(10);

        return view('admin.index', ['strategi'=>$strategi, 'tables'=>$tables, 'target'=>$target]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function editIndikator($id)
    {
        $data = DB::table('monev_indikators')
            ->join('monev_intervensis', 'monev_indikators.id_intervensi', '=', 'monev_intervensis.id')
            ->join('monev_strategies', 'monev_intervensis.id_strategi', '=', 'monev_strategies.id')
            ->where('monev_indikators.id', $id)
            ->select('monev_indikators.id as id', 'monev_indikators.indikator as indikator', 'monev_strategies.strategi as strategi', 'monev_intervensis.intervensi as intervensi' , 'target', 'satuan', 'dokumen')
            ->first();

        // return view('admin.edit', ['data' => MonevIndikator::find($id)]);
        return view('admin.edit', ['data' => $data]);
    }

    public function updateIndikator(Request $request, $id)
    {
        $rules = [
            'target' => 'required',
            'satuan' => 'required'
        ];

        $validatedData = $request->validate($rules);
        $validatedData['target'] = $request->target;
        $validatedData['satuan'] = $request->satuan;

        $dok = $request->dokumen;
        if($dok){
            $nama_file = time()."_".$dok->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'dokumen';
            $dok->move($tujuan_upload, $nama_file);
        }
        $validatedData['dokumen'] = $nama_file;

        MonevIndikator::find($id)->update($validatedData);
        return redirect('/admin')->with('status', 'Berhasil mengubah target');

    }

    public function deleteIndikator($id)
    {
        MonevIndikator::destroy($id);

        return redirect('/admin')->with('status', 'Data berhasil dihapus.');
    }

    public function verification(Request $request)
    {
        $capaian = MonevCapaian::find($request->id);
        $capaian->status = $request->verified;
        $capaian->verified_by = $request->verified_by;
        $capaian->save();

        return response()->json(['success' => 'Verifikasi sudah terganti']);
    }
}
