
@extends('header')

@section('page_title', 'Kelola Alokasi Lahan')

@section('content')
    <div class="row" style="max-width: 1000px; margin: auto;">
        <div class="col-lg-12 col-md-12 col-sm-12 dct-appoinment">
            <div class="row">
                <div class="col-md-12">
                    {{-- <h3>Penambahan</h3> --}}
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Input gagal.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <ul class="nav nav-tabs paitent-app-tab">
                        <li><a href="/admin">Kembali</a></li>
                        <li class="active"><a href="">Kelola Tahun</a></li>
                        <li><a href="{{url('')}}/admin/agroforestri/kakao">Luas Agroforestri Kakao</a></li>
                        <li><a href="{{url('')}}/admin/alokasi/kakao">Luas Alokasi Lahan Kakao</a></li>
                        <li><a href="{{url('')}}/admin/kawasan/hutan">Luas Kawasan Hutan</a></li>
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">

                        {{-- tab insert kegiatan  --}}
                        <div class="tab-pane active" id="tambah-periode">
                            <form class="page-box" method="post" action="/admin/lahan/store_tahun">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Tahun</label>
                                    <div class="col-lg-6">
                                        <input name="tahun" class="date-own form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-lg-3 m-t-4">
                                        <button class="btn btn-primary submit-btn" type="submit">Tambah</button>
                                    </div>
                                </div>
                            </form>

                            <div class="table-responsive">
                                <table id="tabel-data" class="table table-bordered table-striped"
                                    style="width:100%; border:0; font-size:12;">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Periode</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tahun as $t)
                                            <tr>
                                                <td width="1%">{{ (($tahun->currentPage() * 10) - 10) + $loop->iteration }}</td>
                                                <td width="5%">{{ $t->tahun }}</td>
                                                <td width="2%">
                                                    <form action="/admin/lahan/{{ $t->tahun }}" method="post" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="custom-badge status-red text-right bg-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                    </form>
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
        </div>
    </div>
@stop

@section('customJSLibrary')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
@stop

@section('customJS')
$('.date-own').datetimepicker({
    viewMode: 'years',
    format: 'YYYY'
});

function getFormattedDate(date) {
    var year1 = date.getFullYear();
    var year2 = date.getFullYear() + 1;
    return year1 + '-' + year2;
}
@stop


