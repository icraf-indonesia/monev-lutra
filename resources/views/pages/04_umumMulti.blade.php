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

        .dataTables_scrollBody {
            overflow: hidden;
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
                    <table id="patientfilter" class="table table-striped dt-responsive nowrap" cellspacing="0"
                        width="100%">
                        <thead>
                            <tr>
                                <th>Tahun</th>
                                <th>Alokasi & Tataguna Lahan</th>
                                <th>Akses Modal Penghidupan</th>
                                <th>Produktivitas & Diversifikasi</th>
                                <th>Rantai Nilai</th>
                                <th>Jasa Ekosistem</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2022</td>
                                <td>
                                    <span class="badge shade-green min-90" style="width: 29%;">28,6%</span>
                                </td>
                                <td>
                                    <span class="badge shade-green min-90" style="width: 36%;">36%</span>
                                </td>
                                <td>
                                    <span class="badge shade-green min-90" style="width: 35%;">35%</span>
                                </td>
                                <td>
                                    <span class="badge shade-green min-90" style="width: 15%;">15%</span>
                                </td>
                                <td>
                                    <span class="badge shade-green min-90" style="width: 19%;">19%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>2023</td>
                                <td>
                                    <span class="badge shade-green min-90" style="width: 40%;">39,8</span>
                                </td>
                                <td>
                                    <span class="badge shade-green min-90" style="width: 52%;">52%</span>
                                </td>
                                <td>
                                    <span class="badge shade-green min-90" style="width: 43%;">43%</span>
                                </td>
                                <td>
                                    <span class="badge shade-green min-90" style="width: 32%;">32%</span>
                                </td>
                                <td>
                                    <span class="badge shade-green min-90" style="width: 28%;">28%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>2024</td>
                                <td>
                                    <span class="badge shade-green min-90" style="width: 50%;">49,9%</span>
                                </td>
                                <td>
                                    <span class="badge shade-green min-90" style="width: 56%;">56%</span>
                                </td>
                                <td>
                                    <span class="badge shade-green min-90" style="width: 53%;">53%</span>
                                </td>
                                <td>
                                    <span class="badge shade-green min-90" style="width: 49%;">49%</span>
                                </td>
                                <td>
                                    <span class="badge shade-green min-90" style="width: 36%;">36%</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
