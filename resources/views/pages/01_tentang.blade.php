@extends('header')

@section('page_title', 'Beranda')

@section('css')
    <style type="text/css">
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            overflow-x: hidden;
            /* Hide horizontal scrollbar */
        }

        /* Float four columns side by side */
        .column {
            float: center;
            width: 25%;
            padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding in columns */
        .row {
            margin: 0 -5px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            /* this adds the "card" effect */
            padding: 16px;
            margin-top: 15px;
            text-align: center;
            background-color: #f1f1f1;
            height: 1000px;
        }

        p {
            text-align: left;
        }

        /* Responsive columns - one column layout (vertical) on small screens */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }
    </style>
@stop

@section('content')
    <div class="container-fluid" style="max-width: 1170px; margin: auto;">
        <div class="row">
            <h1 align="center" style="color:#77342C; padding-bottom:30px;"><b>Monitoring dan Evaluasi Pengembangan Kakao Luwu Utara</b></h1>
            <div
                class="swiffy-slider slider-nav-visible slider-nav-autoplay slider-nav-autopause slider-nav-animation slider-nav-animation-fadein slider-nav-animation-fast">
                <ul class="slider-container">
                    <li class="slide-visible">
                        <img src="dist/img/1.png">
                    </li>
                    <li><img src="dist/img/2.png"></li>
                    <li><img src="dist/img/3.png"></li>
                    <li><img src="dist/img/4.png"></li>
                </ul>

                <button type="button" class="slider-nav"></button>
                <button type="button" class="slider-nav slider-nav-next"></button>

                <ul class="slider-indicators">
                    <li class="active"></li>
                    <li class=""></li>
                    <li class=""></li>
                    <li class=""></li>
                </ul>
            </div>
            <div class="hidden-xs hidden-sm">
                <h2 style="padding-bottom:20px;">Selayang Pandang</h2>
                {{-- <p align="center"><img src="dist/img/1.png" alt="" style="padding-bottom: 20px;"></p> --}}
                <p>Kakao merupakan salah satu komoditas unggulan perkebunan di Indonesia yang menempati peringkat kelima dalam produksi terbesar setelah kelapa sawit, karet, kopi, dan kelapa (BPS, 2019). Sebagai komoditas ekspor yang penting, produksi kakao memberikan kontribusi yang signifikan terhadap perekonomian sektor pertanian. Indonesia merupakan eksportir terbesar ketiga kakao di dunia setelah Ghana dan Pantai Gading. Namun, dalam rentang waktu 2013 hingga 2017, produksi kakao di Indonesia mengalami penurunan baik dari segi luas lahan maupun volume ekspor. Penurunan ini disebabkan oleh pengelolaan kebun yang belum optimal, serangan hama yang tinggi, serta penurunan produksi dan pendapatan petani kakao (Wijayanto, 2019).
                </p>
                <p>
                    Di Indonesia, salah satu provinsi dengan produksi kakao terbesar adalah Sulawesi Selatan, dan Luwu Utara menjadi salah satu kabupaten yang berkontribusi signifikan dalam produksi kakao. Sebagai kabupaten terluas di Sulawesi Selatan, Luwu Utara sangat bergantung pada sektor ekonomi berbasis lahan, termasuk kakao yang menyumbang sekitar 47,02% terhadap PDRB tahun 2020.
                </p>
                <p>
                    Kejayaan kakao Luwu Utara mencapai puncaknya pada tahun 2011 ketika diresmikan sebagai daerah sentra kakao Indonesia. Pada tahun 2009, luas lahan kakao di Kabupaten Luwu Utara mencapai 56.000 hektar, namun saat ini luas lahan kakao berkurang menjadi 38.435 hektar. Namun, kakao tetap menjadi sumber penghidupan utama bagi sebagian besar petani.
                </p>
            </div>
            <div class="dct-dashbd-lft hidden-xs hidden-sm">
                <h2 style="padding-bottom:20px;">Monev Luwu Utara</h2>
                {{-- <p align="center"><img src="dist/img/2.png" alt="" style="padding-bottom: 20px;"></p> --}}
                <p>
                    Monitoring dan Evaluasi (Monev) Pengembangan Kakao Luwu Utara adalah alat bantu dan sistem yang digunakan untuk memantau dan mengevaluasi kemajuan pelaksanaan strategi dan intervensi yang direncanakan melalui peta jalan kakao lestari. Proses monitoring dan evaluasi  diperlukan untuk mengukur tingkat keberlanjutan pengelolaan kakao di Kabupaten Luwu Utara, yang juga mencakup kriteria dan indikator keberlanjutan di tingkat komoditas kakao maupun lanskap.
                </p>
                <p>
                    Monev peta jalan kakao lestari di Kabupaten Luwu Utara dibangun dengan pendekatan jurisdiksi. Pendekatan jurisdiksi disini adalah pengelolaan komoditas di tingkat kabupaten yang menggabungkan perencanaan wilayah, di mana pemerintah menentukan area lindung dan budidaya (<i>go or no-go area</i>), serta sertifikasi komoditas berkelanjutan.
                </p>
                <p>
                    Pendekatan jurisdiksi ini meliputi pelibatan perusahaan yang berkomitmen untuk membeli komoditas berkelanjutan; Peran pemerintah dalam menetapkan area lindung dan budidaya; Adanya insentif bagi produsen untuk mematuhi aturan secara kolektif; dan Jika jurisdiksi terbukti memiliki pengelolaan komoditas berkelanjutan, maka seluruh produsen di dalamnya akan memiliki predikat serupa.
                </p>
                <p>
                    Dalam membangun sistem monev pengembangan kakao Luwu Utara, disusun seperangkat prinsip, kriteria, dan indikator yang dirumuskan bersama oleh pemerintah daerah, <i>Civil Society Organization</i> (CSO), petani, masyarakat, perguruan tinggi, serta perwakilan sektor swasta.
                </p>
                <p>
                    Indikator yang digunakan juga terintegrasi dengan indikator kinerja daerah (Indikator Kinerja Utama (IKU) dan Indikator Kinerja Kunci (IKK)) dan standar keberlanjutan seperti Terpercaya, LandScale, SourceUp, dan Kerangka Daya Saing Daerah (KDSD). Dengan demikian, sistem dan alat bantu monev dapat memfasilitasi pemerintah untuk memenuhi berbagai standar keberlanjutan yang berlaku.
                </p>
                <p>
                    Sistem dan alat bantu monev juga mempermudah pemerintah dan pemangku kepentingan dalam  pengumpulan dan penyampaian data pengembangan komoditas kakao berkelanjutan yang terukur secara berkala.
                </p>
            </div>
            <div class="hidden-xs hidden-sm">
                <h2 style="padding-bottom:20px;">Peta Intervensi Kabupaten Luwu Utara</h2>
                <div id='map'></div>
            </div>

        </div>
        <div class="row" style="padding-top: 50px;">
            <div class="hidden-xs hidden-sm">
                <h4 style="text-align: center"><b>Didukung oleh</b></h4>
                {{-- <p align="center"><img src="dist/img/logodonor.png" alt="" style="max-width:50%;"></p> --}}
                <p align="center"><img src="dist/img/sfital.png" alt="" style="max-width:50%;"></p>
            </div>
        </div>

    </div>
@stop

@section('js')
    <script src="path_to_jquery.js"></script>
    <script src="path_to_slick.js"></script>
    <script>
        $(document).ready(function() {
            $('.slider').slick();
        });
    </script>
@stop

@section('customJSLibrary')
<script src="https://unpkg.com/shpjs@latest/dist/shp.js"></script>
<script src='https://unpkg.com/leaflet@1.8.0/dist/leaflet.js' crossorigin=''></script>
@stop

@section('customJS')
let map, markers = [];

function initMap() {
    map = L.map('map', {
        center: {
            lat: -2.412288070373402,
            lng: 120.08931533060061,
        },
        zoom: 7
    });

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap'
    }).addTo(map);

    var geo = L.geoJson({features:[]}, {
        onEachFeature: function popUp(f, l) {
            var out = [];
            if (f.properties){
            for(var key in f.properties){
                out.push(key + ": " + f.properties[key]);
            }
            l.bindPopup(out.join("<br />"));
            }
        }
    }).addTo(map);

    var base = '{{url('')}}/shp/lutra.zip';
    shp(base).then(function(data){
        geo.addData(data);
    });

    map.on('click', mapClicked);
}

initMap();

function generateMarker(data, index) {
    return L.marker(data.position, {
            draggable: data.draggable
        })
        .on('click', (event) => markerClicked(event, index))
        .on('dragend', (event) => markerDragEnd(event, index));
}

/* ------------------------- Handle Map Click Event ------------------------- */
function mapClicked($event) {
    console.log(map);
    console.log($event.latlng.lat, $event.latlng.lng);
}

/* ------------------------ Handle Marker Click Event ----------------------- */
function markerClicked($event, index) {
    console.log(map);
    console.log($event.latlng.lat, $event.latlng.lng);
}

/* ----------------------- Handle Marker DragEnd Event ---------------------- */
function markerDragEnd($event, index) {
    console.log(map);
    console.log($event.target.getLatLng());
}
@stop
