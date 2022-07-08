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
										<div class="card-title">Alokasi dan Tata Guna Lahan / Data Multi-tahun</div>
									</div>
									<div class="card-body">
                                        <div class="row">
                                            <div class="column" style="width:50%; background-color:rgb(234, 219, 219);">
                                                <h3>Judul Grafik 1</h3>
                                                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                                            </div>
                                            <div class="column" style="width:50%; background-color:rgb(228, 166, 166);">
                                                <h3>Judul Grafik 2</h3>
                                                <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
                                            </div>
                                            <div class="column" style="width:50%; background-color:rgb(214, 239, 189);">
                                                <h3>Judul Grafik 3</h3>
                                                <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>
                                            </div>
                                            <div class="column" style="width:50%; background-color:rgb(198, 179, 255);">
                                                <h3>Judul Grafik 4</h3>
                                                <canvas id="myChart4" style="width:100%;max-width:600px"></canvas>
                                            </div>
                                        </div>
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

<!-- Chart -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
    var xValues = [50,60,70,80,90,100,110,120,130,140,150];
    var yValues = [7,8,8,9,9,9,10,11,14,14,15];
    
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
        legend: {display: false},
        scales: {
          yAxes: [{ticks: {min: 6, max:16}}],
        }
      }
    });
</script>
<script>
    var xValues = [50,60,70,80,90,100,110,120,130,140,150];
    var yValues = [7,8,8,9,9,9,10,11,14,14,15];
    
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
        legend: {display: false},
        scales: {
          yAxes: [{ticks: {min: 6, max:16}}],
        }
      }
    });
</script>
<script>
    var xValues = [50,60,70,80,90,100,110,120,130,140,150];
    var yValues = [7,8,8,9,9,9,10,11,14,14,15];
    
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
        legend: {display: false},
        scales: {
          yAxes: [{ticks: {min: 6, max:16}}],
        }
      }
    });
</script>
<script>
    var xValues = [50,60,70,80,90,100,110,120,130,140,150];
    var yValues = [7,8,8,9,9,9,10,11,14,14,15];
    
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
        legend: {display: false},
        scales: {
          yAxes: [{ticks: {min: 6, max:16}}],
        }
      }
    });
</script>
@stop