@extends('header')

@section('page_title', 'Ubah Target Kegiatan')

@section('content')
    <div class="row" style="max-width: 1000px; margin: auto;">
        <div class="col-lg-12 col-md-12 col-sm-12 dct-appoinment">
            <div class="row">
                <div class="col-md-12">
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
                        <li class="active"><a href="#edit-target" data-toggle="tab">Ubah Target Kegiatan</a></li>
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">
                        <div class="tab-pane active" id="edit-target">
                            <form class="page-box" method="post" action="/admin/kegiatan/{{ $data->id }}/{{ $data->id_periode }}">
                                @csrf
                                @method('put')
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Periode</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="periode" value="{{ old('periode', $data->periode) }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Kegiatan</label>
                                    <div class="col-lg-9">
                                        <textarea class="form-control @error('kegiatan') is-invalid @enderror" name="kegiatan" rows="5" disabled>{{ old('kegiatan', $data->kegiatan) }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Nomenklatur Kegiatan</label>
                                    <div class="col-lg-9">
                                        <textarea class="form-control @error('nomenklatur') is-invalid @enderror" name="nomenklatur" rows="5">{{ old('nomenklatur', $data->nomenklatur) }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Indikator</label>
                                    <div class="col-lg-9">
                                        <textarea class="form-control @error('indikator_kegiatan') is-invalid @enderror" name="indikator_kegiatan" rows="5">{{ old('indikator_kegiatan', $data->indikator_kegiatan) }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Target Volume</label>
                                    <div class="col-lg-9">
                                        <input name="target_volume" class="form-control @error('target_volume') is-invalid @enderror" type="text" value="{{ old('target_volume', $data->target_volume) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Target Anggaran</label>
                                    <div class="col-lg-9">
                                        <input name="target_anggaran" class="form-control @error('target_anggaran') is-invalid @enderror" type="text" value="{{ old('target_anggaran', $data->target_anggaran) }}">
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
