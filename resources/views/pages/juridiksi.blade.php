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

body{
    overflow-y: hidden;
}
</style>
@stop

@section('content')
<!-- Sidebar menu starts -->
<!-- Sidebar wrapper start -->
<nav class="sidebar-wrapper" style="height: inherit;">

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
										<div class="card-title">Gambaran Umum / Data Tahunan</div>
									</div>
									<div class="card-body">
                                        <label for="year">Tahun:</label>
                                                <select name="year" id="year" style="margin-left:10px; margin-bottom:25px; width:75px;" value=>
                                                    <option value=2021>2021</option>
                                                    <option value=2022 selected>2022</option>
                                                    <option value=2023>2023</option>
                                                    <option value=2024>2024</option>
                                                    <option value=2025>2025</option>
                                                    <option value=2026>2026</option>
                                                </select>
                                        <div class="table-responsive">
                                            <h5>Tabel Capaian Berdasarkan Aspek</h5>
											<table class="table v-middle" style="margin-bottom: 30px;">
												<thead>
													<tr>
														<th>Aspek</th>
														<th>Capaian Keberhasilan</th>
													</tr>
												</thead>
												<tbody>
                                                    @foreach($aspek as $item)
                                                    <tr>
                                                    <td width="50%">{{ $item->strategi }}</td>
                                                    <td>
                                                        <span class="badge shade-yellow min-90" style="width: 60%;">5</span>
                                                    </td>
                                                    </tr>
                                                     @endforeach
													{{-- <tr>
														<td>1. Alokasi dan tataguna lahan</td>
														<td>
															<span class="badge shade-yellow min-90" style="width: 100%;">5</span>
														</td>
													</tr>
													<tr>
														<td>1.1 Alokasi kebun kakao dengan mempertimbangkan kesesuaian lahan dan kawasan lindung</td>
														<td>
															<span class="badge shade-green min-90" style="width: 75%;">5</span>
														</td>
													</tr>
													<tr>
														<td>1.2 Alokasi peremajaan lahan kakao</td>
														<td>
															<span class="badge shade-green min-90" style="width: 60%;">5</span>
														</td>
													</tr>
													<tr>
														<td>1.3 Pengembangan agroforestri kakao</td>
														<td>
															<span class="badge shade-green min-90" style="width: 80%;">5</span>
														</td>
													</tr>
													<tr>
														<td>2. Akses modal penghidupan​</td>
														<td>
															<span class="badge shade-yellow min-90" style="width: 40%;">5</span>
														</td>
													</tr>
													<tr>
														<td>3. Produktivitas dan diversifikasi</td>
														<td>
															<span class="badge shade-yellow min-90" style="width: 65%;">5</span>
														</td>
													</tr>
													<tr>
														<td>4. Rantai nilai</td>
														<td>
															<span class="badge shade-yellow min-90" style="width: 70%;">5</span>
														</td>
													</tr>
                                                    <tr>
														<td>5. Jasa ekosistem</td>
														<td>
															<span class="badge shade-yellow min-90" style="width: 20%;">5</span>
														</td>
													</tr> --}}
												</tbody>
								    		</table>
                                            <h5>Tabel Capaian Berdasarkan Intervensi</h5>
                                            <table class="table v-middle">
												<thead>
													<tr>
                                                        <th>Intervensi</th>
														<th>Capaian Keberhasilan</th>
													</tr>
												</thead>
												<tbody>
                                                    @foreach($tables_jurisdiction as $table)
                                                    <tr>
                                                    <td width="50%">{{ $table->intervensi }}</td>
                                                    <td>
                                                        <span class="badge shade-green min-90" style="width: 60%;">5</span>
                                                    </td>
                                                    </tr>
                                                     @endforeach
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