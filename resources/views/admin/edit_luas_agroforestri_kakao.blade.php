@extends('header')

@section('page_title', 'Ubah Luas Agroforestri Kakao')

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
                        <li><a href="/admin/agroforestri/kakao">Kembali</a></li>
                        <li class="active"><a href="#edit-target" data-toggle="tab">Ubah Luasan</a></li>
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">
                        <div class="tab-pane active" id="edit-target">
                            <form class="page-box" method="post" action="/admin/agroforestri/kakao/{{ $data->id }}/{{ $data->tahun }}">
                                @csrf
                                @method('put')
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Kecamatan</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="kecamatan" value="{{ old('kecamatan', $data->kecamatan) }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Luas</label>
                                    <div class="col-lg-9">
                                        <input name="luas" class="form-control @error('luas') is-invalid @enderror" type="text" value="{{ old('luas', $data->luas) }}">
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
