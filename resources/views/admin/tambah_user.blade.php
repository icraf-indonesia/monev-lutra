@extends('header')

@section('page_title', 'Tambah User')

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
                        <li><a href="{{url('')}}/admin/user">Daftar User</a></li>
                        <li class="active"><a href="{{url('')}}/admin/user/tambah">Tambah User</a></li>
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">
                        <form class="page-box" method="post" action="/admin/user/store">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Nama</label>
                                <div class="col-lg-9">
                                    <input name="name" class="form-control @error('name') is-invalid @enderror" placeholder="" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Username</label>
                                <div class="col-lg-9">
                                    <input name="username" class="form-control @error('username') is-invalid @enderror" placeholder="" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Email</label>
                                <div class="col-lg-9">
                                    <input name="email" class="form-control @error('email') is-invalid @enderror" placeholder="" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Peran</label>
                                <div class="col-lg-9">
                                    <select class="form-control select" name="role" id="role">
                                        <option value="">== Pilih Peran ==</option>
                                        <option value="admin">admin</option>
                                        <option value="kontributor">kontributor teknis pemda - full</option>
                                        <option value="kegiatan">kontributor teknis pemda - kegiatan</option>
                                        <option value="others">kontributor teknis non pemda</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Password</label>
                                <div class="col-lg-9">
                                    <input name="password" class="form-control @error('password') is-invalid @enderror" placeholder="" type="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Instansi</label>
                                <div class="col-lg-9">
                                    <select class="form-control select" name="id_stakeholder" id="id_stakeholder">
                                        <option value="">== Pilih Instansi ==</option>
                                        @foreach ($stakeholder as $s)
                                            <option value="{{ $s->id }}">{{ $s->stakeholder }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Lembaga</label>
                                <div class="col-lg-9">
                                    <select class="form-control select" name="id_lembaga" id="id_lembaga">
                                        <option value="">== Pilih Lembaga ==</option>
                                        @foreach ($lembaga as $l)
                                            <option value="{{$l->id}}">{{$l->lembaga}}</option>
                                        @endforeach
                                    </select>
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

