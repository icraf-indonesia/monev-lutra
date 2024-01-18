<div class="sidebar-menu">
  <ul>
    <li class="active">
        <a href="{{ url('') }}/capaian/tahunan"><b>Gambaran Umum</b></a>
    </li>
    @if (Auth::check())
        <li>
            <a href="{{ url('') }}/lahan/tahunan"><b>Alokasi dan Tata Guna Lahan</b></a>
        </li>
        <li>
            <a href="{{ url('') }}/modal/tahunan"><b>Akses Modal Penghidupan</b></a>
        </li>
        <li>
            <a href="{{ url('') }}/produktivitas/tahunan"><b>Produktivitas dan Diversifikasi</b></a>
        </li>
        <li>
            <a href="{{ url('') }}/rantainilai/tahunan"><b>Rantai Nilai</b></a>
        </li>
        <li>
            <a href="{{ url('') }}/jasaekosistem/tahunan"><b>Jasa Ekosistem</b></a>
        </li>
    @endif
  </ul>
</div>
