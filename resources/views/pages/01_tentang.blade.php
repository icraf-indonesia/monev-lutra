@extends('header')

@section('css')
<style type="text/css">
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  overflow-x: hidden; /* Hide horizontal scrollbar */
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding in columns */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  margin-top: 15px;
  text-align: center;
  background-color: #f1f1f1;
  height: 1000px;
}

p{
  text-align: left;
}

/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
</style>
@stop

@section('content')
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-12 dct-dashbd-lft hidden-xs hidden-sm">
    <h4><b>Apa itu Monev Luwu Utara?</b></h4>
        <img src="dist/img/8.jpg" alt="" style="padding-bottom: 20px;">
        <p>Alat bantu Monev Luwu Utara merupakan alat bantu yang digunakan untuk melakukan monitoring dan evaluasi terhadap kemajuan pelaksanaan strategi dan intervensi peta jalan kakao lestari. Alat bantu Monev Luwu Utara mengukur tingkat keberlanjutan pengelolaan kakao di Kabupaten Luwu Utara berdasarkan indikator intervensi peta jalan kakao Lestari yang dirumuskan secara inklusif bersama para pihak di Kabupaten Luwu Utara, termasuk pemerintah daerah, CSO, petani dan masyarakat, dan perguruan tinggi. Monitoring dan evaluasi peta jalan kakao lestari menggunakan pendekatan keberlanjutan di tingkat yurisdiksi.
        </p>             
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12 dct-dashbd-lft hidden-xs hidden-sm">
    <h4><b>Manfaat Monev Luwu Utara</b></h4>
        <img src="dist/img/6.jpg" alt="" style="padding-bottom: 20px;">
        <p>1. Alat bantu monev kakao Luwu Utara diharapkan dapat membantu pemerintah dalam memantau pelaksanaan pengelolaan kakao berkelanjutan di Luwu Utara. Indikator pengukuran yang digunakan tidak hanya di terkait komoditas kakao, namun mencakup indikator keberlanjutan di tingkat lanskap.</p>
        <p>2. Indikator peta jalan kakao lestari sudah dipetakan ke dalam IKU, IKK, serta standar keberlanjutan lain yaitu Terpercaya, LandScale, SourceUp, dan KDSD. Alat bantu ini memudahkan pemerintah untuk memenuhi berbagai standar keberlanjutan yang ada.</p>
        <p>3. Alat bantu monev membantu mengkomunikasikan capaian keberlanjutan pengelolaan kakao di Luwu Utara kepada pemerintah provinsi, pusat, maupun pembeli.</p>            
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12 dct-dashbd-lft hidden-xs hidden-sm">
    <h4><b>Pendekatan Monitoring dan Evaluasi</b></h4>
        <img src="dist/img/10.jpg" alt="" style="padding-bottom: 20px;">
        <p>Monitoring dan evaluasi peta jalan kakao lestari Kabupaten Luwu Utara dibangun menggunakan pendekatan jurisdiksi. Jurisdiksi adalah unit politik baik di itngkat nasional maupun sub-nasional. Pada kasus ini jurisdiksi yang dimaksud adalah tingkat kabupaten. Pendekatan pengelolaan komoditas berdasarkan jurisdiksi merupakan perpaduan antara pendekatan perencanaan wilayah dimana pemerintah menentukan area lindung dan budidaya (<i>go or no-go area</i>) dan pendekatan sertifikasi komoditas berkelanjutan. Deskripsi pendekatan jurisdiksi:</p>
        <p>1. Melibatkan perusahaan yang berkomitmen membeli komoditas berkelanjutan</p>
        <p>2. Melibatkan pemerintah yang menetapkan area lindung dan budidaya</p>
        <p>3. Apabila jurisdiksi dinyatakan memiliki pengelolaan komoditas berkelanjutan, maka seluruh produsen menyandang predikat serupa</p>
        <p>4. Ada insentif bagi produsen utunk memetuhi aturan secara kolektif</p>            
  </div>
  {{-- <div class="col-lg-3 col-md-3 col-sm-12 dct-dashbd-lft hidden-xs hidden-sm">
    <h6><b>Peta Jalan Kakao Lestari</b></h6>
        <img src="dist/img/7.jpg" alt="" style="padding-bottom: 20px;">
        <p>Peta jalan kakao lestari Kabupaten Luwu Utara memuat strategi, intervensi, kegiatan pengelolaan kakao berkelanjutan dalam jangka waktu 20 tahun (2022-2042). Selain itu, peta jalan kakao lestari dilengkapi dengan skenario pengembangan kakao lestari yang dianalisis secara spasial dan proyeksi dampak skenario di masa depan. Terdapat 5 strategi pengelolaan kakao lestari di Kabupaten Luwu Utara:</p>
        <p>1. Alokasi dan tata guna lahan berkelanjutan</p>
        <p>2. Peningkatan akses masyarakat terutama petani kakao terhadap modal penghidupan</p>
        <p>3. Peningkatan produktivitas dan diversifikasi produk kakao</p>
        <p>4. Perbaikan rantai pasok yang berkelanjutan</p>
        <p>5. Insentif jasa ekosistem dari kakao berkelanjutan</p>
        <a href="https://drive.google.com/drive/folders/197HPAE5qYCtIFvcqrPlkYTFMxQdMtoPY?usp=sharing"><u>Selengkapnya...</u></a>            
  </div> --}}
</div>
@stop

@section('js')
@stop