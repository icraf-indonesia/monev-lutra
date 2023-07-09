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
    </style>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 dct-dashbd-lft hidden-xs hidden-sm">
            <div class="dct-dashbd-01 hidden-xs hidden-sm">
                @include('sidebar')
            </div>
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 dct-appoinment m-t-10">
            <!-- Table section  -->
            <div class="row">
                <div class="col-md-12 patient-app-01">
                    <div class="row">
                        <div class="column" style="width:100%;">
                            <div class="col-md-6">
                                <h5>Tahun:</h5>
                                <select name="year" id="year" style="width:150px;">
                                    <option value=2021>2021</option>
                                    <option value=2022 selected>2022</option>
                                    <option value=2023>2023</option>
                                    <option value=2024>2024</option>
                                    <option value=2025>2025</option>
                                    <option value=2026>2026</option>
                                </select>
                            </div>
                        </div>
                        <div class="column" style="width:100%;">
                            <div class="col-md-6">
                                <h5>Jenis Instrumen</h5>
                                <label style="padding-right: 10px;">
                                    <input type="checkbox" class="tampilan" data-kolom=1 checked="true"> Terpercaya
                                </label>
                                <label style="padding-right: 10px;">
                                    <input type="checkbox" class="tampilan" data-kolom=2 checked="true"> LandScale
                                </label>
                                <label style="padding-right: 10px;">
                                    <input type="checkbox" class="tampilan" data-kolom=3> SourceUp
                                </label>
                                <label style="padding-right: 10px;">
                                    <input type="checkbox" class="tampilan" data-kolom=5> KDSD
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane active" id="a">
                        <table id="patientfilter" class="table table-striped dt-responsive" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Indikator Peta Jalan</th>
                                    <th>Pemangku Kepentingan</th>
                                    <th>Alokasi Anggaran</th>
                                    <th>Target Capaian</th>
                                    <th>Satuan</th>
                                    <th>Kondisi Saat Ini</th>
                                    <th>Capaian</th>
                                    <th>Instrumen</th>
                                    <th>Dokumen Pendukung</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tables_alokasitahun as $table)
                                    <tr>
                                        <td width="15%">{{ $table->indikator_intervensi }}</td>
                                        <td width="15%">{{ $table->pemangku_kepentingan1 }}</td>
                                        <td width="10%">1.000.000</td>
                                        <td width="10%">{{ $table->target }}</td>
                                        <td width="10%">{{ $table->satuan }}</td>
                                        <td width="10%">{{ $table->tahun1 }}</td>
                                        <td width="10%">5%</td>
                                        <td width="30%">
                                            <span class="badge shade-yellow min-90">LandScale</span>
                                            <span class="badge shade-blue min-90">Terpercaya</span>
                                        </td>
                                        <td width="10%">
                                            <span class="text-red"><i class="bi bi-download"></i> <a
                                                    href="https://drive.google.com/file/d/1UgMF_cfuN_N7hX8zAx-PtsTU51RV2-iS/view?usp=sharing">file.pdf</a></span>
                                        </td>
                                    </tr>
                                @endforeach
                                <div class="d-flex justify-content-center">
                                    {{ $tables_alokasitahun->links() }}
                                </div>
                            </tbody>
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
@stop
