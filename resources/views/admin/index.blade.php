@extends('header')

@section('page_title', 'Kelola Target Capaian')

@section('content')
    <div class="row" style="max-width: 1200px; margin: auto;">
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
                        <li class="active"><a href="#daftar-target" data-toggle="tab">Manajemen Target</a></li>
                        <li><a href="#verifikasi-target" data-toggle="tab">Verifikasi Capaian Indikator</a></li>
                        <li><a href="#daftar-kegiatan" data-toggle="tab">Manajemen Kegiatan</a></li>
                        <li><a href="#verifikasi-realisasi" data-toggle="tab">Verifikasi Realisasi Kegiatan</a></li>
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">
                        {{-- tambah-target --}}
                        <div class="tab-pane" id="tambah-target">
                            <form class="page-box">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Strategi</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select" name="strategi" id="strategi">
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
                                        <span class="form-text text-muted">Pilih salah satu <b>indikator</b> yang sesuai</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Tahun</label>
                                    <div class="col-lg-9">
                                        <input name="website_name" class="form-control" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Target Capaian</label>
                                    <div class="col-lg-9">
                                        <input name="website_name" class="form-control" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Satuan</label>
                                    <div class="col-lg-9">
                                        <input name="keywords" class="form-control" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>

                        {{-- tab daftar target --}}
                        <div class="tab-pane active" id="daftar-target">
                            <div class="table-responsive">
                                <table id="tabel-data" class="table table-bordered table-striped"
                                    style="width:100%; border:0; font-size:12;">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Indikator</th>
                                            <th>Target</th>
                                            <th>Satuan</th>
                                            <th>Jenis Dokumen</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($target as $t)
                                            <tr>
                                                <td width="1%">{{ (($target->currentPage() * 10) - 10) + $loop->iteration }}</td>
                                                <td width="10%">{{ $t->indikator }}</td>
                                                <td width="1%">{{ $t->target }}</td>
                                                <td width="1%">{{ $t->satuan }}</td>
                                                @if (empty($t->dokumen))
                                                    <td width="2%">Belum ada dokumen</td>
                                                @else
                                                    <td width="2%">{{$t->dokumen}}</td>
                                                @endif
                                                <td width="2%">
                                                    <a class="custom-badge status-green text-right" href="/admin/indikator/{{ $t->id }}">Ubah</a>
                                                    {{-- <form action="/admin/indikator/{{ $t->id }}" method="post" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="custom-badge status-red text-right" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                    </form> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <br />
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="{{ $target->url($target->onFirstPage()) }}">First</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ $target->previousPageUrl() }}">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">{{ $target->currentPage() }}</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ $target->nextPageUrl() }}">Next</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ $target->url($target->lastPage()) }}">Last</a></li>
                                </ul>
                            </nav>
                        </div>

                        {{-- tab verifikasi indikator --}}
                        <div class="tab-pane" id="verifikasi-target">
                                <div class="table-responsive">
                                    <table id="tabel-data" class="table table-bordered table-striped" style="width:100%; border:0; font-size:12;">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Indikator</th>
                                                <th>Tahun</th>
                                                <th>Target</th>
                                                <th>Capaian</th>
                                                <th>Satuan</th>
                                                <th>Status</th>
                                                <th>Diverifikasi oleh</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($capaian as $c)
                                                <tr>
                                                    <td width="1%">{{ (($capaian->currentPage() * 10) - 10) + $loop->iteration }}</td>
                                                    <td width="10%">{{ $c->indikator }}</td>
                                                    <td width="1%">{{ $c->tahun }}</td>
                                                    <td width="1%">{{ $c->target }}</td>
                                                    <td width="2%">{{ $c->capaian }}</td>
                                                    <td width="2%">{{ $c->satuan }}</td>
                                                    <td width="1%">
                                                        @if($c->status === 0)
                                                            <span class="badge rounded-pill" style="background-color: #0d6efd !important; color: #fff;">Menunggu</span>
                                                        @elseif($c->status === 1)
                                                            <span class="badge rounded-pill" style="background-color: #198754 !important; color: #fff;">Diterima</span>
                                                        @else
                                                            <span class="badge rounded-pill" style="background-color: #dc3545 !important; color: #fff;">Revisi</span>
                                                        @endif
                                                    </td>
                                                    <td width="2%">{{ $c->verified_by }}</td>
                                                    <td width="5%">
                                                        @if($c->status == 0)
                                                            <form action="/admin/verify/{{ $c->id }}" method="post" class="d-inline" style="float: left; margin-right: 5px;">
                                                                @method('put')
                                                                @csrf
                                                                <input type="hidden" value="1" name="status">
                                                                <input type="hidden" value="{{Auth::user()->name}}" name="verified_by">
                                                                <button type="submit" class="custom-badge status-blue" onclick="return confirm('Approve data ini?')">Approve</button>
                                                            </form>
                                                            <form action="/admin/reject/{{ $c->id }}" method="post" class="d-inline">
                                                                @method('put')
                                                                @csrf
                                                                <input type="hidden" value="2" name="status">
                                                                <input type="hidden" value="{{Auth::user()->name}}" name="verified_by">
                                                                <button type="submit" class="custom-badge status-red" onclick="return confirm('Revisi data ini?')">Revisi</button>
                                                            </form>
                                                        @elseif($c->status == 2)
                                                            <form action="/admin/verify/{{ $c->id }}" method="post" class="d-inline" style="float: left; margin-right: 5px;">
                                                                @method('put')
                                                                @csrf
                                                                <input type="hidden" value="1" name="status">
                                                                <input type="hidden" value="{{Auth::user()->name}}" name="verified_by">
                                                                <button type="submit" class="custom-badge status-blue" onclick="return confirm('Approve data ini?')">Approve</button>
                                                            </form>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <br />
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="{{ $capaian->url($capaian->onFirstPage()) }}">First</a></li>
                                        <li class="page-item"><a class="page-link" href="{{ $capaian->previousPageUrl() }}">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">{{ $capaian->currentPage() }}</a></li>
                                        <li class="page-item"><a class="page-link" href="{{ $capaian->nextPageUrl() }}">Next</a></li>
                                        <li class="page-item"><a class="page-link" href="{{ $capaian->url($capaian->lastPage()) }}">Last</a></li>
                                    </ul>
                                </nav>
                        </div>



                        {{-- tab daftar kegiatan --}}
                        <div class="tab-pane" id="daftar-kegiatan">
                            <div class="table-responsive">
                                <table id="tabel-data" class="table table-bordered table-striped"
                                    style="width:100%; border:0; font-size:12;">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kegiatan</th>
                                            <th>Nomenklatur Kegiatan</th>
                                            <th>Indikator</th>
                                            <th>Periode</th>
                                            <th>Target Volume</th>
                                            <th>Target Anggaran (Rp)</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kegiatan as $k)
                                            <tr>
                                                <td width="1%">{{ (($kegiatan->currentPage() * 10) - 10) + $loop->iteration }}</td>
                                                <td width="10%">{{ $k->kegiatan }}</td>
                                                <td width="2%">{{ $k->nomenklatur }}</td>
                                                <td width="2%">{{ $k->indikator_kegiatan }}</td>
                                                <td width="1%">{{ $k->periode }}</td>
                                                <td width="1%">{{ $k->target_volume }}</td>
                                                <td width="1%">{{ $k->target_anggaran }}</td>
                                                <td width="2%">
                                                    <a class="custom-badge status-green text-right" href="/admin/kegiatan/{{ $t->id }}">Ubah</a>
                                                    {{-- <form action="/admin/indikator/{{ $t->id }}" method="post" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="custom-badge status-red text-right" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                    </form> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <br />
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="{{ $kegiatan->url($kegiatan->onFirstPage()) }}">First</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ $kegiatan->previousPageUrl() }}">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">{{ $kegiatan->currentPage() }}</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ $kegiatan->nextPageUrl() }}">Next</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ $kegiatan->url($kegiatan->lastPage()) }}">Last</a></li>
                                </ul>
                            </nav>
                    </div>

                    {{-- tab verifikasi realisasi --}}
                    <div class="tab-pane" id="verifikasi-realisasi">
                        <div class="table-responsive">
                            <table id="tabel-data" class="table table-bordered table-striped" style="width:100%; border:0; font-size:12;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kegiatan</th>
                                        <th>Indikator Kegiatan</th>
                                        <th>Periode</th>
                                        <th>Target Volume</th>
                                        <th>Target Anggaran</th>
                                        <th>Diisi oleh</th>
                                        <th>Realisasi Volume</th>
                                        <th>Realisasi Volume</th>
                                        <th>Status</th>
                                        <th>Diverifikasi oleh</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($realisasi as $r)
                                        <tr>
                                            <td width="1%">{{ (($realisasi->currentPage() * 10) - 10) + $loop->iteration }}</td>
                                            <td width="10%">{{ $r->kegiatan }}</td>
                                            <td width="1%">{{ $r->indikator_kegiatan }}</td>
                                            <td width="1%">{{ $r->periode }}</td>
                                            <td width="2%">{{ $r->target_volume }}</td>
                                            <td width="2%">{{ $r->target_anggaran }}</td>
                                            <td width="2%">{{ $r->entered_by }}</td>
                                            <td width="2%">{{ $r->realisasi_volume }}</td>
                                            <td width="2%">{{ $r->realisasi_anggaran }}</td>
                                            <td width="1%">
                                                @if($r->status === 0)
                                                    <span class="badge rounded-pill" style="background-color: #0d6efd !important; color: #fff;">Menunggu</span>
                                                @elseif($r->status === 1)
                                                    <span class="badge rounded-pill" style="background-color: #198754 !important; color: #fff;">Diterima</span>
                                                @else
                                                    <span class="badge rounded-pill" style="background-color: #dc3545 !important; color: #fff;">Revisi</span>
                                                @endif
                                            </td>
                                            <td width="2%">{{ $r->verified_by }}</td>
                                            <td width="5%">
                                                @if($r->status == 0)
                                                    <form action="/admin/verify/{{ $r->id }}" method="post" class="d-inline" style="float: left; margin-right: 5px;">
                                                        @method('put')
                                                        @csrf
                                                        <input type="hidden" value="1" name="status">
                                                        <input type="hidden" value="{{Auth::user()->name}}" name="verified_by">
                                                        <button type="submit" class="custom-badge status-blue" onclick="return confirm('Approve data ini?')">Approve</button>
                                                    </form>
                                                    <form action="/admin/reject/{{ $r->id }}" method="post" class="d-inline">
                                                        @method('put')
                                                        @csrf
                                                        <input type="hidden" value="2" name="status">
                                                        <input type="hidden" value="{{Auth::user()->name}}" name="verified_by">
                                                        <button type="submit" class="custom-badge status-red" onclick="return confirm('Revisi data ini?')">Revisi</button>
                                                    </form>
                                                @elseif($r->status == 2)
                                                    <form action="/admin/verify/{{ $r->id }}" method="post" class="d-inline" style="float: left; margin-right: 5px;">
                                                        @method('put')
                                                        @csrf
                                                        <input type="hidden" value="1" name="status">
                                                        <input type="hidden" value="{{Auth::user()->name}}" name="verified_by">
                                                        <button type="submit" class="custom-badge status-blue" onclick="return confirm('Approve data ini?')">Approve</button>
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br />
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="{{ $realisasi->url($realisasi->onFirstPage()) }}">First</a></li>
                                <li class="page-item"><a class="page-link" href="{{ $realisasi->previousPageUrl() }}">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">{{ $realisasi->currentPage() }}</a></li>
                                <li class="page-item"><a class="page-link" href="{{ $realisasi->nextPageUrl() }}">Next</a></li>
                                <li class="page-item"><a class="page-link" href="{{ $realisasi->url($realisasi->lastPage()) }}">Last</a></li>
                            </ul>
                        </nav>
                </div>

                        {{-- <div class="tab-pane" id="e">
                            <h4>Hapus Data</h4>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
