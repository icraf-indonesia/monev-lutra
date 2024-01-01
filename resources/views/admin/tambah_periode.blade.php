
@extends('header')

@section('page_title', 'Tambah Periode')

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
                        <li><a href="/admin/kegiatan">Kembali</a></li>
                        <li class="active"><a href="#tambah-periode" data-toggle="tab">Tambah Periode</a></li>
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">

                        {{-- tab insert kegiatan  --}}
                        <div class="tab-pane active" id="tambah-periode">
                            <form class="page-box" method="post" action="/admin/kegiatan/store_periode">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Periode</label>
                                    <div class="col-lg-9">
                                        From <input name="periode1" class="date-own" placeholder="" type="text">
                                        To <input name="periode2" class="date-own" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button class="btn btn-primary submit-btn" type="submit">Tambah</button>
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


