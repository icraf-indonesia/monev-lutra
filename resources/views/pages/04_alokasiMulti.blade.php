@extends('header')

@section('css')
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">

    <!-- Animated css -->
    <link rel="stylesheet" href="dist/css/animate.css">

    <!-- Bootstrap font icons css -->
    <link rel="stylesheet" href="dist/fonts/bootstrap/bootstrap-icons.css">

    <!-- Main css -->
    <link rel="stylesheet" href="dist/css/main.css">

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="dist/vendor/overlay-scroll/OverlayScrollbars.min.css">

    <style type="text/css">
        element.style {
            margin-left: 0px;
        }

        body {
            overflow-y: hidden;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 30px;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12 dct-dashbd-lft hidden-xs hidden-sm">
            <div class="dct-dashbd-01 hidden-xs hidden-sm">
              @include('sidebar')
            </div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12 dct-appoinment m-t-10">

            <!-- Table section  -->
            <div class="row">
                <div class="col-md-12 patient-app-01">
                    <div style="padding-bottom: 20px; width:100%;">
                        <select name="intervensi" class="form-select">
                            @foreach ($intervensi as $item)
                                <option value="{{ $item->intervensi }}"
                                    {{ request('item') === $item->intervensi ? 'selected' : '' }}>
                                    {{ $item->intervensi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div id='map'></div>
                    <div class="row chart-box-head">
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
                    </div>
                    <h3>Tabel Luas HCV/HCS</h3>
                    <div class="tab-pane active" id="a">
                        <table id="patientfilter" class="table table-striped dt-responsive nowrap" cellspacing="0"
                            width="100%">
                            <tr>
                                <th>Kecamatan</th>
                                <th>2022 (Ha)</th>
                                <th>2023 (Ha)</th>
                                <th>2024 (Ha)</th>
                            </tr>
                            <tr>
                                <td>Baebunta</td>
                                <td>1207</td>
                                <td>8500</td>
                                <td>16870</td>
                            </tr>
                            <tr>
                                <td>Bone Bone</td>
                                <td>18976</td>
                                <td>20162</td>
                                <td>21405</td>
                            </tr>
                            <tr>
                                <td>Limbong</td>
                                <td>100</td>
                                <td>1400</td>
                                <td>2980</td>
                            </tr>
                            <tr>
                                <td>Malangke</td>
                                <td>8090</td>
                                <td>10540</td>
                                <td>17930</td>
                            </tr>
                            <tr>
                                <td>Masamba</td>
                                <td>103450</td>
                                <td>105524</td>
                                <td>142000</td>
                            </tr>
                            <tr>
                                <td>Rampi</td>
                                <td>230</td>
                                <td>540</td>
                                <td>1078</td>
                            </tr>
                        </table>
                        <h3>Tabel Luas Alokasi Lahan untuk Tanaman Kakao</h3>
                        <table id="patientfilter" class="table table-striped dt-responsive nowrap" cellspacing="0"
                            width="100%">
                            <tr>
                                <th>Kecamatan</th>
                                <th>2022 (Ha)</th>
                                <th>2023 (Ha)</th>
                                <th>2024 (Ha)</th>
                            </tr>
                            <tr>
                                <td>Baebunta</td>
                                <td>1207</td>
                                <td>8500</td>
                                <td>5422</td>
                            </tr>
                            <tr>
                                <td>Bone Bone</td>
                                <td>18976</td>
                                <td>20162</td>
                                <td>21405</td>
                            </tr>
                            <tr>
                                <td>Limbong</td>
                                <td>100</td>
                                <td>1400</td>
                                <td>2980</td>
                            </tr>
                            <tr>
                                <td>Malangke</td>
                                <td>8090</td>
                                <td>5200</td>
                                <td>3450</td>
                            </tr>
                            <tr>
                                <td>Masamba</td>
                                <td>103450</td>
                                <td>101470</td>
                                <td>127800</td>
                            </tr>
                            <tr>
                                <td>Rampi</td>
                                <td>230</td>
                                <td>149</td>
                                <td>10</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Table section  -->
    </div>

@stop

@section('js')
<!-- *************
************ Required JavaScript Files *************
************* -->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="dist/js/jquery.min.js"></script>
<script src="dist/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/modernizr.js"></script>
<script src="dist/js/moment.js"></script>

<!-- *************
************ Vendor Js Files *************
************* -->

<!-- Overlay Scroll JS -->
<script src="dist/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
<script src="dist/vendor/overlay-scroll/custom-scrollbar.js"></script>

<!-- Apex Charts -->
<script src="dist/vendor/apex/apexcharts.min.js"></script>
<script src="dist/vendor/apex/custom/sales/sparkline.js"></script>
<script src="dist/vendor/apex/custom/sales/salesGraph.js"></script>
<script src="dist/vendor/apex/custom/sales/revenueGraph.js"></script>
<script src="dist/vendor/apex/custom/sales/taskGraph.js"></script>

<!-- Main Js Required -->
<script src="dist/js/main.js"></script>

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
