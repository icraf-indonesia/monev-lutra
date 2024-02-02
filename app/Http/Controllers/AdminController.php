<?php

namespace App\Http\Controllers;

use App\Models\MonevCapaian;
use App\Models\MonevIndikator;
use App\Models\MonevKegiatan;
use App\Models\MonevPeriode;
use App\Models\MonevRealisasi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $strategi = DB::table('monev_strategies')->get();

        $target = DB::table('monev_indikators')
                        ->select('id', 'indikator', 'target', 'satuan', 'dokumen')
                        ->paginate(10);

        return view('admin.index', ['strategi' => $strategi, 'target' => $target]);
    }

    public function verifikasiCapaian()
    {
        $capaian = DB::table('monev_indikators')
                        ->join('monev_capaians', 'monev_indikators.id', '=', 'monev_capaians.id_indikator')
                        ->orderByDesc('monev_capaians.id')
                        ->select('monev_capaians.id', 'monev_indikators.indikator', 'target', 'satuan', 'tahun', 'capaian', 'verified_by', 'status')
                        ->paginate(10);

        return view('admin.verifikasi_capaian', ['capaian' => $capaian]);
    }

    public function daftarKegiatan(Request $request)
    {
        $selectedPeriode = isset($request->periode) ? $request->periode : 1;

        $periode = DB::table('monev_periodes')->get();

        $kegiatan = $this->kegiatanByPeriode($selectedPeriode);

        return view('admin.daftar_kegiatan', ['kegiatan' => $kegiatan, 'periode' => $periode, 'selectedPeriode' => $selectedPeriode]);
    }

    public function kegiatanByPeriode($selectedPeriode)
    {
        $kegiatan = DB::table('monev_kegiatans')
                        ->join('periode_kegiatan', 'monev_kegiatans.id', '=', 'periode_kegiatan.id_kegiatan')
                        ->join('monev_periodes', 'periode_kegiatan.id_periode', '=', 'monev_periodes.id')
                        ->select('monev_kegiatans.id as id', 'kegiatan', 'nomenklatur', 'indikator_kegiatan', 'monev_periodes.periode as periode', 'periode_kegiatan.target_volume as target_volume', 'periode_kegiatan.target_anggaran as target_anggaran')
                        ->where('monev_periodes.id', $selectedPeriode)
                        ->paginate(10);

        return $kegiatan;
    }

    public function tambahPeriode()
    {
        $periode = DB::table('monev_periodes')->paginate(10);
        return view('admin.tambah_periode', ['periode' => $periode]);
    }

    public function storePeriode(Request $request)
    {
        $p = $request->periode1 . '-' . $request->periode2;

        MonevPeriode::create([ 'periode' => $p ]);
        $last = MonevPeriode::where('periode', $p)->first();

        for ($i=1; $i < 236; $i++) {
            DB::table('periode_kegiatan')->insert(
                ['id_periode' => $last->id, 'id_kegiatan' => $i, 'created_at' => Carbon::now()]
            );
        }

        return redirect('/admin/kegiatan/periode/tambah')->with('status' ,'Periode baru berhasil ditambah.');
    }

    public function deletePeriode($id)
    {
        MonevPeriode::destroy($id);
        DB::table('periode_kegiatan')
            ->where('id_periode', $id)
            ->delete();

        return redirect('/admin/kegiatan/periode/tambah')->with('status', 'Data berhasil dihapus.');
    }

    public function verifikasiRealisasi()
    {
        $realisasi = DB::table('monev_realisasis')
                        ->join('monev_kegiatans', 'monev_realisasis.id_kegiatan', '=', 'monev_kegiatans.id')
                        ->orderByDesc('monev_realisasis.id')
                        ->select('monev_realisasis.id', 'monev_kegiatans.kegiatan', 'indikator_kegiatan', 'monev_realisasis.periode', 'target_volume', 'target_anggaran', 'realisasi_volume', 'realisasi_anggaran', 'entered_by', 'verified_by', 'status')
                        ->paginate(10);

        return view('admin.verifikasi_realisasi', ['realisasi' => $realisasi]);
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
        return view('admin.edit_target', ['data' => $data]);
    }

    public function updateIndikator(Request $request, $id)
    {
        $rules = [
            'target' => 'required'
        ];

        $validatedData = $request->validate($rules);
        $validatedData['target'] = $request->target;
        $validatedData['satuan'] = $request->satuan;

        MonevIndikator::find($id)->update($validatedData);
        return redirect()->back()->with('status', 'Berhasil mengubah target');
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

        return redirect()->back()->with('status', 'Data capaian telah diapprove');
    }

    public function rejectCapaian(Request $request, $id)
    {
        $capaian = MonevCapaian::find($id);
        $capaian->status = $request->status;
        $capaian->verified_by = $request->verified_by;
        $capaian->save();

        return redirect()->back()->with('status', 'Data capaian perlu direvisi');
    }

    public function editKegiatan($id)
    {
        $data = DB::table('monev_kegiatans')
            ->join('periode_kegiatan', 'monev_kegiatans.id', '=', 'periode_kegiatan.id_kegiatan')
            ->join('monev_periodes', 'periode_kegiatan.id_periode', '=', 'monev_periodes.id')
            ->select('monev_kegiatans.id as id', 'monev_periodes.id as id_periode', 'kegiatan', 'nomenklatur', 'indikator_kegiatan', 'monev_periodes.periode as periode', 'periode_kegiatan.target_volume as target_volume', 'periode_kegiatan.target_anggaran as target_anggaran')
            ->where('monev_kegiatans.id', $id)
            ->first();

        return view('admin.edit_kegiatan', ['data' => $data]);
    }

    public function updateKegiatan(Request $request, $id, $p)
    {
        $rules = [
            'nomenklatur' => 'required',
            'indikator_kegiatan' => 'required',
            'target_volume' => 'required',
            'target_anggaran' => 'required'
        ];

        $validatedData = $request->validate($rules);
        $validatedData['nomenklatur'] = $request->nomenklatur;
        $validatedData['indikator_kegiatan'] = $request->indikator_kegiatan;
        $validatedData['target_volume'] = $request->target_volume;
        $validatedData['target_anggaran'] = $request->target_anggaran;
        $validatedData['updated_at'] = Carbon::now();

        MonevKegiatan::find($id)->update($validatedData);

        DB::table('periode_kegiatan')
            ->where('id_kegiatan', $id)
            ->where('id_periode', $p)
            ->update(['target_volume' => $request->target_volume, 'target_anggaran' => $request->target_anggaran, 'updated_at' => Carbon::now() ]);

        return redirect()->back()->with('status', 'Berhasil mengubah kegiatan');
    }

    public function approveRealisasi(Request $request, $id)
    {
        $realisasi = MonevRealisasi::find($id);
        $realisasi->status = $request->status;
        $realisasi->verified_by = $request->verified_by;
        $realisasi->save();

        return redirect()->back()->with('status', 'Realisasi kegiatan telah diapprove');
    }

    public function rejectRealisasi(Request $request, $id)
    {
        $realisasi = MonevRealisasi::find($id);
        $realisasi->status = $request->status;
        $realisasi->verified_by = $request->verified_by;
        $realisasi->save();

        return redirect()->back()->with('status', 'Realisasi kegiatan perlu direvisi');
    }

}
