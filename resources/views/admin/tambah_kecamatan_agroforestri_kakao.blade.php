
@extends('header')

@section('page_title', 'Tambah Kecamatan')

@section('content')
    <div class="row" style="max-width: 1200px; margin: auto;">
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
                        <li><a href="/admin/agroforestri/kakao?tahun={{$tahun}}">Kembali</a></li>
                        <li class="active"><a href="">Tambah Kecamatan</a></li>
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">

                        {{-- tab insert kegiatan  --}}
                        <div class="tab-pane active" id="tambah-periode">
                            <form class="page-box" method="post" action="/admin/agroforestri/kakao/store_kecamatan">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Tahun</label>
                                    <div class="col-lg-9">
                                        <input name="tahun" class="form-control" type="text" value="{{ $tahun }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Kecamatan</label>
                                    <div class="col-lg-9">
                                        <input name="kecamatan" class="form-control @error('kecamatan') is-invalid @enderror" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Luas</label>
                                    <div class="col-lg-9">
                                        <input name="luas" class="form-control @error('luas') is-invalid @enderror" type="text" value="0">
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


