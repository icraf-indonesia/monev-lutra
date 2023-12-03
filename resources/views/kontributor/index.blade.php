@extends('header')

@section('page_title', 'Kelola Capaian')

@section('content')
    <div class="row" style="max-width: 1600px; margin: auto;">
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
                        <li class="active"><a href="#a" data-toggle="tab">Daftar Input Capaian</a></li>
                        <li><a href="#b" data-toggle="tab">Tambah Capaian</a></li>
                        <li><a href="#c" data-toggle="tab">Daftar Input Kegiatan</a></li>
                        <li><a href="#d" data-toggle="tab">Tambah Kegiatan</a></li>
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">
                        <div class="tab-pane active" id="a">
                                <div class="table-responsive">
                                    <table id="tabel-data" class="table table-bordered table-striped"
                                        style="width:100%; border:0; font-size:12;">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Indikator</th>
                                                <th>Tahun</th>
                                                <th>Target</th>
                                                <th>Capaian</th>
                                                <th>Satuan</th>
                                                <th>Dokumen</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($tables))
                                                @foreach ($tables as $table)
                                                    <tr>
                                                        <td width="1%">{{ (($tables->currentPage() * 10) - 10) + $loop->iteration }}</td>
                                                        <td width="10%">{{ $table->indikator }}</td>
                                                        <td width="1%">{{ $table->tahun }}</td>
                                                        <td width="1%">{{ $table->target }}</td>
                                                        <td width="2%">{{ $table->capaian }}</td>
                                                        <td width="2%">{{ $table->satuan }}</td>
                                                        @if (empty($table->dokumen))
                                                            <td width="2%">Belum ada dokumen</td>
                                                        @else
                                                            <td width="2%"><a href="{{url('/dokumen/'.$table->dokumen)}}" target="_blank">{{$table->dokumen}}</a></td>
                                                        @endif
                                                        <td width="1%">
                                                            @if($table->status === 0)
                                                                <span class="badge rounded-pill" style="background-color: #0d6efd !important;color: #fff;">Menunggu</span>
                                                            @elseif($table->status === 1)
                                                                <span class="badge rounded-pill" style="background-color: #198754 !important;color: #fff;">Diterima</span>
                                                            @else
                                                                <span class="badge rounded-pill" style="background-color: #dc3545 !important;color: #fff;">Revisi</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                            <tbody>
                                                <tr>
                                                    <td>Tidak ada data</td>
                                                </tr>
                                            </tbody>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                <br />
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="{{ $tables->url($tables->onFirstPage()) }}">First</a></li>
                                        <li class="page-item"><a class="page-link" href="{{ $tables->previousPageUrl() }}">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">{{ $tables->currentPage() }}</a></li>
                                        <li class="page-item"><a class="page-link" href="{{ $tables->nextPageUrl() }}">Next</a></li>
                                        <li class="page-item"><a class="page-link" href="{{ $tables->url($tables->lastPage()) }}">Last</a></li>
                                    </ul>
                                </nav>
                        </div>

                        {{-- tab insert capaian  --}}
                        <div class="tab-pane" id="b">
                            <form class="page-box" method="post" action="/kontributor/store_capaian" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Strategi</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select" name="strategi" id="strategi">
                                            <option value="">== Pilih Strategi ==</option>
                                            @foreach ($strategi as $s)
                                                <option value="{{$s->id}}">{{$s->strategi}}</option>
                                            @endforeach
                                        </select>
                                        <span class="form-text text-muted">Pilih salah satu <b>strategi</b> yang sesuai</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Intervensi</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select" name="intervensi" id="intervensi">
                                            <option value="">== Pilih Intervensi ==</option>
                                        </select>
                                        <span class="form-text text-muted">Pilih salah satu <b>intervensi</b> yang sesuai</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Indikator</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select" name="indikator" id="indikator">
                                            <option value="">== Pilih Indikator ==</option>
                                        </select>
                                        <span class="form-text text-muted">Pilih salah satu <b>indikator</b> yang sesuai</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Tahun</label>
                                    <div class="col-lg-9">
                                        <input name="tahun" class="date-own form-control @error('tahun') is-invalid @enderror" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Capaian Indikator</label>
                                    <div class="col-lg-9">
                                        <input name="capaian" class="form-control @error('capaian') is-invalid @enderror" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Satuan</label>
                                    <div class="col-lg-9">
                                        <input name="satuan" class="form-control" placeholder="" type="text" disabled id="satuan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Upload Dokumen</label>
                                    <div class="col-lg-9">
                                        <input class="form-control @error('dokumen') is-invalid @enderror" type="file" name="dokumen" >
                                        <span class="form-text text-muted" id="dokumenPendukung">Catatan:</span><span class="form-text text-muted"> (Ukuran file max. 5 mb)</span>
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button class="btn btn-primary submit-btn" type="submit">Tambah Capaian</button>
                                </div>
                            </form>
                        </div>

                        {{-- tab daftar kegiatan  --}}
                        <div class="tab-pane" id="c">
                            <div class="table-responsive">
                                <table id="tabel-data" class="table table-bordered table-striped"
                                    style="width:100%; border:0; font-size:12;">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kegiatan</th>
                                            <th>Periode</th>
                                            <th>Target Volume</th>
                                            <th>Target Anggaran</th>
                                            <th>Diisi oleh</th>
                                            <th>Realisasi Volume</th>
                                            <th>Realisasi Anggaran</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($tables))
                                            @foreach ($tables as $table)
                                                <tr>
                                                    <td width="1%">{{ (($tables->currentPage() * 10) - 10) + $loop->iteration }}</td>
                                                    <td width="10%">{{ $table->indikator }}</td>
                                                    <td width="1%">{{ $table->tahun }}</td>
                                                    <td width="1%">{{ $table->target }}</td>
                                                    <td width="2%">{{ $table->capaian }}</td>
                                                    <td width="2%">{{ $table->satuan }}</td>
                                                    @if (empty($table->dokumen))
                                                        <td width="2%">Belum ada dokumen</td>
                                                    @else
                                                        <td width="2%"><a href="{{url('/dokumen/'.$table->dokumen)}}" target="_blank">{{$table->dokumen}}</a></td>
                                                    @endif
                                                    <td width="1%">
                                                        @if($table->status === 0)
                                                            <span class="badge rounded-pill" style="background-color: #0d6efd !important;color: #fff;">Menunggu</span>
                                                        @elseif($table->status === 1)
                                                            <span class="badge rounded-pill" style="background-color: #198754 !important;color: #fff;">Diterima</span>
                                                        @else
                                                            <span class="badge rounded-pill" style="background-color: #dc3545 !important;color: #fff;">Revisi</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                        <tbody>
                                            <tr>
                                                <td>Tidak ada data</td>
                                            </tr>
                                        </tbody>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                                <br />
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="{{ $tables->url($tables->onFirstPage()) }}">First</a></li>
                                        <li class="page-item"><a class="page-link" href="{{ $tables->previousPageUrl() }}">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">{{ $tables->currentPage() }}</a></li>
                                        <li class="page-item"><a class="page-link" href="{{ $tables->nextPageUrl() }}">Next</a></li>
                                        <li class="page-item"><a class="page-link" href="{{ $tables->url($tables->lastPage()) }}">Last</a></li>
                                    </ul>
                                </nav>
                        </div>

                        {{-- tab insert kegiatan  --}}
                        <div class="tab-pane" id="d">
                            <form class="page-box" method="post" action="/kontributor/store_kegiatan">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Strategi</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select" name="strategi2" id="strategi2">
                                            <option value="">== Pilih Strategi ==</option>
                                            @foreach ($strategi as $s)
                                                <option value="{{$s->id}}">{{$s->strategi}}</option>
                                            @endforeach
                                        </select>
                                        <span class="form-text text-muted">Pilih salah satu <b>strategi</b> yang sesuai</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Intervensi</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select" name="intervensi2" id="intervensi2">
                                            <option value="">== Pilih Intervensi ==</option>
                                        </select>
                                        <span class="form-text text-muted">Pilih salah satu <b>intervensi</b> yang sesuai</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Lembaga</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select" name="lembaga" id="lembaga">
                                            <option value="">== Pilih Lembaga ==</option>
                                            @foreach ($lembaga as $l)
                                                <option value="{{$l->id}}">{{$l->lembaga}}</option>
                                            @endforeach
                                        </select>
                                        <span class="form-text text-muted">Pilih salah satu <b>lembaga</b> yang sesuai</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Periode</label>
                                    <div class="col-lg-9">
                                        From <input name="periode1" class="date-own" placeholder="" type="text">
                                        To <input name="periode2" class="date-own" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Kegiatan</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select" name="kegiatan" id="kegiatan">
                                            <option value="">== Pilih Kegiatan ==</option>
                                        </select>
                                        <span class="form-text text-muted">Pilih salah satu <b>kegiatan</b> yang sesuai</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Target Volume</label>
                                    <div class="col-lg-9">
                                        <input name="target_volume" class="form-control" placeholder="" type="text" disabled id="target_volume">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Target Anggaran</label>
                                    <div class="col-lg-9">
                                        <input name="target_anggaran" class="form-control" placeholder="" type="text" disabled id="target_anggaran">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Realisasi Volume</label>
                                    <div class="col-lg-9">
                                        <input name="realisasi_volume" class="form-control @error('realisasi_volume') is-invalid @enderror" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Realisasi Anggaran</label>
                                    <div class="col-lg-9">
                                        <input name="realisasi_anggaran" class="form-control @error('realisasi_anggaran') is-invalid @enderror" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button class="btn btn-primary submit-btn" type="submit">Tambah Kegiatan</button>
                                </div>
                            </form>
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
$(document).ready(function() {
    $('select[name="strategi"]').on('change', function() {
        var strategiID = $(this).val();
        if(strategiID) {
            $.ajax({
                url: '/intervensi/' + strategiID,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('select[name="intervensi"]').empty();
                    $('select[name="intervensi"]').append('<option value="">== Pilih Intervensi ==</option>');
                    $.each(data, function(key, value) {
                        $('select[name="intervensi"]').append('<option value="'+ key +'">'+ value +'</option>');
                    });
                }
            });
        } else {
            $('select[name="intervensi"]').empty();
        }
    });

    $('select[name="strategi2"]').on('change', function() {
        var strategiID = $(this).val();
        if(strategiID) {
            $.ajax({
                url: '/intervensi/' + strategiID,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('select[name="intervensi2"]').empty();
                    $('select[name="intervensi2"]').append('<option value="">== Pilih Intervensi ==</option>');
                    $.each(data, function(key, value) {
                        $('select[name="intervensi2"]').append('<option value="'+ key +'">'+ value +'</option>');
                    });
                }
            });
        } else {
            $('select[name="intervensi2"]').empty();
        }
    });

    $('select[name="intervensi"]').on('change', function() {
        var intervensiID = $(this).val();
        if(intervensiID) {
            $.ajax({
                url: '/indikator/' + intervensiID,
                type: "GET",
                dataType: "json",
                success: function(data2) {
                    $('select[name="indikator"]').empty();
                    $('select[name="indikator"]').append('<option value="">== Pilih Indikator ==</option>');
                    $.each(data2, function(key, value) {
                        $('select[name="indikator"]').append('<option value="'+ key +'">'+ value +'</option>');
                    });
                }
            });
        } else {
            $('select[name="indikator"]').empty();
        }
    });

    $('select[name="indikator"]').on('change', function() {
        var indikatorID = $(this).val();
        if(indikatorID) {
            $.ajax({
                url: '/satuan/' + indikatorID,
                type: "GET",
                dataType: "json",
                success: function(data3) {
                    {{-- console.log(data3); --}}
                    $.each(data3, function(key, value) {
                        //$('input[name="satuan"]').append(' value="'+ value +'">');
                        document.getElementById('satuan').value = key;
                        $('#dokumenPendukung').text(value);
                    });
                }
            });
        } else {
            $('input[name="satuan"]').empty();
        }
    });

    $('select[name="lembaga"]').on('change', function() {
        var lembagaID = $(this).val();
        var intervensiID = $('#intervensi2').val();
        {{-- var intervensiID = $("select[name='intervensi']").val(); --}}

        if(lembagaID) {
            $.ajax({
                url: '/kegiatan/' + intervensiID + '/' + lembagaID,
                type: "GET",
                dataType: "json",
                success: function(data4) {
                    $('select[name="kegiatan"]').empty();
                    $('select[name="kegiatan"]').append('<option value="">== Pilih Kegiatan ==</option>');
                    $.each(data4, function(key, value) {
                        $('select[name="kegiatan"]').append('<option value="'+ key +'">'+ value +'</option>');
                    });
                }
            });
        } else {
            $('input[name="kegiatan"]').empty();
        }
    });

    $('select[name="kegiatan"]').on('change', function() {
        var kegiatanID = $(this).val();
        if(kegiatanID) {
            $.ajax({
                url: '/target/' + kegiatanID,
                type: "GET",
                dataType: "json",
                success: function(data5) {
                    $.each(data5, function(key, value) {
                        document.getElementById('target_volume').value = value;
                        document.getElementById('target_anggaran').value = key;
                    });
                }
            });
        } else {
            $('input[name="satuan"]').empty();
        }
    });
});

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


