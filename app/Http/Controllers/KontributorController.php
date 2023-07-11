<?php

namespace App\Http\Controllers;

use App\Models\MonevCapaian;
use App\Models\MonevIndikator;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class KontributorController extends Controller
{
    public function index()
    {
        $strategi = DB::table('monev_strategies')->get();

        $tables = DB::table('monev_indikators')
                        ->join('monev_capaians', 'monev_indikators.id', '=', 'monev_capaians.id_indikator')
                        ->select('monev_indikators.id', 'monev_indikators.indikator', 'target', 'satuan', 'tahun', 'capaian', 'dokumen', 'status')
                        ->paginate(10);

        return view('kontributor', ['strategi'=>$strategi, 'tables'=>$tables]);
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

    public function store_old(Request $request)
    {
        $request->validate([
            'strategi' => 'required',
            'intervensi' => 'required',
            'indikator' => 'required',
            'tahun' => 'required',
            'capaian' => 'required',
            'satuan' => 'required',
            'dokumen' => 'required|file|image|mimes:jpeg,png,jpg,pdf|max:2048'
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

    public function store(Request $request)
    {
        $request->validate([
            'strategi' => 'required',
            'intervensi' => 'required',
            'indikator' => 'required',
            'tahun' => 'required',
            'capaian' => 'required',
            'satuan' => 'required'
        ]);

        $detail_indikator = DB::table('monev_indikators')
                            ->where('id', $request->indikator)
                            ->first()->indikator;

        MonevCapaian::create([
            'tahun' => $request->tahun,
            'id_indikator' => $request->indikator,
            'parameter_pengukuran' => $detail_indikator,
            'capaian' => $request->capaian
        ]);

        return redirect('/kontributor#b')->with('status' ,'Data berhasil ditambah.');
    }
}
