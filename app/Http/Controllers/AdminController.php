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

        $capaian = DB::table('monev_indikators')
                        ->join('monev_capaians', 'monev_indikators.id', '=', 'monev_capaians.id_indikator')
                        ->orderByDesc('monev_capaians.id')
                        ->select('monev_capaians.id', 'monev_indikators.indikator', 'target', 'satuan', 'tahun', 'capaian', 'verified_by', 'status')
                        ->paginate(10);

        $target = DB::table('monev_indikators')
                        ->select('id', 'indikator', 'target', 'satuan', 'dokumen')
                        ->paginate(10);

        $kegiatan = DB::table('monev_kegiatans')
                        ->select('id', 'kegiatan', 'nomenklatur', 'indikator_kegiatan', 'periode', 'target_volume', 'target_anggaran')
                        ->paginate(10);

        $realisasi = DB::table('monev_realisasis')
                        ->join('monev_kegiatans', 'monev_realisasis.id_kegiatan', '=', 'monev_kegiatans.id')
                        ->orderByDesc('monev_realisasis.id')
                        ->select('monev_realisasis.id', 'monev_kegiatans.kegiatan', 'indikator_kegiatan', 'monev_realisasis.periode', 'target_volume', 'target_anggaran', 'realisasi_volume', 'realisasi_anggaran', 'entered_by', 'verified_by', 'status')
                        ->paginate(10);

        return view('admin.index', ['strategi' => $strategi, 'capaian' => $capaian, 'target' => $target, 'kegiatan' => $kegiatan, 'realisasi' => $realisasi]);
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

        MonevIndikator::find($id)->update($validatedData);
        return redirect('/admin')->with('status', 'Berhasil mengubah target');
    }

    public function editKegiatan($id)
    {
        $data = DB::table('monev_indikators')
            ->join('monev_intervensis', 'monev_indikators.id_intervensi', '=', 'monev_intervensis.id')
            ->join('monev_strategies', 'monev_intervensis.id_strategi', '=', 'monev_strategies.id')
            ->where('monev_indikators.id', $id)
            ->select('monev_indikators.id as id', 'monev_indikators.indikator as indikator', 'monev_strategies.strategi as strategi', 'monev_intervensis.intervensi as intervensi' , 'target', 'satuan', 'dokumen')
            ->first();

        // return view('admin.edit', ['data' => MonevIndikator::find($id)]);
        return view('admin.edit_kegiatan', ['data' => $data]);
    }

    public function updateKegiatan(Request $request, $id)
    {
        $rules = [
            'target' => 'required',
            'satuan' => 'required'
        ];

        $validatedData = $request->validate($rules);
        $validatedData['target'] = $request->target;
        $validatedData['satuan'] = $request->satuan;

        MonevIndikator::find($id)->update($validatedData);
        return redirect('/admin')->with('status', 'Berhasil mengubah target');
    }

    public function deleteIndikator($id)
    {
        MonevIndikator::destroy($id);
        return redirect('/admin')->with('status', 'Data berhasil dihapus.');
    }

    public function approveCapaian(Request $request, $id)
    {
        $capaian = MonevCapaian::find($id);
        $capaian->status = $request->status;
        $capaian->verified_by = $request->verified_by;
        $capaian->save();

        return redirect('/admin')->with('status', 'Data capaian telah diapprove');
    }

    public function rejectCapaian(Request $request, $id)
    {
        $capaian = MonevCapaian::find($id);
        $capaian->status = $request->status;
        $capaian->verified_by = $request->verified_by;
        $capaian->save();

        return redirect('/admin')->with('status', 'Data capaian perlu direvisi');
    }
}
