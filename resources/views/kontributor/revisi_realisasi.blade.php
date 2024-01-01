@extends('header')

@section('page_title', 'Revisi Realisasi Kegiatan')

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
                        <li><a href="/kontributor/realisasi">Kembali</a></li>
                        <li class="active"><a href="#edit-realisasi" data-toggle="tab">Revisi Realisasi Kegiatan</a></li>
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">
                        <div class="tab-pane active" id="edit-realisasi">
                            <form class="page-box" method="post" action="/kontributor/realisasi/{{ $data->id }}">
                                @csrf
                                @method('put')
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Kegiatan</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="kegiatan" value="{{ old('kegiatan', $data->kegiatan) }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Target Volume</label>
                                    <div class="col-lg-9">
                                        <input class="form-control @error('target_volume') is-invalid @enderror" type="text" name="target_volume" value="{{ old('target_volume', $data->target_volume) }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Target Anggaran</label>
                                    <div class="col-lg-9">
                                        <input class="form-control @error('target_anggaran') is-invalid @enderror" type="text" name="target_anggaran" value="{{ old('target_anggaran', $data->target_anggaran) }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Periode</label>
                                    <div class="col-lg-9">
                                        From <input name="periode1" class="date-own" placeholder="" type="text" value="{{ old('periode1', $data->periode1) }}">
                                        To <input name="periode2" class="date-own" placeholder="" type="text" value="{{ old('periode2', $data->periode2) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Realisasi Volume</label>
                                    <div class="col-lg-9">
                                        <input class="form-control @error('realisasi_volume') is-invalid @enderror" type="text" name="realisasi_volume" value="{{ old('realisasi_volume', $data->realisasi_volume) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Realisasi Anggaran</label>
                                    <div class="col-lg-9">
                                        <input class="form-control @error('realisasi_anggaran') is-invalid @enderror" type="text" name="realisasi_anggaran" value="{{ old('realisasi_anggaran', $data->realisasi_anggaran) }}">
                                        <input name="entered_by" type="hidden" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button class="btn btn-primary submit-btn" type="submit">Revisi</button>
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

