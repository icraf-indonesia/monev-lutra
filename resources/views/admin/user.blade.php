@extends('header')

@section('page_title', 'User')

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
                        <li class="active"><a href="#a" data-toggle="tab">Daftar User</a></li>
                        <li><a href="#b" data-toggle="tab">Tambah User</a></li>
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">
                        <div class="tab-pane active" id="a">
                                <div class="table-responsive">
                                    <table id="tabel-data" class="table table-bordered table-striped"
                                        style="width:100%; border:0; font-size:12;">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>OPD</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($user))
                                                @foreach ($user as $table)
                                                    <tr>
                                                        <td width="1%">{{ (($user->currentPage() * 10) - 10) + $loop->iteration }}</td>
                                                        <td width="10%">{{ $table->name }}</td>
                                                        <td width="1%">{{ $table->username }}</td>
                                                        <td width="1%">{{ $table->email }}</td>
                                                        <td width="2%">{{ $table->role }}</td>
                                                        <td width="2%">{{ $table->stakeholder }}</td>
                                                        <td width="1%">

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
                                        <li class="page-item"><a class="page-link" href="{{ $user->url($user->onFirstPage()) }}">First</a></li>
                                        <li class="page-item"><a class="page-link" href="{{ $user->previousPageUrl() }}">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">{{ $user->currentPage() }}</a></li>
                                        <li class="page-item"><a class="page-link" href="{{ $user->nextPageUrl() }}">Next</a></li>
                                        <li class="page-item"><a class="page-link" href="{{ $user->url($user->lastPage()) }}">Last</a></li>
                                    </ul>
                                </nav>
                        </div>

                        {{-- tab insert capaian  --}}
                        <div class="tab-pane" id="b">
                            <form class="page-box" method="post" action="/user/store">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Strategi</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select" name="strategi" id="strategi">
                                            <option value="">== Pilih Strategi ==</option>

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
                                        <span class="form-text text-muted">Pilih salah satu <b>indikator</b> yang
                                            sesuai</span>
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
                                        <input name="satuan" class="form-control @error('satuan') is-invalid @enderror" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button class="btn btn-primary submit-btn" type="submit">Tambah Capaian</button>
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

@stop

@section('customJS')

@stop


