@extends('header')

@section('page_title', 'Verifikasi Capaian')

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
                        <li><a href="{{url('')}}/admin">Manajemen Target</a></li>
                        <li><a href="{{url('')}}/admin/capaian">Verifikasi Capaian Indikator</a></li>
                        <li><a href="{{url('')}}/admin/kegiatan">Manajemen Kegiatan</a></li>
                        <li class="active"><a href="{{url('')}}/admin/realisasi">Verifikasi Realisasi Kegiatan</a></li>
                        <li><a href="{{url('')}}/admin/lahan">Luas Alokasi Lahan</a></li>
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">
                        {{-- tab verifikasi realisasi --}}
                        <div class="tab-pane active" id="verifikasi-realisasi">
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
                                            <th>Realisasi Anggaran</th>
                                            <th>Status</th>
                                            <th>Verifikator</th>
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
                                                <td width="1%">{{ $r->entered_by }}</td>
                                                <td width="2%">{{ $r->realisasi_volume }}</td>
                                                <td width="2%">{{ $r->realisasi_anggaran }}</td>
                                                <td width="1%">
                                                    @if($r->status === 0)
                                                        <span class="badge rounded-pill" style="background-color: #0d6efd !important; color: #fff;">Menunggu</span>
                                                    @elseif($r->status === 1)
                                                        <span class="badge rounded-pill" style="background-color: #198754 !important; color: #fff;">Diverifikasi</span>
                                                    @else
                                                        <span class="badge rounded-pill" style="background-color: #dc3545 !important; color: #fff;">Dalam revisi</span>
                                                    @endif
                                                </td>
                                                <td width="2%">{{ $r->verified_by }}</td>
                                                <td width="5%">
                                                    @if($r->status == 0)
                                                        <form action="/admin/realisasi/verify/{{ $r->id }}" method="post" class="d-inline" style="float: left; margin-right: 5px;">
                                                            @method('put')
                                                            @csrf
                                                            <input type="hidden" value="1" name="status">
                                                            <input type="hidden" value="{{Auth::user()->name}}" name="verified_by">
                                                            <button type="submit" class="custom-badge status-blue bg-primary" onclick="return confirm('Approve data ini?')">Approve</button>
                                                        </form>
                                                        <form action="/admin/realisasi/reject/{{ $r->id }}" method="post" class="d-inline">
                                                            @method('put')
                                                            @csrf
                                                            <input type="hidden" value="2" name="status">
                                                            <input type="hidden" value="{{Auth::user()->name}}" name="verified_by">
                                                            <button type="submit" class="custom-badge status-red bg-danger" onclick="return confirm('Revisi data ini?')">Revisi</button>
                                                        </form>
                                                    @elseif($r->status == 2)
                                                        <form action="/admin/realisasi/verify/{{ $r->id }}" method="post" class="d-inline" style="float: left; margin-right: 5px;">
                                                            @method('put')
                                                            @csrf
                                                            <input type="hidden" value="1" name="status">
                                                            <input type="hidden" value="{{Auth::user()->name}}" name="verified_by">
                                                            <button type="submit" class="custom-badge status-blue bg-info" onclick="return confirm('Approve data ini?')">Approve</button>
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
