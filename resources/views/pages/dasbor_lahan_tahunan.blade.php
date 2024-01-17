@extends('header')

@section('page_title', 'Strategi 1 (Capaian Tahunan)')

@section('content')
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12 dct-dashbd-lft hidden-xs hidden-sm">
            <div class="dct-dashbd-01 hidden-xs hidden-sm">
                @include('dasbor_sidebar')
            </div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12 dct-appoinment m-t-10">
            <!-- Table section  -->
            <div class="row">
                <div class="col-md-12 patient-app-01">

                    <div id='map'></div>

                    <div class="row">
                        <div class="column" style="width:100%;">
                            <div class="col-md-6">
                                <h5>Tahun:</h5>
                                <form method="GET">
                                    <select name="year" id="year" style="width:150px;" onchange="this.form.submit()">
                                        @foreach ($tahun as $t)
                                            <option {{ ($year == $t->tahun) ? "selected":"" }} value='{{$t->tahun}}'>{{$t->tahun}}</option>
                                        @endforeach
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane active" id="a">
                        <table id="patientfilter" class="table table-striped dt-responsive" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Indikator Peta Jalan</th>
                                    <th>Pemangku Kepentingan</th>
                                    {{-- <th>Alokasi Anggaran</th> --}}
                                    <th>Target Capaian</th>
                                    <th>Satuan</th>
                                    <th>Kondisi Saat Ini</th>
                                    <th>Capaian</th>
                                    <th>Instrumen</th>
                                    <th>Dokumen Pendukung</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($capaian_lahan as $lhn)
                                    <tr>
                                        <td width="15%">{{ $lhn->indikator }}</td>
                                        <td width="15%">{{ $lhn->stakeholder1 }}</td>
                                        <td width="10%">{{ $lhn->target }}</td>
                                        <td width="10%">{{ $lhn->satuan }}</td>
                                        <td width="10%">{{ $lhn->capaian }}</td>
                                        <td width="10%">
                                            @if (is_null($lhn->persen)) 0% @else {{ $lhn->persen }}% @endif
                                        </td>
                                        <td width="30%">
                                            @if ($lhn->id_landscale != 1)
                                                <span class="badge" style="display: unset; color:white; background-color:blue;">LandScale</span>
                                            @endif
                                            @if ($lhn->id_terpercaya != 1)
                                                <span class="badge" style="display: unset; color:white; background-color:orange;">Terpercaya</span>
                                            @endif
                                            @if ($lhn->id_sourceup != 1)
                                                <span class="badge" style="display: unset; color:white; background-color:green;">SourceUp</span>
                                            @endif
                                            @if ($lhn->id_kdsd != 1)
                                                <span class="badge" style="display: unset; color:white; background-color:darkslategray;">KDSD</span>
                                            @endif
                                        </td>
                                        <td width="10%">
                                            <span class="text-red">
                                                <i class="bi bi-download"></i>
                                                <a href="{{url('/dokumen/'.$lhn->dokumen)}}" target="_blank">
                                                    {{$lhn->dokumen}}
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <h3>Tabel Luas Agroforestri Kakao</h3>
                        <table id="patientfilter" class="table table-striped dt-responsive nowrap" cellspacing="0"
                            width="100%">
                            <tr>
                                <th>Kecamatan</th>
                                <th>2021 (Ha)</th>
                                {{-- <th>2022 (Ha)</th> --}}
                            </tr>
                            <tr>
                            @foreach ($luas_af_kakao as $ll)
                                <tr>
                                    <td>{{$ll->kecamatan}}</td>
                                    <td>{{$ll->luas}}</td>
                                </tr>
                            @endforeach
                            </tr>
                        </table>
                        <h3>Tabel Luas Alokasi Lahan untuk Tanaman Kakao</h3>
                        <table id="patientfilter" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                            <tr>
                                <th>Kecamatan</th>
                                <th>2021 (Ha)</th>
                                {{-- <th>2022 (Ha)</th> --}}
                            </tr>
                            @foreach ($luas_aloc_kakao as $l)
                                <tr>
                                    <td>{{$l->kecamatan}}</td>
                                    <td>{{$l->luas}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <!-- Table section  -->
        </div>
@stop


@section('customJSLibrary')
<script src="https://unpkg.com/shpjs@latest/dist/shp.js"></script>
<script src='https://unpkg.com/leaflet@1.9.4/dist/leaflet.js' crossorigin=''></script>
@stop

@section('customJS')
let map, markers = [];

function initMap() {
    map = L.map('map', {
        center: {
            lat: -2.412288070373402,
            lng: 120.08931533060061,
        },
        zoom: 9
    });

    const baseLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap'
    }).addTo(map);

    {{-- var shpfile = L.geoJson('{{url('')}}/shp/Kakao_AF.zip', {
        onEachFeature: function(feature, layer) {
            if (feature.properties) {
                layer.bindPopup(Object.keys(feature.properties).map(function(k) {
                    return k + ": " + feature.properties[k];
                }).join("<br />"), {
                    maxHeight: 200
                });
            }
        }
    }).addTo(map); --}}

    var kakao_af = L.geoJson({features:[]}, {
        onEachFeature: function popUp(f, l) {
            var out = [];
            if (f.properties){
                for(var key in f.properties){
                    out.push(key + ": " + f.properties[key]);
                }
                l.bindPopup(out.join("<br />"));
            }
        },
        style:{
            fillColor: 'red',
            fillOpacity: 0.7,
            color: 'red'
        }
    }).addTo(map);

    var kakao_af_zip = '{{url('')}}/shp/Kakao_AF.zip';
    shp(kakao_af_zip).then(function(data){
        kakao_af.addData(data);
    });

    var kakao_af_mono = L.geoJson({features:[]}, {
        onEachFeature: function popUp(f, l) {
            var out = [];
            if (f.properties){
                for(var key in f.properties){
                    out.push(key + ": " + f.properties[key]);
                }
                l.bindPopup(out.join("<br />"));
            }
        },
        style:{
            fillColor: 'blue',
            fillOpacity: 0.7,
            color: 'blue'
        }
    }).addTo(map);

    var kakao_af_mono_zip = '{{url('')}}/shp/Kakao_AF_Mono.zip';
    shp(kakao_af_mono_zip).then(function(data){
        kakao_af_mono.addData(data);
    });

    var kakao_af_mono_ps = L.geoJson({features:[]}, {
        onEachFeature: function popUp(f, l) {
            var out = [];
            if (f.properties){
                for(var key in f.properties){
                    out.push(key + ": " + f.properties[key]);
                }
                l.bindPopup(out.join("<br />"));
            }
        },
        style:{
            fillColor: '#b2182b',
            fillOpacity: 0.7,
            color: '#b2182b'
        }
    }).addTo(map);

    var kakao_af_mono_ps_zip = '{{url('')}}/shp/Kakao_AF_Mono_PS.zip';
    shp(kakao_af_mono_ps_zip).then(function(data){
        kakao_af_mono_ps.addData(data);
    });

    var kawasan_hutan = L.geoJson({features:[]}, {
        onEachFeature: function popUp(f, l) {
            var out = [];
            if (f.properties){
                for(var key in f.properties){
                    out.push(key + ": " + f.properties[key]);
                }
                l.bindPopup(out.join("<br />"));
            }
        },
        style:{
            fillColor: '#2166ac',
            fillOpacity: 0.7,
            color: '#2166ac'
        }
    }).addTo(map);

    var kawasan_hutan_zip = '{{url('')}}/shp/Kawasan_hutan.zip';
    shp(kawasan_hutan_zip).then(function(data){
        kawasan_hutan.addData(data);
    });

    var tutupan_lahan = L.geoJson({features:[]}, {
        onEachFeature: function popUp(f, l) {
            var out = [];
            if (f.properties){
                for(var key in f.properties){
                    out.push(key + ": " + f.properties[key]);
                }
                l.bindPopup(out.join("<br />"));
            }
        },
        style:{
            fillColor: '#d6604d',
            fillOpacity: 0.7,
            color: '#d6604d'
        }
    }).addTo(map);

    var tutupan_lahan_zip = '{{url('')}}/shp/Tutupan_hutan_2021.zip';
    shp(tutupan_lahan_zip).then(function(data){
        tutupan_lahan.addData(data);
    });

    const overlayMaps = {
        'Kakao Agroforestri': kakao_af,
        'Kakao Agroforestri Mono': kakao_af_mono,
        'Kakao Agroforestri Mono PS': kakao_af_mono_ps,
        'Tutupan Lahan': tutupan_lahan,
        'Kawasan Hutan': kawasan_hutan
    };

    const layerControl = L.control.layers(overlayMaps).addTo(map);

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
