<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Monitoring & Evaluation of Luwu Utara</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="dist/assets/img/lutra-small.png" rel="icon">
  <link href="dist/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Bootstrap CSS File -->
  <link href="dist/assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="dist/assets/css/font-awesome.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="dist/assets/css/style.css" rel="stylesheet">
  <!-- datetimepicker Stylesheet File -->
  <link href="dist/assets/css/jquery.datepicker2.css" rel="stylesheet">
  <link href="dist/assets/css/animate.min.css" rel="stylesheet">
  <!-- data table stylesheet -->
  <link rel="stylesheet" type="text/css" href="dist/assets/css/datatable.min.css"/>
  <script src="dist/assets/js/utils.js"></script>
  
</head>

<body class="innerpage-body">

   <header>
	  <nav class="navbar navbar-default navbar-trans navbar-expand-lg ct-navbar-01">
		<div class="container-fluid">		
		  <div class="row">
			<div class="col-md-8 col-sm-12 header-navbar-lft text-center">
				<a class="web-logo1 visible-xs visible-sm" href="{{url('')}}/"><img src="dist/assets/img/header-small.png" class="img-responsive" alt=""></a>

				<div class="hamburger navbar-toggle collapsed mob-icon-menu img-responsive visible-xs visible-sm" data-toggle="slide-collapse" data-target="#slide-navbar-collapse" aria-expanded="false">

                          <div class="burger-main">
                            <div class="burger-inner">
                              <span class="top"></span>
                              <span class="mid"></span>
                              <span class="bot"></span>
                            </div>
                          </div>
                        </div> 
                        <a class="ico-img-size visible-xs visible-sm" href="chat-page.html"><img src="dist/assets/img/doctordashboard/mail.png" class="img-responsive" alt=""> 
                        	<div class="msg-count">
                        		<span class="msg-span">10</span>
                        	</div>
                        </a>
				
				<ul id="menu" class="hidden-xs hidden-sm" style="padding-right:0px; padding-left:0px;">
                    <li><a class="web-logo" href="{{url('')}}/"><img src="dist/assets/img/header-small.png" class="img-responsive" alt=""></a></li>
                    <li><a class="home" href="{{url('')}}/">Beranda</a></li>
                    <li><a class="prett">Peta Jalan</a>
                        <ul class="menus">
                            <li><a href="{{url('')}}/aboutroadmap">Selayang Pandang</a></li>
                            <li><a href="{{url('')}}/pendekatan">Pendekatan Pembangunan</a></li>
                            <li><a href="{{url('')}}/isu">Isu Strategis, Visi, dan Ruang Lingkup</a></li>
                            <li><a href="{{url('')}}/petajalan">Peta Jalan Kakao Lestari</a></li>
                        </ul>
                    </li>
                    <li><a class="home" href="{{url('')}}/indikator">Indikator</a></li>
                    <li><a class="home" href="{{url('')}}/gambaran_umum_tahunan">Profil Jurisdiksi</a></li>
                    <li><a class="home" href="{{url('')}}/kelembagaan">Kelembagaan</a></li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-5 header-navbar-rht hidden-xs hidden-sm">			 
				  <ul class="text-right m-t-13">
					{{-- <li>
						<div class="header-contact-detail">
                                <a href="#" class="header-login">Website </a>
						</div>
					</li> --}}
					<li>
						<a href="{{url('')}}/session" class="header-login">Masuk</a>
                        {{-- <a href="{{url('')}}/session/logout" class="header-login">Keluar</a> --}}
					</li>
				  </ul>
			</div>
			<div id="slide-navbar-collapse" class="collapse mobile-sidemenu">
                <ul>
                    <li><a href="{{url('')}}/">Beranda</a></li>
                    <li><a class="menu-high" href="#">Peta Jalan</a>
                        <ul class="menus">
                                <li><a href="{{url('')}}/aboutroadmap">Selayang Pandang</a></li>
                                <li><a href="{{url('')}}/pendekatan">Pendekatan Pembangunan</a></li>
                                <li><a href="{{url('')}}/isu">Isu Strategis, Visi, dan Ruang Lingkup</a></li>
                                <li><a href="{{url('')}}/petajalan">Peta Jalan Kakao Lestari</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('')}}/indikator">Indikator</a></li>
                    <li><a href="{{url('')}}/gambaran_umum_tahunan">Profil Jurisdiksi</a></li>
                    <li><a href="{{url('')}}/kelembagaan">Kelembagaan</a></li>
                    <li><a href="{{url('')}}/kontributor">Kontributor</a></li>
                    <li><a href="{{url('')}}/admin">Admin</a></li>
                </ul>
			</div>
		  </div>
		</div>
	  </nav>
   </header>

   <!-- section fliters start -->
	<section class="container-body">
		<div class="container-fluid">
            @yield('content')
			{{-- <div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 dct-dashbd-lft hidden-xs hidden-sm">
                    
				</div>
			</div> --}}
		</div>
	</section>		
   <!-- section filter end -->  

    <!-- footer start -->
  <footer class="footer-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <img src="dist/assets/img/footer-small.png" class="img-responsive" alt="">
            </div>
            <div class="col-md-7 footer-two">
                <ul class="footer-two-01">
                        {{-- <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Linkedin</a></li>
                        <li><a href="#">WhatsApp</a></li> --}}
                        
                </ul>
                <div class="mob-contact footer-last hidden-md hidden-lg">
                    <p class="text-right"><i class="fa fa-envelope-o" aria-hidden="true"></i>example@example.com</p>
                    <p class="text-right"><i class="fa fa-phone" aria-hidden="true"></i>Emergency No: +91 86678 24603<br><i class="fa fa-phone" aria-hidden="true"></i>Reception No: +91 86678 24603</p>
                </div>
                <div class="copy-right">
                    <ul class="policy">
                        <li><a href="javascript:;"> ©2023 | Kabupaten Luwu Utara</a></li>
                        {{-- <li><a href="javascript:;">World Agroforestry (ICRAF)</a></li>
                        <li><a href="javascript:;">Rainforest Alliance</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-md-3 footer-last hidden-sm hidden-xs">
                <p class="text-right"><i aria-hidden="true"></i></p>
                <p class="text-right"><i aria-hidden="true"></i><br><i aria-hidden="true"></i></p>
            </div>
        </div>
    </div>
</footer>
<!-- footer start -->


<!-- JavaScript Libraries -->

<script type="text/javascript" src="dist/assets/js/jquery-2.2.0.js"></script>
<script type="text/javascript" src="dist/assets/js/jquery.datepicker2.js"></script>
<script type="text/javascript" src="dist/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="dist/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="dist/assets/js/slick.js"></script>
<script src="dist/assets/js/Chartjs.js"></script>
<!-- circle animation -->
<script type="text/javascript" src="dist/assets/js/bookingcount-circle.js"></script>
<!-- circle animation -->
<!-- datatable -->
<script type="text/javascript" src="dist/assets/js/datatable.min.js"></script>
<script>
    $(document).ready(function() {
        $("#patientfilter").DataTable( {
            "sScrollX": "100%",
            "bScrollCollapse": true,
            "scrollY":        "400px",
            "scrollCollapse": true,
            "paging":         false,
            "filter":true
        } );
        $("#patientfiltertoday").DataTable( {
                "filter":true,
                "bPaginate": false,
                "bAutoWidth": false,
                "bScrollCollapse": true,
                "bLengthChange": false,
                
        } );
    } );
</script>
<!-- datatable -->
<script>
    $(document).ready(function ($) {
        function animateElements() {
            $(".progressbar-booking1").each(function () {
                var elementPos = $(this).offset().top;
                var topOfWindow = $(window).scrollTop();
                var percent = $(this).find(".booking-circle1").attr("data-percent");
                var animate = $(this).data("animate");
                if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                    $(this).data("animate", true);
                    $(this).find(".booking-circle1").circleProgress({
                        value: percent / 100,
                        size : 400,
                        thickness: 30,
                        fill: {
                            color: "#da3f81"
                        }
                    });
                }
            });
            $(".progressbar-booking2").each(function () {
                var elementPos = $(this).offset().top;
                var topOfWindow = $(window).scrollTop();
                var percent = $(this).find(".booking-circle2").attr("data-percent");
                var animate = $(this).data("animate");
                if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                    $(this).data("animate", true);
                    $(this).find(".booking-circle2").circleProgress({
                        value: percent / 100,
                        size : 400,
                        thickness: 30,
                        fill: {
                            color: "#68dda9"
                        }
                    });
                }
            });
            $(".progressbar-booking3").each(function () {
                var elementPos = $(this).offset().top;
                var topOfWindow = $(window).scrollTop();
                var percent = $(this).find(".booking-circle3").attr("data-percent");
                var animate = $(this).data("animate");
                if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                    $(this).data("animate", true);
                    $(this).find(".booking-circle3").circleProgress({
                        value: percent / 100,
                        size : 400,
                        thickness: 30,
                        fill: {
                            color: "#1b5a90"
                        }
                    });
                }
            });
            $(".progressbar-booking4").each(function () {
                var elementPos = $(this).offset().top;
                var topOfWindow = $(window).scrollTop();
                var percent = $(this).find(".booking-circle4").attr("data-percent");
                var animate = $(this).data("animate");
                if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                    $(this).data("animate", true);
                    $(this).find(".booking-circle4").circleProgress({
                        value: percent / 100,
                        size : 400,
                        thickness: 30,
                        fill: {
                            color: "#ffac14"
                        }
                    });
                }
            });
            $(".progressbar-booking5").each(function () {
                var elementPos = $(this).offset().top;
                var topOfWindow = $(window).scrollTop();
                var percent = $(this).find(".booking-circle5").attr("data-percent");
                var animate = $(this).data("animate");
                if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                    $(this).data("animate", true);
                    $(this).find(".booking-circle5").circleProgress({
                        value: percent / 100,
                        size : 400,
                        thickness: 30,
                        fill: {
                            color: "#149dff"
                        }
                    });
                }
            });
            $(".progressbar-booking6").each(function () {
                var elementPos = $(this).offset().top;
                var topOfWindow = $(window).scrollTop();
                var percent = $(this).find(".booking-circle6").attr("data-percent");
                var animate = $(this).data("animate");
                if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                    $(this).data("animate", true);
                    $(this).find(".booking-circle6").circleProgress({
                        value: percent / 100,
                        size : 400,
                        thickness: 30,
                        fill: {
                            color: "#c514ff"
                        }
                    });
                }
            });
            
        }	
        animateElements();
        $(window).scroll(animateElements);
    });
</script>
<script type="text/javascript">
  $('document').ready(function () {
  var Closed = false;

  $('.hamburger').click(function () {
    if (Closed == true) {
      $(this).removeClass('open');
      $(this).addClass('closed');
      Closed = false;
    } else {               
      $(this).removeClass('closed');
      $(this).addClass('open');
      Closed = true;
    }
  });
});
</script>
<script>
    $('[data-toggle="slide-collapse"]').on('click', function() {
      $navMenuCont = $($(this).data('target'));
      $navMenuCont.animate({
        'width': 'toggle'
      }, 350);
      $(".menu-overlay").fadeIn(500);

    });
    $(".menu-overlay").click(function(event) {
      $(".navbar-toggle").trigger("click");
      $(".menu-overlay").fadeOut(500);
    });
</script>
<script id="script-init">
    var DATA_COUNT = 16;
    var labels = [];

    Samples.srand(4);

    for (var i = 0; i < DATA_COUNT; ++i) {
        labels.push('' + i);
    }

    Chart.helpers.merge(Chart.defaults.global, {
        aspectRatio: 4 / 3,
        tooltips: false,
        layout: {
            padding: {
                top: 32,
                right: 24,
                bottom: 20,
                left: 0
            }
        },
        elements: {
            line: {
                fill: true
            }
        },
        plugins: {
            legend: false,
            title: false
        }
    });
</script>

<script id="script-construct">
    var chart = new Chart('chart-0', {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                backgroundColor: Samples.color(0),
                borderColor: Samples.color(0),
                data: Samples.numbers({
                    count: DATA_COUNT,
                    min: -100,
                    max: 100
                })
            }]
        },
        options: {
            plugins: {
                datalabels: {
                    align: function(context) {
                        var index = context.dataIndex;
                        var curr = context.dataset.data[index];
                        var prev = context.dataset.data[index - 1];
                        var next = context.dataset.data[index + 1];
                        return prev < curr && next < curr ? 'end' :
                            prev > curr && next > curr ? 'start' :
                            'center';
                    },
                    backgroundColor: 'rgba(255, 255, 255, 0.7)',
                    borderColor: 'rgba(128, 128, 128, 0.7)',
                    borderRadius: 4,
                    borderWidth: 1,
                    color: function(context) {
                        var i = context.dataIndex;
                        var value = context.dataset.data[i];
                        var prev = context.dataset.data[i - 1];
                        var diff = prev !== undefined ? value - prev : 0;
                        return diff < 0 ? Samples.color(0) :
                            diff > 0 ? Samples.color(1) :
                            'gray';
                    },
                    font: {
                        size: 11,
                        weight: 600
                    },
                    offset: 8,
                    formatter: function(value, context) {
                        var i = context.dataIndex;
                        var prev = context.dataset.data[i - 1];
                        var diff = prev !== undefined ? prev - value : 0;
                        var glyph = diff < 0 ? '\u25B2' : diff > 0 ? '\u25BC' : '\u25C6';
                        return glyph + ' ' + Math.round(value);
                    }
                }
            }
        }
    });
</script>

<script id="script-init1">
    var DATA_COUNT = 5;
    var labels = [
        'Earth',
        'Mars',
        'Saturn',
        'Jupiter',
        'Others'
    ];

    Samples.srand(0);

    Chart.helpers.merge(Chart.defaults.global, {
        aspectRatio: 4 / 3,
        tooltips: false,
        layout: {
            padding: {
                top: 32,
                right: 24,
                bottom: 20,
                left: 0
            }
        },
        elements: {
            line: {
                fill: false
            }
        },
        plugins: {
            legend: false,
            title: false
        }
    });
</script>

<script id="script-construct1">
    var chart = new Chart('chart-1', {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                backgroundColor: Samples.color(0),
                data: Samples.numbers({
                    count: DATA_COUNT,
                    min: 0,
                    max: 100
                })
            }]
        },
        options: {
            plugins: {
                datalabels: {
                    align: 'end',
                    anchor: 'end',
                    color: function(context) {
                        return context.dataset.backgroundColor;
                    },
                    font: function(context) {
                        var w = context.chart.width;
                        return {
                            size: w < 512 ? 12 : 14
                        };
                    },
                    formatter: function(value, context) {
                        return context.chart.data.labels[context.dataIndex];
                    }
                }
            },
            scales: {
                xAxes: [{
                    display: false,
                    offset: true
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

</body>
</html>