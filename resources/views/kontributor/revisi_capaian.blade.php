@extends('header')

@section('page_title', 'Revisi Input Capaian')

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
                        <li><a href="/kontributor">Kembali</a></li>
                        <li class="active"><a href="#edit-capaian" data-toggle="tab">Revisi Input Capaian</a></li>
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">
                        <div class="tab-pane active" id="edit-capaian">
                            <form class="page-box" method="post" action="/kontributor/capaian/{{ $data->id }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Indikator</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="indikator" value="{{ old('indikator', $data->indikator) }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Target</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="target" value="{{ old('target', $data->target) }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Tahun</label>
                                    <div class="col-lg-9">
                                        <input name="tahun" class="form-control @error('tahun') is-invalid @enderror" type="text" value="{{ old('tahun', $data->tahun) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Capaian Indikator</label>
                                    <div class="col-lg-9">
                                        <input name="capaian" class="form-control @error('capaian') is-invalid @enderror" type="text" value="{{ old('capaian', $data->capaian) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Satuan</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="satuan" value="{{ old('satuan', $data->satuan) }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Dokumen Terunggah</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="dokumen" value="{{ old('dokumen', $data->dokumen) }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Upload Revisi Dokumen Pendukung</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="file" name="newdok" >
                                        <span class="form-text text-muted">Catatan:</span><span class="form-text text-muted"> (Ukuran file max. 5 mb)</span>
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button class="btn btn-primary submit-btn" type="submit">Revisi Capaian</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
