@extends('header')

@section('page_title', 'Tambah Realisasi Kegiatan')

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
                        <li><a href="{{url('')}}/kontributor">Daftar Input Capaian</a></li>
                        @if (Auth::check())
                            @if (Auth::user()->role === "kontributor")
                            <li><a href="{{url('')}}/kontributor/capaian/tambah">Tambah Capaian</a></li>
                            @endif
                        @endif
                        <li><a href="{{url('')}}/kontributor/realisasi">Daftar Realisasi Kegiatan</a></li>
                        @if (Auth::check())
                            @if (Auth::user()->role !== "others")
                            <li class="active"><a href="{{url('')}}/kontributor/realisasi/tambah">Tambah Realisasi Kegiatan</a></li>
                            @endif
                        @endif
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">

                        {{-- tab insert kegiatan  --}}
                        <div class="tab-pane active" id="tambah-kegiatan">
                            <form class="page-box" method="post" action="/kontributor/store_realisasi">
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
                                    <label class="col-lg-3 col-form-label">Nomenklatur Kegiatan</label>
                                    <div class="col-lg-9">
                                        <input name="nomenklatur" class="form-control" placeholder="" type="text" disabled id="nomenklatur">
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
                                        <input name="entered_by" type="hidden" value="{{ Auth::user()->name }}">
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
                        document.getElementById('target_volume').value = data5["target_volume"];
                        document.getElementById('target_anggaran').value = data5["target_anggaran"];
                        document.getElementById('nomenklatur').value = data5["nomenklatur"];
                    });
                }
            });
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


