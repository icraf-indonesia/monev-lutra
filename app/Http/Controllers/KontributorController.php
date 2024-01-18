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

        $indikator =  DB::table('stakeholders')
                        ->join('indikator_stakeholder', 'indikator_stakeholder.id_stakeholder', '=', 'stakeholders.id')
                        ->join('monev_indikators', 'monev_indikators.id', '=', 'indikator_stakeholder.id_indikator')
                        ->join('monev_capaians', 'monev_indikators.id', '=', 'monev_capaians.id_indikator')
                        ->where('indikator_stakeholder.id_stakeholder', $id_stakeholder)
                        ->orderByDesc('update')
                        ->select('monev_capaians.id', 'monev_indikators.indikator', 'target', 'satuan', 'tahun', 'capaian', 'monev_capaians.dokumen', 'status', 'monev_capaians.updated_at as update')
                        ->paginate(10);

        return view('kontributor.index', ['tables' => $indikator]);
    }

    public function tambahCapaian()
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

        return view('kontributor.tambah_capaian', ['strategi' => $strategi]);
    }

    public function daftarRealisasi()
    {
        $id_stakeholder = Auth::user()->getStakeholderId();

        $realisasi =  DB::table('monev_realisasis')
                        ->join('monev_kegiatans', 'monev_realisasis.id_kegiatan', '=', 'monev_kegiatans.id')
                        // ->where('indikator_stakeholder.id_stakeholder', $id_stakeholder)
                        ->orderByDesc('update')
                        ->select('monev_realisasis.id', 'monev_kegiatans.kegiatan', 'nomenklatur', 'indikator_kegiatan', 'monev_kegiatans.periode', 'target_volume', 'target_anggaran', 'realisasi_volume', 'realisasi_anggaran', 'status', 'monev_realisasis.updated_at as update')
                        ->paginate(10);

        return view('kontributor.daftar_kegiatan', ['realisasi' => $realisasi]);
    }

    public function tambahRealisasi()
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

        $lembaga = DB::table('lembaga')->get();

        return view('kontributor.tambah_realisasi', ['strategi' => $strategi, 'lembaga' => $lembaga]);
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

        return redirect()->route('kontributor')->withFragment('#b')->with('status' ,'Capaian indikator baru berhasil ditambah.');
    }

    public function storeRealisasi(Request $request)
    {
        $request -> validate([
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
            'realisasi_anggaran' => $request->realisasi_anggaran,
            'entered_by' => $request->entered_by
        ]);

        return redirect('/kontributor/realisasi')->with('status' ,'Realisasi kegiatan baru berhasil ditambah.');
    }

    public function revisiCapaian($id)
    {
        $data = DB::table('monev_capaians')
            ->join('monev_indikators', 'monev_capaians.id_indikator', '=', 'monev_indikators.id')
            ->where('monev_capaians.id', $id)
            ->select('monev_capaians.id as id', 'monev_indikators.indikator as indikator', 'target', 'satuan', 'capaian', 'tahun', 'monev_capaians.dokumen as dokumen')
            ->first();

        // return view('admin.edit', ['data' => MonevIndikator::find($id)]);
        return view('kontributor.revisi_capaian', ['data' => $data]);
    }

    public function updateRevisiCapaian(Request $request, $id)
    {
        $rules = [
            'tahun' => 'required',
            'capaian' => 'required'
        ];

        $validatedData = $request->validate($rules);
        $validatedData['target'] = $request->target;
        $validatedData['satuan'] = $request->satuan;
        $validatedData['status'] = 0;

        MonevCapaian::find($id)->update($validatedData);
        return redirect('/kontributor')->with('status', 'Capaian telah direvisi');
    }

    public function revisiRealisasi($id)
    {
        $data = DB::table('monev_realisasis')
            ->join('monev_kegiatans', 'monev_kegiatans.id', '=', 'monev_realisasis.id_kegiatan')
            ->where('monev_realisasis.id', $id)
            ->select('monev_realisasis.id as id',
                     'monev_kegiatans.kegiatan as kegiatan',
                     'target_volume',
                     'target_anggaran',
                     'realisasi_volume',
                     'realisasi_anggaran',
                     DB::raw('SUBSTRING_INDEX( monev_realisasis.periode , "-", 1 ) AS periode1'),
                     DB::raw('SUBSTRING_INDEX( monev_realisasis.periode , "-", -1 ) AS periode2'),
                     )
            ->first();

        return view('kontributor.revisi_realisasi', ['data' => $data]);
    }

    public function updateRevisiRealisasi(Request $request, $id)
    {
        $rules = [
            'periode1' => 'required',
            'periode2' => 'required',
            'realisasi_volume' => 'required',
            'realisasi_anggaran' => 'required'
        ];

        $validatedData = $request->validate($rules);
        $validatedData['periode'] = $request->periode1 . '-' . $request->periode2;
        $validatedData['realisasi_volume'] = $request->realisasi_volume;
        $validatedData['realisasi_anggaran'] = $request->realisasi_anggaran;
        $validatedData['entered_by'] = $request->entered_by;
        $validatedData['status'] = 0;

        MonevRealisasi::find($id)->update($validatedData);
        return redirect('/kontributor/realisasi')->with('status', 'Realisasi kegiatan telah direvisi');
    }
}
