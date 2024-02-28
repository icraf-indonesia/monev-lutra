<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DasborController extends Controller
{
    public function index(Request $request)
    {
        $selectedYear = isset($request->tahun) ? $request->tahun : 2021;

        $tahun = DB::table('monev_capaians')->orderBy('monev_capaians.tahun')
                ->get()->unique('tahun');

        $q_makro = 'SELECT CONCAT(ms.id, ". ", ms.strategi) as strategi,
                            mi.id as id_indikator,
                            mi.indikator as indikator,
                            mc.tahun as tahun,
                            cast(mi.target as decimal(10,3)) target,
                            mi.satuan as satuan,
                            cast(mc.capaian as decimal(10,3)) capaian,
                            IFNULL(ROUND(capaian/target*100, 2), 0) as tingkat_capaian,
                            mc.dokumen as dokumen,
                            mc.status as status
                        FROM monev_indikator_makros mim
                        LEFT JOIN monev_strategies ms ON mim.id_strategi = ms.id
                        LEFT JOIN monev_indikators mi ON mim.id_indikator = mi.id
                        LEFT JOIN monev_capaians mc ON mc.id_indikator = mi.id
                        AND tahun='. $selectedYear .'
                        AND status=1
                        GROUP BY id_indikator';
        // $q_makro2 = DB::table('monev_indikator_makros')
        //                 ->leftJoin('monev_strategies', 'monev_strategies.id', '=', 'monev_indikator_makros.id_strategi')
        //                 ->leftJoin('monev_indikators', 'monev_indikators.id', '=', 'monev_indikator_makros.id_indikator')
        //                 ->leftJoin('monev_capaians', 'monev_capaians.id_indikator', '=', 'monev_indikators.id')
        //                 ->select(DB::raw("CONCAT(monev_strategies.id, '. ', monev_strategies.strategi) AS strategi"),
        //                     'monev_indikator_makros.id_indikator',
        //                     'monev_indikators.indikator',
        //                     'monev_capaians.tahun',
        //                     'monev_indikators.target AS target',
        //                     'monev_indikators.satuan',
        //                     'monev_capaians.capaian AS capaian',
        //                     DB::raw("IFNULL(capaian/target, 0) AS tingkat_capaian"),
        //                     'monev_capaians.dokumen',
        //                     'monev_capaians.status as status')
        //                 ->where('tahun', $selectedYear)
        //                 ->where('status', 1)
        //                 ->get();

        $indikator_makro = DB::select($q_makro);

        return view('pages.dasbor_capaian_tahunan_makro', [
            'indikator_makro' => $indikator_makro,
            'tahun' => $tahun,
            'selectedYear' => $selectedYear,
        ]);
    }

    public function capaianIndikatorMakroPertahun($tahun, $id){
        $q_makro = DB::table('monev_indikator_makros')
                        ->join('monev_strategies', 'monev_strategies.id', '=', 'monev_indikator_makros.id_strategi')
                        ->join('monev_indikators', 'monev_indikators.id', '=', 'monev_indikator_makros.id_indikator')
                        ->join('monev_capaians', 'monev_capaians.id_indikator', '=', 'monev_indikators.id')
                        ->select('monev_indikators.id',
                                 'indikator',
                                 'monev_capaians.tahun as tahun',
                                 DB::raw('CAST(monev_indikators.target as decimal(10,5)) target'),
                                 'monev_indikators.satuan',
                                 DB::raw('CAST(monev_capaians.capaian as decimal(10,5)) capaian'),
                                 DB::raw('IFNULL(ROUND(capaian/target*100, 2), 0) as tingkat_capaian'),
                                 'monev_capaians.status as status')
                        ->where('monev_capaians.status', 1)
                        ->where('monev_capaians.tahun', $tahun)
                        ->where('monev_indikator_makros.id_indikator', $id)
                        ->first();

        return $q_makro;
    }

    public function capaianIndikatorMakroMultitahun($id)
    {
        $tahun = DB::table('monev_capaians')->orderBy('monev_capaians.tahun')->get()->unique('tahun');
        $indikator = DB::table('monev_indikators')->select('id', 'indikator', 'satuan')->where('id', $id)->first();
        $data_persen = array();
        $data_target = array();
        $data_capaian = array();
        $data_label = array();

        foreach($tahun as $t){
            $data_label[] = $t->tahun;
            $capaian_makro = $this->capaianIndikatorMakroPertahun($t->tahun, $id);

            if($capaian_makro){
                $data_persen[] = $capaian_makro->tingkat_capaian;
                $data_target[] = (float) $capaian_makro->target;
                $data_capaian[] = (float) $capaian_makro->capaian;
            } else {
                $data_persen[] = 0;
                $data_target[] = 0;
                $data_capaian[] = 0;
            }

        }

        return view('pages.dasbor_capaian_tahunan_makro_multi', [
            'indikator' => $indikator,
            'data_persen' => $data_persen,
            'data_target' => $data_target,
            'data_capaian' => $data_capaian,
            'data_label' => $data_label,
        ]);
    }

    public function capaianStrategiPertahun($tahun){
        $q_strategi = 'WITH tbl_summary AS (
            SELECT  monev_strategies.id,
                    monev_strategies.strategi,
                    monev_indikators.indikator,
                    monev_indikators.target,
                    monev_indikators.satuan,
                    monev_capaians.tahun,
                    monev_capaians.capaian,
                    monev_capaians.capaian/monev_indikators.target*100 as persen
            FROM monev_indikators, monev_intervensis, monev_strategies, monev_capaians
            WHERE monev_intervensis.id = monev_indikators.id_intervensi
            AND monev_strategies.id = monev_intervensis.id_strategi
            AND monev_indikators.id = monev_capaians.id_indikator
            AND tahun = '. $tahun .'
            AND status = 1
            ) SELECT id, strategi, round(avg(persen), 2) as persen FROM tbl_summary GROUP BY strategi
        UNION
            SELECT id, strategi,
                   NULL AS persen
            FROM monev_strategies
            WHERE strategi NOT IN (
                SELECT strategi
                    FROM tbl_summary
                    WHERE tbl_summary.strategi = monev_strategies.strategi
            ) ORDER BY id';

        $capaian_by_strategi = DB::select($q_strategi);

        return $capaian_by_strategi;
    }

    public function capaianStrategiMultitahun()
    {
        $tahun = DB::table('monev_capaians')->orderBy('monev_capaians.tahun')->get()->unique('tahun');
        $data_persen = array();
        $data_label = array();

        foreach($tahun as $t){
            $data_label[] = $t->tahun;
            $capaian_by_strategi = $this->capaianStrategiPertahun($t->tahun);
            $persen = array();
            foreach($capaian_by_strategi as $capaian){
                $persen[] = $capaian->persen;
            }
            $data_persen[] = array_sum($persen)/count($persen);
        }

        return [
            'data_persen' => $data_persen,
            'data_label' => $data_label,
        ];
    }

    public function capaianStrategi(Request $request)
    {
        $selectedYear = isset($request->tahun) ? $request->tahun : 2021;

        $tahun = DB::table('monev_capaians')->orderBy('monev_capaians.tahun')
                ->get()->unique('tahun');

        $capaian_by_strategi = $this->capaianStrategiPertahun($selectedYear);

        $persentase = array();
        foreach($capaian_by_strategi as $capaian){
            $persentase[] = $capaian->persen;
        }
        $rataan = array_sum($persentase)/count($persentase);

        $capaian_strategi_multi_tahun = $this->capaianStrategiMultitahun();
        $data = [
            'labels' => $capaian_strategi_multi_tahun['data_label'],
            'data' => $capaian_strategi_multi_tahun['data_persen'],
        ];

        # unused
        $q_intervensi = 'WITH tbl_summary AS (
            SELECT  monev_intervensis.intervensi,
                    monev_indikators.indikator,
                    monev_indikators.target,
                    monev_indikators.satuan,
                    monev_capaians.tahun,
                    monev_capaians.capaian,
                    monev_capaians.capaian/monev_indikators.target*100 as persen
            FROM monev_indikators, monev_intervensis, monev_capaians
            WHERE monev_intervensis.id = monev_indikators.id_intervensi
            AND monev_indikators.id = monev_capaians.id_indikator
            AND tahun = '. $selectedYear .'
            AND status = 1
            ) SELECT intervensi, round(avg(persen), 2) as persen FROM tbl_summary GROUP BY intervensi
        UNION
            SELECT intervensi,
                   NULL AS persen
            FROM monev_intervensis
            WHERE intervensi NOT IN (
                SELECT intervensi
                    FROM tbl_summary
                    WHERE tbl_summary.intervensi = monev_intervensis.intervensi
            )';
        $capaian_by_intervensi = DB::select($q_intervensi);

        return view('pages.dasbor_capaian_tahunan_strategi', [
            'capaian_by_intervensi' => $capaian_by_intervensi,
            'capaian_by_strategi' => $capaian_by_strategi,
            'tahun' => $tahun,
            'selectedYear' => $selectedYear,
            'rataan' => $rataan,
            'data' => $data
        ]);
    }

    public function capaianIntervensi($tahun, $id)
    {
        $strategi = DB::table('monev_strategies')->where('id', $id)->first();

        $q_intervensi = 'WITH tbl_summary AS (
                            SELECT  monev_intervensis.id,
                                    monev_intervensis.intervensi,
                                    monev_intervensis.id_strategi,
                                    monev_indikators.indikator,
                                    monev_indikators.target,
                                    monev_indikators.satuan,
                                    monev_capaians.tahun,
                                    monev_capaians.capaian,
                                    monev_capaians.capaian/monev_indikators.target*100 as persen
                            FROM monev_indikators, monev_intervensis, monev_capaians
                            WHERE monev_intervensis.id = monev_indikators.id_intervensi
                            AND monev_indikators.id = monev_capaians.id_indikator
                            AND tahun = '. $tahun .'
                            AND status = 1
                            AND id_strategi = '. $id .'
                            ) SELECT id, intervensi, round(avg(persen), 2) as persen FROM tbl_summary GROUP BY intervensi
                        UNION
                            SELECT id, intervensi,
                                NULL AS persen
                            FROM monev_intervensis
                            WHERE id_strategi = '. $id .'
                            AND intervensi NOT IN (
                                SELECT intervensi
                                    FROM tbl_summary
                                    WHERE tbl_summary.intervensi = monev_intervensis.intervensi
                            ) ORDER BY id';
        $capaian_by_intervensi = DB::select($q_intervensi);

        return view('pages.dasbor_capaian_tahunan_intervensi', [
            'intervensi' => $capaian_by_intervensi,
            'strategi' => $strategi,
            'tahun' => $tahun
        ]);
    }

    public function capaianMulti()
    {
        $q_multi = 'SELECT tahun,
                        ROUND(AVG(CASE WHEN strategi = "Alokasi dan tata guna lahan berkelanjutan" THEN persen ELSE NULL END),2) AS s1,
                        ROUND(AVG(CASE WHEN strategi = "Insentif jasa ekosistem dari kakao berkelanjutan" THEN persen ELSE NULL END),2) AS s2,
                        ROUND(AVG(CASE WHEN strategi = "Memperbaiki rantai pasok yang berkelanjutan" THEN persen ELSE NULL END),2) AS s3,
                        ROUND(AVG(CASE WHEN strategi = "Meningkatkan akses masyarakat terutama petani kakao terhadap modal penghidupan" THEN persen ELSE NULL END),2) AS s4,
                        ROUND(AVG(CASE WHEN strategi = "Meningkatkan produktivitas dan diversifikasi produk kakao" THEN persen ELSE NULL END),2) AS s5
                    FROM (
                        SELECT
                            monev_strategies.id,
                            monev_strategies.strategi,
                            monev_indikators.indikator,
                            monev_indikators.target,
                            monev_indikators.satuan,
                            monev_capaians.tahun,
                            monev_capaians.capaian,
                            monev_capaians.capaian/monev_indikators.target*100 as persen
                        FROM monev_indikators, monev_intervensis, monev_strategies, monev_capaians
                        WHERE monev_intervensis.id = monev_indikators.id_intervensi AND monev_strategies.id = monev_intervensis.id_strategi AND monev_indikators.id = monev_capaians.id_indikator
                    ) sub
                    GROUP BY 1
                    ORDER BY 2 DESC';

        $capaian_multi = DB::select($q_multi);

        return view('pages.dasbor_capaian_multi', ['capaian_multi' => $capaian_multi]);
    }

    public function lahanTahunan(Request $request)
    {
        $year = isset($request->year) ? $request->year : 2021;

        $tahun = DB::table('monev_capaians')
                ->get()->unique('tahun');

        $q_lahan = 'SELECT monev_indikators.indikator,
                        monev_indikators.stakeholder1,
                        monev_indikators.target,
                        monev_indikators.satuan,
                        monev_capaians.tahun,
                        monev_capaians.capaian,
                        ROUND(monev_capaians.capaian/monev_indikators.target*100, 2) as persen,
                        monev_indikators.id_iku,
                        monev_indikators.id_ikk,
                        monev_indikators.id_terpercaya,
                        monev_indikators.id_landscale,
                        monev_indikators.id_sourceup,
                        monev_indikators.id_kdsd,
                        monev_indikators.dokumen
                    FROM monev_indikators, monev_intervensis, monev_strategies, monev_capaians
                    WHERE monev_intervensis.id = monev_indikators.id_intervensi
                    AND monev_strategies.id = monev_intervensis.id_strategi
                    AND monev_indikators.id = monev_capaians.id_indikator
                    AND tahun = '. $year .'
                    AND monev_strategies.id = 1
                    ORDER BY monev_indikators.id';

        $capaian_lahan = DB::select($q_lahan);

        $luas_af_kakao = DB::table('luas_agroforestri_kakao')
                            ->where('tahun', '=', $year)
                            ->get();
        $luas_aloc_kakao = DB::table('luas_alokasi_lahan_kakao')
                            ->where('tahun', '=', $year)
                            ->get();

        return view('pages.dasbor_lahan_tahunan', [
            'capaian_lahan' => $capaian_lahan,
            'luas_aloc_kakao' => $luas_aloc_kakao,
            'luas_af_kakao' => $luas_af_kakao,
            'tahun' => $tahun,
            'year' => $year
        ]);
    }

    public function lahanMulti()
    {
        $q_multi = 'SELECT tahun,
                        ROUND(AVG(CASE WHEN intervensi = "1.1 Alokasi kebun kakao dengan mempertimbangkan kesesuaian lahan dan tata ruang kabupaten" THEN persen ELSE NULL END),2) AS i01,
                        ROUND(AVG(CASE WHEN intervensi = "1.2 Alokasi peremajaaan lahan kakao" THEN persen ELSE NULL END),2) AS i02,
                        ROUND(AVG(CASE WHEN intervensi = "1.3 Perluasan terbatas kebun kakao" THEN persen ELSE NULL END),2) AS i03,
                        ROUND(AVG(CASE WHEN intervensi = "1.4 Pengembangan agroforestri kakao" THEN persen ELSE NULL END),2) AS i04
                    FROM (
                    SELECT monev_intervensis.id,
                        monev_intervensis.intervensi,
                        monev_indikators.indikator,
                        monev_indikators.target,
                        monev_indikators.satuan,
                        monev_capaians.tahun,
                        monev_capaians.capaian,
                        monev_capaians.capaian/monev_indikators.target*100 as persen
                        FROM monev_indikators, monev_intervensis, monev_capaians
                        WHERE monev_intervensis.id = monev_indikators.id_intervensi
                        AND monev_indikators.id = monev_capaians.id_indikator
                    ) sub
                    GROUP BY 1
                    ORDER BY 2 DESC';

        $lahan_multi = DB::select($q_multi);

        $q_luas_af_kakao = DB::select('SELECT DISTINCT(c.kecamatan), c.luas as l1, c1.luas as l2
                                    FROM luas_agroforestri_kakao c
                                    INNER JOIN luas_agroforestri_kakao c1
                                        ON c.tahun <> c1.tahun
                                        AND c.kecamatan = c1.kecamatan');

        $q_luas_aloc_kakao = DB::select('SELECT DISTINCT(c.kecamatan), c.luas as l1, c1.luas as l2
                                    FROM luas_alokasi_lahan_kakao c
                                    INNER JOIN luas_alokasi_lahan_kakao c1
                                        ON c.tahun <> c1.tahun
                                        AND c.kecamatan = c1.kecamatan');

        // $luas_af_kakao = DB::select($q_luas_af_kakao);
        // $luas_aloc_kakao = DB::select($q_luas_aloc_kakao);

        $luas_af_kakao = DB::table('luas_agroforestri_kakao')
                            ->where('tahun', '=', '2021')
                            ->get();
        $luas_aloc_kakao = DB::table('luas_alokasi_lahan_kakao')
                            ->where('tahun', '=', '2021')
                            ->get();

        return view('pages.dasbor_lahan_multi', [
            'luas_aloc_kakao' => $luas_aloc_kakao,
            'luas_af_kakao' => $luas_af_kakao,
            'lahan_multi' => $lahan_multi
        ]);
    }

    public function modalTahunan(Request $request)
    {
        $year = isset($request->year) ? $request->year : 2021;

        $tahun = DB::table('monev_capaians')
                ->get()->unique('tahun');

        $q_modal = 'SELECT monev_indikators.indikator,
                        monev_indikators.stakeholder1,
                        monev_indikators.target,
                        monev_indikators.satuan,
                        monev_capaians.tahun,
                        monev_capaians.capaian,
                        ROUND(monev_capaians.capaian/monev_indikators.target*100, 2) as persen,
                        monev_indikators.id_iku,
                        monev_indikators.id_ikk,
                        monev_indikators.id_terpercaya,
                        monev_indikators.id_landscale,
                        monev_indikators.id_sourceup,
                        monev_indikators.id_kdsd,
                        monev_capaians.dokumen
                    FROM monev_indikators, monev_intervensis, monev_strategies, monev_capaians
                    WHERE monev_intervensis.id = monev_indikators.id_intervensi
                    AND monev_strategies.id = monev_intervensis.id_strategi
                    AND monev_indikators.id = monev_capaians.id_indikator
                    AND tahun = '. $year .'
                    AND monev_strategies.id = 2
                    ORDER BY monev_indikators.id';

        $capaian_modal = DB::select($q_modal);

        return view('pages.dasbor_modal_tahunan', [
            'capaian_modal' => $capaian_modal,
            'tahun' => $tahun,
            'year' => $year
        ]);
    }

    public function modalMulti()
    {
        $q_multi = 'SELECT tahun,
                        ROUND(AVG(CASE WHEN intervensi = "2.1 Kemudahan akses sertifikasi lahan" THEN persen ELSE NULL END),2) AS i01,
                        ROUND(AVG(CASE WHEN intervensi = "2.2 Optimalisasi perhutanan sosial berbasis kakao" THEN persen ELSE NULL END),2) AS i02,
                        ROUND(AVG(CASE WHEN intervensi = "2.3 Penyuluhan kakao yang tepat sasaran" THEN persen ELSE NULL END),2) AS i03,
                        ROUND(AVG(CASE WHEN intervensi = "2.4 Pengembangan kelembagaan keuangan petani kakao" THEN persen ELSE NULL END),2) AS i04,
                        ROUND(AVG(CASE WHEN intervensi = "2.5 Korporasi petani kakao" THEN persen ELSE NULL END),2) AS i05,
                        ROUND(AVG(CASE WHEN intervensi = "2.6 Bantuan peralatan pertanian" THEN persen ELSE NULL END),2) AS i06,
                        ROUND(AVG(CASE WHEN intervensi = "2.7 Pelibatan dan pemberdayaan perempuan" THEN persen ELSE NULL END),2) AS i07,
                        ROUND(AVG(CASE WHEN intervensi = "2.8 Pelatihan dan penyediaan sarana dan prasarana untuk menjaga keselamatan dan kesehatan kerja" THEN persen ELSE NULL END),2) AS i08,
                        ROUND(AVG(CASE WHEN intervensi = "2.9 Sistem pencegahan dan pengawasan pekerja anak" THEN persen ELSE NULL END),2) AS i09,
                        ROUND(AVG(CASE WHEN intervensi = "2.10 Kebijakan kakao lestari" THEN persen ELSE NULL END),2) AS i10,
                        ROUND(AVG(CASE WHEN intervensi = "2.11 Asuransi pertanian kakao" THEN persen ELSE NULL END),2) AS i11
                    FROM (
                    SELECT monev_intervensis.id,
                        monev_intervensis.intervensi,
                        monev_indikators.indikator,
                        monev_indikators.target,
                        monev_indikators.satuan,
                        monev_capaians.tahun,
                        monev_capaians.capaian,
                        monev_capaians.capaian/monev_indikators.target*100 as persen
                        FROM monev_indikators, monev_intervensis, monev_capaians
                        WHERE monev_intervensis.id = monev_indikators.id_intervensi
                        AND monev_indikators.id = monev_capaians.id_indikator
                    ) sub
                    GROUP BY 1
                    ORDER BY 2 DESC';

        $modal_multi = DB::select($q_multi);

        return view('pages.dasbor_modal_multi', ['modal_multi' => $modal_multi]);
    }

    public function produktivitasTahunan(Request $request)
    {
        $year = isset($request->year) ? $request->year : 2021;

        $tahun = DB::table('monev_capaians')
                ->get()->unique('tahun');

        $q_produktivitas = 'SELECT monev_indikators.indikator,
                        monev_indikators.stakeholder1,
                        monev_indikators.target,
                        monev_indikators.satuan,
                        monev_capaians.tahun,
                        monev_capaians.capaian,
                        ROUND(monev_capaians.capaian/monev_indikators.target*100, 2) as persen,
                        monev_indikators.id_iku,
                        monev_indikators.id_ikk,
                        monev_indikators.id_terpercaya,
                        monev_indikators.id_landscale,
                        monev_indikators.id_sourceup,
                        monev_indikators.id_kdsd,
                        monev_capaians.dokumen
                    FROM monev_indikators, monev_intervensis, monev_strategies, monev_capaians
                    WHERE monev_intervensis.id = monev_indikators.id_intervensi
                    AND monev_strategies.id = monev_intervensis.id_strategi
                    AND monev_indikators.id = monev_capaians.id_indikator
                    AND tahun = '. $year .'
                    AND monev_strategies.id = 3
                    ORDER BY monev_indikators.id';

        $capaian_produktivitas = DB::select($q_produktivitas);

        return view('pages.dasbor_produktivitas_tahunan', [
            'capaian_produktivitas' => $capaian_produktivitas,
            'tahun' => $tahun,
            'year' => $year
        ]);
    }

    public function produktivitasMulti()
    {
        $q_multi = 'SELECT tahun,
                        ROUND(AVG(CASE WHEN intervensi = "3.1 Budidaya kakao dengan penerapan GAP" THEN persen ELSE NULL END),2) AS i01,
                        ROUND(AVG(CASE WHEN intervensi = "3.2 Akses terhadap sarana dan prasarana pendukung usaha tani kakao" THEN persen ELSE NULL END),2) AS i02,
                        ROUND(AVG(CASE WHEN intervensi = "3.3 Diversifikasi produk kakao" THEN persen ELSE NULL END),2) AS i03,
                        ROUND(AVG(CASE WHEN intervensi = "3.4 Agribisnis kakao" THEN persen ELSE NULL END),2) AS i04
                    FROM (
                    SELECT monev_intervensis.id,
                        monev_intervensis.intervensi,
                        monev_indikators.indikator,
                        monev_indikators.target,
                        monev_indikators.satuan,
                        monev_capaians.tahun,
                        monev_capaians.capaian,
                        monev_capaians.capaian/monev_indikators.target*100 as persen
                        FROM monev_indikators, monev_intervensis, monev_capaians
                        WHERE monev_intervensis.id = monev_indikators.id_intervensi
                        AND monev_indikators.id = monev_capaians.id_indikator
                    ) sub
                    GROUP BY 1
                    ORDER BY 2 DESC';

        $produktivitas_multi = DB::select($q_multi);

        return view('pages.dasbor_produktivitas_multi', ['produktivitas_multi' => $produktivitas_multi]);
    }

    public function rantaiNilaiTahunan(Request $request)
    {
        $year = isset($request->year) ? $request->year : 2021;

        $tahun = DB::table('monev_capaians')
                ->get()->unique('tahun');

        $q_nilai = 'SELECT monev_indikators.indikator,
                        monev_indikators.stakeholder1,
                        monev_indikators.target,
                        monev_indikators.satuan,
                        monev_capaians.tahun,
                        monev_capaians.capaian,
                        ROUND(monev_capaians.capaian/monev_indikators.target*100, 2) as persen,
                        monev_indikators.id_iku,
                        monev_indikators.id_ikk,
                        monev_indikators.id_terpercaya,
                        monev_indikators.id_landscale,
                        monev_indikators.id_sourceup,
                        monev_indikators.id_kdsd,
                        monev_capaians.dokumen
                    FROM monev_indikators, monev_intervensis, monev_strategies, monev_capaians
                    WHERE monev_intervensis.id = monev_indikators.id_intervensi
                    AND monev_strategies.id = monev_intervensis.id_strategi
                    AND monev_indikators.id = monev_capaians.id_indikator
                    AND tahun = '. $year .'
                    AND monev_strategies.id = 4
                    ORDER BY monev_indikators.id';

        $capaian_nilai = DB::select($q_nilai);

        return view('pages.dasbor_rantainilai_tahunan', [
            'capaian_nilai' => $capaian_nilai,
            'tahun' => $tahun,
            'year' => $year
        ]);
    }

    public function rantaiNilaiMulti()
    {
        $q_multi = 'SELECT tahun,
                            ROUND(AVG(CASE WHEN intervensi = "4.1 Pengembangan rantai pasok yang efektif dan integratif" THEN persen ELSE NULL END),2) AS i01,
                            ROUND(AVG(CASE WHEN intervensi = "4.2 Sistem pencatatan dan pengelolaan dokumen" THEN persen ELSE NULL END),2) AS i02,
                            ROUND(AVG(CASE WHEN intervensi = "4.3 Sertifikasi komoditas kakao berkelanjutan" THEN persen ELSE NULL END),2) AS i03
                        FROM (
                        SELECT monev_intervensis.id,
                            monev_intervensis.intervensi,
                            monev_indikators.indikator,
                            monev_indikators.target,
                            monev_indikators.satuan,
                            monev_capaians.tahun,
                            monev_capaians.capaian,
                            monev_capaians.capaian/monev_indikators.target*100 as persen
                            FROM monev_indikators, monev_intervensis, monev_capaians
                            WHERE monev_intervensis.id = monev_indikators.id_intervensi
                            AND monev_indikators.id = monev_capaians.id_indikator
                        ) sub
                        GROUP BY 1
                        ORDER BY 2 DESC';

        $rantainilai_multi = DB::select($q_multi);

        return view('pages.dasbor_rantainilai_multi', ['rantainilai_multi' => $rantainilai_multi]);
    }

    public function jasaEkosistemTahunan(Request $request)
    {
        $year = isset($request->year) ? $request->year : 2021;

        $tahun = DB::table('monev_capaians')
                ->get()->unique('tahun');

        $q_ekosistem = 'SELECT monev_indikators.indikator,
                        monev_indikators.stakeholder1,
                        monev_indikators.target,
                        monev_indikators.satuan,
                        monev_capaians.tahun,
                        monev_capaians.capaian,
                        ROUND(monev_capaians.capaian/monev_indikators.target*100, 2) as persen,
                        monev_indikators.id_iku,
                        monev_indikators.id_ikk,
                        monev_indikators.id_terpercaya,
                        monev_indikators.id_landscale,
                        monev_indikators.id_sourceup,
                        monev_indikators.id_kdsd,
                        monev_capaians.dokumen
                    FROM monev_indikators, monev_intervensis, monev_strategies, monev_capaians
                    WHERE monev_intervensis.id = monev_indikators.id_intervensi
                    AND monev_strategies.id = monev_intervensis.id_strategi
                    AND monev_indikators.id = monev_capaians.id_indikator
                    AND tahun = '. $year .'
                    AND monev_strategies.id = 5
                    ORDER BY monev_indikators.id';

        $capaian_ekosistem = DB::select($q_ekosistem);

        return view('pages.dasbor_ekosistem_tahunan', [
            'capaian_ekosistem' => $capaian_ekosistem,
            'tahun' => $tahun,
            'year' => $year
        ]);
    }

    public function jasaEkosistemMulti()
    {
        $q_multi = 'SELECT tahun,
                            ROUND(AVG(CASE WHEN intervensi = "5.1 Kompensasi Imbal Jasa Lingkungan Hidup (KIJLH) antar daerah berupa Transfer Anggaran berbasis Ekologi (TAKE) di tingkat kabupaten untuk peningkatan fungsi daerah aliran sungai (DAS), keanekaragaman hayati, dan stok karbon" THEN persen ELSE NULL END),2) AS i01,
                            ROUND(AVG(CASE WHEN intervensi = "5.2 Pembayaran jasa lingkungan hidup (PJLH) untuk peningkatan fungsi DAS, keanekaragaman hayati dan kontrak berbasis performa untuk peningkatan stok karbon" THEN persen ELSE NULL END),2) AS i02,
                            ROUND(AVG(CASE WHEN intervensi = "5.3 Label ramah lingkungan hidup" THEN persen ELSE NULL END),2) AS i03,
                            ROUND(AVG(CASE WHEN intervensi = "5.4 Dana penanggulangan pencemaran dan/atau kerusakan dan pemulihan lingkungan hidup" THEN persen ELSE NULL END),2) AS i04,
                            ROUND(AVG(CASE WHEN intervensi = "5.5 Penghargaan kinerja di bidang perlindungan dan pengelolaan lingkungan hidup" THEN persen ELSE NULL END),2) AS i05
                        FROM (
                        SELECT monev_intervensis.id,
                            monev_intervensis.intervensi,
                            monev_indikators.indikator,
                            monev_indikators.target,
                            monev_indikators.satuan,
                            monev_capaians.tahun,
                            monev_capaians.capaian,
                            monev_capaians.capaian/monev_indikators.target*100 as persen
                            FROM monev_indikators, monev_intervensis, monev_capaians
                            WHERE monev_intervensis.id = monev_indikators.id_intervensi
                            AND monev_indikators.id = monev_capaians.id_indikator
                        ) sub
                        GROUP BY 1
                        ORDER BY 2 DESC';

        $ekosistem_multi = DB::select($q_multi);

        return view('pages.dasbor_ekosistem_multi', ['ekosistem_multi' => $ekosistem_multi]);
    }
}
