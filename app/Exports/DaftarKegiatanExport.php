<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DaftarKegiatanExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'No',
            'Kegiatan',
            'Nomenklatur Kegiatan',
            'Indikator',
            'Periode',
            'Target Volume',
            'Target Anggaran',
            'Realisasi Volume',
            'Realisasi Anggaran',
            'Tanggal Verifikasi'
        ];
    }

    public function collection()
    {
        $realisasis =  DB::table('monev_realisasis')
                        ->join('monev_kegiatans', 'monev_realisasis.id_kegiatan', '=', 'monev_kegiatans.id')
                        ->where('status', 1)
                        ->orderByDesc('update')
                        ->select('monev_realisasis.id', 'monev_kegiatans.kegiatan', 'nomenklatur', 'indikator_kegiatan', 'monev_kegiatans.periode', 'target_volume', 'target_anggaran', 'realisasi_volume', 'realisasi_anggaran', 'status', 'monev_realisasis.updated_at as update')
                        ->get();

        $realisasi_array = array();
        $count = 0;
        if(!$realisasis->isEmpty()){
            foreach($realisasis as $realisasi){
                $realisasi_array[] = array(
                    'No' => $count+=1,
                    'Kegiatan' => $realisasi->kegiatan,
                    'Nomenklatur Kegiatan' => $realisasi->nomenklatur,
                    'Indikator' => $realisasi->indikator_kegiatan,
                    'Periode' => $realisasi->periode,
                    'Target Volume' => $realisasi->target_volume,
                    'Target Anggaran' => $realisasi->target_anggaran,
                    'Realisasi Volume' => $realisasi->realisasi_volume,
                    'Realisasi Anggaran' => $realisasi->realisasi_anggaran,
                    'Tanggal Verifikasi' => $realisasi->update
                    // 'Status' => $indikator->status
                );
            }
        }
        // dd($indikator_array);
        return collect($realisasi_array);
    }
}
