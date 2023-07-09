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

        td {
            width: 50%;
        }

        .subnav-content {
            z-index: 10;
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
                    <h3>Tabel Capaian</h3>
                    <label for="year">Tahun:</label>
                    <select name="year" id="year" style="margin-left:10px; width:150px;" value=>
                        <option value=2021>2021</option>
                        <option value=2022 selected>2022</option>
                        <option value=2023>2023</option>
                        <option value=2024>2024</option>
                        <option value=2025>2025</option>
                        <option value=2026>2026</option>
                    </select>
                    <ul class="nav nav-tabs paitent-app-tab">
                        <li class="active"><a href="#a" data-toggle="tab">Strategi</a></li>
                        <li><a href="#b" data-toggle="tab">Intervensi</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="a">
                            <table id="patientfilter" class="table table-striped dt-responsive nowrap" cellspacing="0"
                                width="100%">
                                <thead>
                                    <tr>
                                        <th>Strategi</th>
                                        <th>Capaian Keberhasilan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($aspek as $item)
                                                    <tr>
                                                    <td width="50%">{{ $item->strategi }}</td>
                                                    <td>
                                                        <span class="badge shade-yellow min-90" style="width: 60%;">28.6%</span>
                                                    </td>
                                                    </tr>
                                                     @endforeach --}}
                                    <tr>
                                        <td>1. Alokasi dan tataguna lahan</td>
                                        <td>
                                            <span class="badge shade-yellow min-90" style="width: 29%;">28.6%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2. Akses modal penghidupan​</td>
                                        <td>
                                            <span class="badge shade-yellow min-90" style="width: 36%;">36%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3. Produktivitas dan diversifikasi</td>
                                        <td>
                                            <span class="badge shade-yellow min-90" style="width: 35%;">35%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4. Rantai nilai</td>
                                        <td>
                                            <span class="badge shade-yellow min-90" style="width: 15%;">15%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5. Jasa ekosistem</td>
                                        <td>
                                            <span class="badge shade-yellow min-90" style="width: 19%;">19%</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="b">
                            <table id="patientfiltertoday" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Intervensi</th>
                                        <th>Capaian Keberhasilan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($tables_jurisdiction as $table)
                                <tr>
                                <td width="50%">{{ $table->intervensi }}</td>
                                <td>
                                    <span class="badge shade-green min-90" style="width: 45%;">45%</span>
                                </td>
                                </tr>
                                 @endforeach --}}
                                    <tr>
                                        <td>1.1 Alokasi kebun kakao dengan mempertimbangkan kesesuaian lahan dan kawasan
                                            lindung</td>
                                        <td>
                                            <span class="badge shade-green min-90" style="width: 75%;">75%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1.2 Alokasi peremajaan lahan kakao</td>
                                        <td>
                                            <span class="badge shade-green min-90" style="width: 60%;">60%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1.3 Pengembangan agroforestri kakao</td>
                                        <td>
                                            <span class="badge shade-green min-90" style="width: 30%;">30%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.1 Kemudahan akses sertifikasi lahan</td>
                                        <td>
                                            <span class="badge shade-green min-90" style="width: 25%;">25%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.2 Optimalisasi perhutanan sosial berbasis kakao</td>
                                        <td>
                                            <span class="badge shade-green min-90" style="width: 45%;">45%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.3 Penyuluhan kakao yang tepat sasaran</td>
                                        <td>
                                            <span class="badge shade-green min-90" style="width: 72%;">72%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.1 Budidaya kakao dengan penerapan GAP</td>
                                        <td>
                                            <span class="badge shade-green min-90" style="width: 10%;">10%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.2 Akses terhadap sarana dan prasarana pendukung usaha tani kakao</td>
                                        <td>
                                            <span class="badge shade-green min-90" style="width: 17%;">17%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.1 Pengembangan rantai pasok yang efektif dan integratif</td>
                                        <td>
                                            <span class="badge shade-green min-90" style="width: 36%;">36%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.2 Sistem pencatatan dan pengelolaan dokumen</td>
                                        <td>
                                            <span class="badge shade-green min-90" style="width: 5%;">5%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.3 Sertifikasi komoditas kakao berkelanjutan</td>
                                        <td>
                                            <span class="badge shade-green min-90" style="width: 14%;">14%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5.1 Kompensasi/imbal jasa lingkungan hidup antar daerah berupa Transfer Anggaran
                                            berbasis Ekologi di tingkat Kabupaten untuk peningkatan fungsi daerah aliran
                                            sungai</td>
                                        <td>
                                            <span class="badge shade-green min-90" style="width: 77%;">77%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5.2 Pembayaran jasa lingkungan hidup</td>
                                        <td>
                                            <span class="badge shade-green min-90" style="width: 54%;">54%</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
