<?php

namespace App\Http\Controllers;

use App\Models\MonevCapaian;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
