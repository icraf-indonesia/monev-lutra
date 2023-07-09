@extends('header')

@section('css')
<style>
    * {
      box-sizing: border-box;
    }
    
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
    
    /* Style the header */
    header {
      background-color: #666;
      padding: 30px;
      text-align: center;
      font-size: 35px;
      color: white;
    }
    
    /* Container for flexboxes */
    section {
      display: -webkit-flex;
      display: flex;
    }
    
    /* Style the navigation menu */
    nav {
      -webkit-flex: 1;
      -ms-flex: 1;
      flex: 1;
      background: #ccc;
      padding: 20px;
    }
    
    /* Style the list inside the menu */
    nav ul {
      list-style-type: none;
      padding: 0;
    }
    
    /* Style the content */
    article {
      -webkit-flex: 3;
      -ms-flex: 3;
      flex: 3;
      /* background-color: #f1f1f1; */
      background-color: white;
      padding: 10px;
    }
    
    /* Style the footer */
    footer {
      background-color: #777;
      padding: 10px;
      text-align: left;
      color: white;
    }
    
    /* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
    @media (max-width: 600px) {
      section {
        -webkit-flex-direction: column;
        flex-direction: column;
      }
    }
    
    .aligncenter {
    text-align: center;
    }
    </style>
@stop

@section('content')
<header>
  <h2>Selayang Pandang Kakao Luwu Utara</h2>
</header>

<section>
  {{-- <nav>
    <ul>
      <li><a href="#section1">London</a></li>
      <li><a href="#section2">Paris</a></li>
      <li><a href="#section3">Tokyo</a></li>
    </ul>
  </nav> --}}
  
  <article>
    <h4 id="section1">Mengenal Kakao di Indonesia</h4>
    <p>Kakao merupakan salah satu komoditas unggulan perkebunan di Indonesia yang menempati urutan ke lima produksi terbesar setelah kelapa sawit, karet, kopi, dan kelapa (BPS, 2019). Sebagai salah satu komoditas unggulan ekspor, produksi kakao juga menyumbang cukup signifikan terhadap kontribusi ekonomi pertanian. Indonesia merupakan eksportir terbesar kakao ketiga di dunia setelah Ghana dan Pantai Gading. Namun selama tahun 2013 sampai 2017, produksi kakao di Indonesia menunjukkan penurunan baik dari luasan lahan maupun volume ekspor. Hal ini juga diakibatkan oleh tidak optimalnya pengelolaan kebun, tingginya serangan hama, dan penurunan produksi serta pendapatan petani kakao (Wijayanto, 2019).</p>
    <h4 id="section2">Luwu Utara sebagai Lumbung Kakao</h4>
    <p>Sulawesi Selatan merupakan salah satu provinsi produsen kakao terbesar di Indonesia. Sebagai kabupaten terluas di Sulawesi Selatan, produksi kakao di Luwu Utara sangat signifikan. Perekonomian di Luwu Utara ditopang oleh sektor berbasis lahan, termasuk kakao, dengan kontribusi sebesar 47.02% terhadap PDRB tahun 2020.</p>
    <p>Kejayaan kakao Luwu Utara mencapai puncak pada tahun 2011 saat dicanangkan sebagai daerah sentra kakao Indonesia. Pada tahun 2009, Kabupaten Luwu Utara memiliki lahan kakao seluas 56.000 ha, namun saat ini luas kakao hanya mencapai 38.435 ha. Meskipun demikian, kebun kakao masih menjadi sumber penghidupan utama sebagian besar petani.</p>
    <p class="aligncenter">
        <img src="dist/img/tabelbps.png" alt="">
    </p>
    <p style="text-align:center;"><i>Persebaran luas dan produksi kakao berdasarkan kecamatan di Kabupaten Luwu Utara (BPS, 2021)</i></p>

    <h4 id="section3">Analisis Location Quotient (LQ)</h4>
    <p>Analisis location quetient (LQ) digunakan untuk mengindentifikasi komoditas unggulan di Kabupaten Luwu Utara relatif terhadap Provinsi Sulawesi Selatan. Analisis ini dilakukan berdasarkan besaran produksi dalam ton dari tahun 2016-2021. Terdapat dua komoditas yang merupakan sektor basis di Luwu Utara yaitu kelapa sawit dan kakao. Meskipun LQ kelapa sawit menunjukkan nilai paling besar, namun DLQ atau laju pertumbuhan produksi kakao menunjukkan nilai yang lebih besar dibandingkan kelapa sawit.</p>
    <p class="aligncenter">
        <img src="dist/img/graph1.png" alt="centered image" style="width:75%;">
    </p>
    <p style="text-align:center;"><i>Nilai LQ Komoditas Unggulan Luwu Utara</i></p>
  </article>    
</section>

<header>
    <h2>Pendekatan Pembangunan Peta Jalan Kakao Lestari Luwu Utara</h2>
</header>
  
<section>    
    <article>
    <h4>Prinsip Penyusunan Peta Jalan Kakao Lestari</h4>
    <p class="aligncenter">
        <img src="dist/img/prinsip.png" alt="centered image" style="width:50%;">
    </p>
    <h4>Prinsip Penyusunan Peta Jalan Kakao Lestari</h4>
    <p class="aligncenter">
        <img src="dist/img/alurkerja.png" alt="centered image" style="width:50%;">
    </p>
    <h4>Tahapan penyusunan Peta Jalan Kakao Lestari</h4>
    <p class="aligncenter">
        <img src="dist/img/tahapan.png" alt="centered image" style="width:50%;">
    </p>
    <h4>Keterhubungan Peta Jalan Kakao Lestari dengan standar pengelolaan kakao di tingkat nasional dan global</h4>
    <p>Peta Jalan Kakao Lestari memiliki relevansi dan bersinergi dengan berbagai standar pengelolaan kakao yang berlaku di tingkat nasional maupun global. Indikator yang digunakan dalam penilaian capaian strategi dan intervensi Peta Jalan Kakao Lestari dapat dipetakan dalam berbagai standar peniliaian keberlanjutan di tingkat jurisdiksi. Terdapat empat (4) standar penilaian keberlanjutan yang digunakan dalam studi ini yaitu <a href="https://terpercaya.inobu.org/">Terpercaya</a>, <a href="https://www.landscale.org/">LandScale</a>, <a href="https://sourceup.org/">SourceUp</a>, dan <a href="{{url('')}}">Kerangka Daya Saing Daerah (KDSD)</a>. Selain itu, indikator Peta Jalan Kakao Lestari juga disandingkan dengan Indikator Kinerja Utama dan Indikator Kinerja Daerah Kabupaten Luwu Utara. Pemetaan indikator tersebut dapat diakses pada Bagian <a href="{{url('')}}/indikator">Indikator</a>.</p>
    </article>
</section>


@stop