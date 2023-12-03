<?php

namespace App\Http\Controllers;

use App\Models\MonevCapaian;
use App\Models\MonevIndikator;
use App\Models\MonevRealisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KontributorController extends Controller
{
    public function index()
    {
        $id_stakeholder = Auth::user()->getStakeholderId();

        $strategi =  DB::table('stakeholders')
                        ->leftJoin('indikator_stakeholder', 'indikator_stakeholder.id_stakeholder', '=', 'stakeholders.id')
                        ->leftJoin('monev_indikators', 'monev_indikators.id', '=', 'indikator_stakeholder.id_indikator')
                        ->leftJoin('monev_intervensis', 'monev_indikators.id_intervensi', '=', 'monev_intervensis.id')
                        ->leftJoin('monev_strategies', 'monev_strategies.id', '=', 'monev_intervensis.id_strategi')
                        ->where('indikator_stakeholder.id_stakeholder', $id_stakeholder)
                        ->whereNotNull('strategi')
                        ->select('strategi','monev_strategies.id as id')
                        ->get()->unique('strategi');

        $indikator =  DB::table('stakeholders')
                        ->leftJoin('indikator_stakeholder', 'indikator_stakeholder.id_stakeholder', '=', 'stakeholders.id')
                        ->leftJoin('monev_indikators', 'monev_indikators.id', '=', 'indikator_stakeholder.id_indikator') # have to check this line
                        ->leftJoin('monev_capaians', 'monev_indikators.id', '=', 'monev_capaians.id_indikator')
                        ->where('indikator_stakeholder.id_stakeholder', $id_stakeholder)
                        ->orderByDesc('monev_indikators.id')
                        ->select('monev_indikators.id', 'monev_indikators.indikator', 'target', 'satuan', 'tahun', 'capaian', 'monev_capaians.dokumen', 'status')
                        ->paginate(10);

        $lembaga = DB::table('lembaga')->get();

        return view('kontributor.index', ['strategi' => $strategi, 'tables' => $indikator, 'lembaga' => $lembaga]);
    }

    public function intervensi($id)
    {
        $intervensi = DB::table('monev_intervensis')
                            ->where('id_strategi', $id)
                            ->pluck('intervensi','id');
        return json_encode($intervensi);
    }

    public function indikator($id)
    {
        $indikator = DB::table('monev_indikators')
                            ->where('id_intervensi', $id)
                            ->pluck('indikator','id');
        return json_encode($indikator);
    }

    public function satuan($id)
    {
        $satuan = DB::table('monev_indikators')
                            ->where('id', $id)
                            ->pluck('dokumen', 'satuan', 'id');
        return json_encode($satuan);
    }

    public function kegiatan($intervensi, $lembaga)
    {
        $lembaga = DB::table('monev_kegiatans')
                            ->where('id_intervensi', $intervensi)
                            ->where('id_lembaga', $lembaga)
                            ->pluck('kegiatan', 'id');

        return json_encode($lembaga);
    }

    public function target($id)
    {
        $target = DB::table('monev_kegiatans')
                            ->where('id', $id)
                            ->pluck('target_volume', 'target_anggaran');

        return json_encode($target);
    }

    public function store_old(Request $request)
    {
        $request->validate([
            'strategi' => 'required',
            'intervensi' => 'required',
            'indikator' => 'required',
            'tahun' => 'required',
            'capaian' => 'required',
            // 'satuan' => 'required',
            'dokumen' => 'required|file|image|mimes:jpeg,png,jpg,pdf,xlsx,xls,doc,docx|max:5120'
        ]);

        $file = $request->dokumen;

		$nama_file = time()."_".$file->getClientOriginalName();

      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'dokumen';
		$file->move($tujuan_upload, $nama_file);

        $detail_indikator = DB::table('monev_indikators')
                            ->where('id', $request->indikator)
                            ->pluck('id', 'indikator', 'stakeholder1', 'stakeholder2', 'id_iku', 'id_ikk', 'id_terpercaya', 'id_landscale', 'id_sourceup', 'id_kdsd', 'target');

        $monev_capaian = MonevCapaian::create([
            'tahun' => $request->tahun,
            'parameter_pengukuran' => $detail_indikator->indikator,
            'capaian' => $request->capaian
        ]);

        MonevIndikator::create([
            'indikator' => $detail_indikator->indikator,
            'stakeholder1' => $detail_indikator->stakeholder1,
            'stakeholder2' => $detail_indikator->stakeholder2,
            'id_intervensi' => $request->intervensi,
            'id_iku' => $detail_indikator->id_iku,
            'id_ikk' => $detail_indikator->id_ikk,
            'id_terpercaya' => $detail_indikator->id_terpercaya,
            'id_landscale' => $detail_indikator->id_landscale,
            'id_sourceup' => $detail_indikator->id_sourceup,
            'id_kdsd' => $detail_indikator->id_kdsd,
            'target' => $detail_indikator->target,
            'satuan' => $request->satuan,
            'id_capaian' => $monev_capaian->id,
            'dokumen' => $nama_file,
            'status' => 0
        ]);

        return redirect('/')->with('status' ,'Data berhasil ditambah.');
    }

    public function storeCapaian(Request $request)
    {
        $request->validate([
            'strategi' => 'required',
            'intervensi' => 'required',
            'indikator' => 'required',
            'tahun' => 'required',
            'capaian' => 'required',
            // 'satuan' => 'required',
            'dokumen' => 'required|mimes:pdf,xlsx,xls,doc,docx|max:5120'
        ]);

        $file = $request->dokumen;

		$nama_file = time()."_".$file->getClientOriginalName();

      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'dokumen';
		$file->move($tujuan_upload, $nama_file);

        $detail_indikator = DB::table('monev_indikators')
                            ->where('id', $request->indikator)
                            ->first()->indikator;

        MonevCapaian::create([
            'tahun' => $request->tahun,
            'id_indikator' => $request->indikator,
            'parameter_pengukuran' => $detail_indikator,
            'capaian' => $request->capaian,
            'dokumen' => $nama_file
        ]);

        return redirect()->route('kontributor')->withFragment('#b')->with('status' ,'Data berhasil ditambah.');
    }

    public function storeKegiatan(Request $request)
    {
        $request->validate([
            'periode1' => 'required',
            'periode2' => 'required',
            'kegiatan' => 'required',
            'realisasi_volume' => 'required',
            'realisasi_anggaran' => 'required'
        ]);

        MonevRealisasi::create([
            'periode' => $request->periode1 . '-' . $request->periode2,
            'id_kegiatan' => $request->kegiatan,
            'realisasi_volume' => $request->realisasi_volume,
            'realisasi_anggaran' => $request->realisasi_anggaran
        ]);

        return redirect()->route('kontributor')->withFragment('#d')->with('status' ,'Data berhasil ditambah.');
    }
}
