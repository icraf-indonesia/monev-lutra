<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: #1A5E51; 
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: #1A5E51;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: #eee;
  width: 50%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: black;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #1A5E51;
  color: white;
}

.subnav:hover .subnav-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="{{url('')}}/">Beranda</a>
    <div class="subnav">
        <button class="subnavbtn">Peta Jalan <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="{{url('')}}/aboutroadmap">Selayang Pandang</a>
            <a href="{{url('')}}/pendekatan">Pendekatan Pembangunan</a>
            <a href="{{url('')}}/isu">Isu Strategis, Visi, dan Ruang Lingkup</a>
            <a href="{{url('')}}/petajalan">Peta Jalan Kakao Lestari</a>
        </div>
    </div> 
  <a href="{{url('')}}/indikator">Indikator</a>
  <a href="{{url('')}}/gambaran_umum_tahunan">Profil Jurisdiksi</a>
  <a href="{{url('')}}/kelembagaan">Kelembagaan</a>
</div>

</body>
</html>