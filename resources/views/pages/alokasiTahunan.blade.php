@extends('layout')

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
element.style{
    margin-left: 0px;
}
</style>
@stop

@section('content')
<!-- Sidebar menu starts -->
<!-- Sidebar wrapper start -->
<nav class="sidebar-wrapper" style="height: 700px">

    <!-- Sidebar menu starts -->
    <div class="sidebar-menu">
        <div class="sidebarMenuScroll">
            <ul>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-globe"></i>
                        <span class="menu-text">Gambaran Umum</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{url('')}}/gambaran_umum_tahunan" class="current-page">Data Tahunan</a>
                            </li>
                            <li>
                                <a href="{{url('')}}/gambaran_umum_multi">Data Multi-tahun</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-pin-map"></i>
                        <span class="menu-text">Alokasi dan Tata Guna Lahan</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{url('')}}/alokasi_tataguna_lahan_tahunan">Data Tahunan</a>
                            </li>
                            <li>
                                <a href="{{url('')}}/alokasi_tataguna_lahan_multi">Data Multi-tahun</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-pencil-square"></i>
                        <span class="menu-text">Akses Modal Penghidupan</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{url('')}}/akses_modal_tahunan">Data Tahunan</a>
                            </li>
                            <li>
                                <a href="{{url('')}}/akses_modal_multi">Data Multi-tahun</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-basket"></i>
                        <span class="menu-text">Produktivitas dan Diversifikasi</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{url('')}}/produktivitas_tahunan">Data Tahunan</a>
                            </li>
                            <li>
                                <a href="{{url('')}}/produktivitas_multi">Data Multi-tahun</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-recycle"></i>
                        <span class="menu-text">Rantai Nilai</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{url('')}}/rantai_nilai_tahunan">Data Tahunan</a>
                            </li>
                            <li>
                                <a href="{{url('')}}/rantai_nilai_multi">Data Multi-tahun</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-cart-check"></i>
                        <span class="menu-text">Jasa Ekosistem</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{url('')}}/jasa_ekosistem_tahunan">Data Tahunan</a>
                            </li>
                            <li>
                                <a href="{{url('')}}/jasa_ekosistem_multi">Data Multi-tahun</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Sidebar menu ends -->
</nav>
<!-- Sidebar wrapper end -->
<!-- Sidebar menu ends -->

<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">

    <!-- Content wrapper start -->
    <div class="content-wrapper">
        <!-- Row start -->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="top: 50px;">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Alokasi dan Tata Guna Lahan / Data Tahunan</div>
									</div>
									<div class="card-body">
                                        <div class="row">
                                            <div class="column" style="width:10%;">
                                                <label for="cars">Tahun:</label>
                                                <br>
                                                <select name="cars" id="cars" style="width:100px;">
                                                    <option value=2021>2021</option>
                                                    <option value=2022>2022</option>
                                                    <option value=2023>2023</option>
                                                    <option value=2024>2024</option>
                                                    <option value=2025>2025</option>
                                                    <option value=2026>2026</option>
                                                </select>
                                            </div>
                                            <div class="column" style="width:50%;">
                                                <div class="col-md-6">
                                                    <h5>Jenis Instrumen</h5>
                                                </div>
                                                <div class="col-md-12">
                                                    <label style="padding-right: 10px;">
                                                      <input type="checkbox" class="tampilan" data-kolom=1> Terpercaya
                                                    </label>
                                                    <label style="padding-right: 10px;">
                                                      <input type="checkbox" class="tampilan" data-kolom=2> LandScale
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
                                        <div class="table-responsive" style="padding-top: 20px;">
											<table class="table v-middle">
												<thead>
													<tr>
														<th>Indikator Peta Jalan</th>
														<th>Pemangku Kepentingan</th>
                                                        <th>Target Capaian</th>
                                                        <th>Kondisi Saat Ini</th>
                                                        <th>Satuan</th>
                                                        <th>Instrumen</th>
                                                        <th>Dokumen Pendukung</th>   
													</tr>
												</thead>
												<tbody>
                                                    @foreach($tables_alokasitahun as $table)
                                                    <tr>
                                                    <td width="20%">{{ $table->indikator_intervensi }}</td>
                                                    <td width="20%">{{ $table->pemangku_kepentingan1 }}</td>
                                                    <td width="10%">{{ $table->target }}</td>
                                                    <td width="10%">{{ $table->tahun1 }}</td>
                                                    <td width="10%">{{ $table->satuan }}</td>
                                                    <td width="30%">
                                                        <span class="badge shade-yellow min-90">LandScale</span>
                                                        <span class="badge shade-blue min-90">Terpercaya</span>
                                                    </td>
                                                    <td width="10%">
                                                        <span class="text-red"><i class="bi bi-download"></i> file.pdf</span>
                                                    </td>
                                                    </tr>
                                                    @endforeach
													{{-- <tr>
														<td width="15%">Indikator 1</td>
                                                        <td width="15%">Dinas Kehutanan</td>
                                                        <td width="10%">250 Ha</td>
                                                        <td width="10%">15 Ha</td>
														<td width="30%">
															<span class="badge shade-yellow min-90">LandScale</span>
                                                            <span class="badge shade-blue min-90">Terpercaya</span>
														</td>
                                                        <td width="20%">
															<span class="text-red"><i class="bi bi-download"></i> file.pdf</span>
														</td>
													</tr>
													<tr>
														<td width="15%">Indikator 1</td>
                                                        <td width="15%">Dinas Kehutanan</td>
                                                        <td width="10%">250 Ha</td>
                                                        <td width="10%">15 Ha</td>
														<td width="30%">
															<span class="badge shade-yellow min-90">LandScale</span>
                                                            <span class="badge shade-blue min-90">Terpercaya</span>
														</td>
                                                        <td width="20%">
															<span class="text-red"><i class="bi bi-download"></i> file.pdf</span>
														</td>
													</tr>
													<tr>
														<td width="15%">Indikator 1</td>
                                                        <td width="15%">Dinas Kehutanan</td>
                                                        <td width="10%">250 Ha</td>
                                                        <td width="10%">15 Ha</td>
														<td width="30%">
															<span class="badge shade-yellow min-90">LandScale</span>
                                                            <span class="badge shade-blue min-90">Terpercaya</span>
														</td>
                                                        <td width="20%">
															<span class="text-red"><i class="bi bi-download"></i> file.pdf</span>
														</td>
													</tr>
													<tr>
														<td width="15%">Indikator 1</td>
                                                        <td width="15%">Dinas Kehutanan</td>
                                                        <td width="10%">250 Ha</td>
                                                        <td width="10%">15 Ha</td>
														<td width="30%">
															<span class="badge shade-yellow min-90">LandScale</span>
                                                            <span class="badge shade-blue min-90">Terpercaya</span>
														</td>
                                                        <td width="20%">
															<span class="text-red"><i class="bi bi-download"></i> file.pdf</span>
														</td>
													</tr>
													<tr>
														<td width="15%">Indikator 1</td>
                                                        <td width="15%">Dinas Kehutanan</td>
                                                        <td width="10%">250 Ha</td>
                                                        <td width="10%">15 Ha</td>
														<td width="30%">
															<span class="badge shade-yellow min-90">LandScale</span>
                                                            <span class="badge shade-blue min-90">Terpercaya</span>
														</td>
                                                        <td width="20%">
															<span class="text-red"><i class="bi bi-download"></i> file.pdf</span>
														</td>
													</tr> --}}
												</tbody>
								    		</table>
                                        </div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->
    </div>
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