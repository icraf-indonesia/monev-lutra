@extends('header')

@section('page_title', 'Tambah Artikel')

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
                        <li><a href="{{url('')}}/admin/artikel">Daftar Artikel</a></li>
                        <li class="active"><a href="{{url('')}}/admin/artikel/tambah">Tambah Artikel</a></li>
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">
                        <form class="page-box" method="post" action="/admin/artikel/store">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Judul Artikel</label>
                                <div class="col-lg-9">
                                    <input name="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Isi Artikel</label>
                                <div class="col-lg-9">
                                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" rows="15" name="deskripsi"></textarea>
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
@stop

