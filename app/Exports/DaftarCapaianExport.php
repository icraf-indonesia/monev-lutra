<?php

namespace App\Exports;

use App\Models\MonevCapaian;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

// use Maatwebsite\Excel\Concerns\FromQuery;

class DaftarCapaianExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // protected $uid;

    // public function __construct($uid) {
    //     $this->uid = $uid;
    // }

    public function headings(): array
    {
        return [
            'No',
            'Indikator',
            'Target',
            'Satuan',
            'Tahun',
            'Capaian',
            'Dokumen',
            'Tanggal Verifikasi'
        ];
    }

    public function collection()
    {
        $id_stakeholder = Auth::user()->getStakeholderId();

        $indikators =  DB::table('stakeholders')
                        ->join('indikator_stakeholder', 'indikator_stakeholder.id_stakeholder', '=', 'stakeholders.id')
                        ->join('monev_indikators', 'monev_indikators.id', '=', 'indikator_stakeholder.id_indikator')
                        ->join('monev_capaians', 'monev_indikators.id', '=', 'monev_capaians.id_indikator')
                        ->where('indikator_stakeholder.id_stakeholder', $id_stakeholder)
                        ->where('status', 1)
                        ->orderByDesc('update')
                        ->select('monev_capaians.id', 'monev_indikators.indikator', 'target', 'satuan', 'tahun', 'capaian', 'monev_capaians.dokumen', 'status', 'monev_capaians.updated_at as update')
                        ->get();

        $indikator_array = array();
        $count = 0;
        if(!$indikators->isEmpty()){
            foreach($indikators as $indikator){
                $indikator_array[] = array(
                    'No' => $count+=1,
                    'Indikator' => $indikator->indikator,
                    'Target' => $indikator->target,
                    'Satuan' => $indikator->satuan,
                    'Tahun' => $indikator->tahun,
                    'Capaian' => $indikator->capaian,
                    'Dokumen' => $indikator->dokumen,
                    'Tanggal Verifikasi' => $indikator->update
                    // 'Status' => $indikator->status
                );
            }
        }
        // dd($indikator_array);
        return collect($indikator_array);
    }
}
