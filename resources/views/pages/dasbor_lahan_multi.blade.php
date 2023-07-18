@extends('header')

@section('page_title', 'Strategi 1 (Capaian Multi-tahun)')

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
                    {{-- <div class="row chart-box-head">
                        <div class="col-md-6 col-sm-6">
                            <div id="charts" class=" chart-box">
                                <h3 class="text-center p-t-20">Luas HCV/HCS</h3>
                                <div class="wrapper p-l-10"><canvas id="chart-0"></canvas></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div id="charts" class=" chart-box dashm-l-15">
                                <h3 class="text-center p-t-20">Luas Alokasi Lahan untuk Tanaman Kakao</h3>
                                <div class="wrapper  p-l-10"><canvas id="chart-1"></canvas></div>
                            </div>
                        </div>
                    </div> --}}
                    <table id="patientfilter" class="table table-striped dt-responsive nowrap" cellspacing="0"width="100%">
                        <thead>
                            <tr>
                                <th>Tahun</th>
                                <th>Alokasi kebun kakao</th>
                                <th>Alokasi peremajaaan lahan kakao</th>
                                <th>Perluasan terbatas kebun kakao</th>
                                <th>Pengembangan agroforestri kakao</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lahan_multi as $item)
                                <tr>
                                    <td>{{ $item->tahun }}</td>
                                    <td>
                                        @if (is_null($item->i01))
                                            <span class="badge shade-yellow min-90" style="width: 0%;">0%</span>
                                        @else
                                            <span class="badge shade-yellow min-90"
                                                    style="color: #fff; text-align: right; font-weight: 500; line-height: 1.4; width:
                                                    {{ $item->i01 }}%;">
                                                {{ $item->i01 }}%
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (is_null($item->i02))
                                            <span class="badge shade-yellow min-90" style="width: 0%;">0%</span>
                                        @else
                                            <span class="badge shade-yellow min-90"
                                                    style="color: #fff; text-align: right; font-weight: 500; line-height: 1.4; width:
                                                    {{ $item->i02 }}%;">
                                                {{ $item->i02 }}%
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (is_null($item->i03))
                                            <span class="badge shade-yellow min-90" style="width: 0%;">0%</span>
                                        @else
                                            <span class="badge shade-yellow min-90"
                                                    style="color: #fff; text-align: right; font-weight: 500; line-height: 1.4; width:
                                                    {{ $item->i03 }}%;">
                                                {{ $item->i03 }}%
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (is_null($item->i04))
                                            <span class="badge shade-yellow min-90" style="width: 0%;">0%</span>
                                        @else
                                            <span class="badge shade-yellow min-90"
                                                    style="color: #fff; text-align: right; font-weight: 500; line-height: 1.4; width:
                                                    {{ $item->i04 }}%;">
                                                {{ $item->i04 }}%
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <h3>Tabel Luas Agroforestri Kakao</h3>
                    <div class="tab-pane active" id="a">
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

<!-- Chart -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
    var xValues = ["2021", "2022", "2023", "2024", "2025"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = ["red", "green", "blue", "orange", "brown"];

    new Chart("barChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                //   text: "World Wine Production 2018"
            }
        }
    });
</script>
<script>
    var xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
    var yValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

    new Chart("myChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        min: 6,
                        max: 16
                    }
                }],
            }
        }
    });
</script>
<script>
    var xValues = [2021, 2022, 2023, 2024, 2025, 2026, 2027, 2028, 2029, 2030, 2031];
    var yValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

    new Chart("myChart2", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        min: 6,
                        max: 16
                    }
                }],
            }
        }
    });
</script>
<script>
    var xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
    var yValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

    new Chart("myChart3", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        min: 6,
                        max: 16
                    }
                }],
            }
        }
    });
</script>
<script>
    var xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
    var yValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

    new Chart("myChart4", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        min: 6,
                        max: 16
                    }
                }],
            }
        }
    });
</script>

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
