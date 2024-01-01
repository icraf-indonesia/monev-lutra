@extends('header')

@section('page_title', 'Daftar Kegiatan')

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
                        <li><a href="{{url('')}}/kontributor">Daftar Input Capaian</a></li>
                        <li><a href="{{url('')}}/kontributor/capaian/tambah">Tambah Capaian</a></li>
                        <li class="active"><a href="{{url('')}}/kontributor/realisasi">Daftar Realisasi Kegiatan</a></li>
                        <li><a href="{{url('')}}/kontributor/realisasi/tambah">Tambah Realisasi Kegiatan</a></li>
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">
                        {{-- tab daftar kegiatan  --}}
                        <div class="tab-pane active" id="daftar-kegiatan">
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
                                            <th>Target Anggaran</th>
                                            <th>Realisasi Volume</th>
                                            <th>Realisasi Anggaran</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($realisasi))
                                            @foreach ($realisasi as $r)
                                                <tr>
                                                    <td width="1%">{{ (($realisasi->currentPage() * 10) - 10) + $loop->iteration }}</td>
                                                    <td width="8%">{{ $r->kegiatan }}</td>
                                                    <td width="1%">{{ $r->nomenklatur }}</td>
                                                    <td width="1%">{{ $r->indikator_kegiatan }}</td>
                                                    <td width="2%">{{ $r->periode }}</td>
                                                    <td width="2%">{{ $r->target_volume }}</td>
                                                    <td width="2%">{{ $r->target_anggaran }}</td>
                                                    <td width="2%">{{ $r->realisasi_volume }}</td>
                                                    <td width="2%">{{ $r->realisasi_anggaran }}</td>
                                                    <td width="1%">
                                                        @if($r->status === 0)
                                                            <span class="badge rounded-pill" style="background-color: #0d6efd !important;color: #fff;">Menunggu</span>
                                                        @elseif($r->status === 1)
                                                            <span class="badge rounded-pill" style="background-color: #198754 !important;color: #fff;">Diterima</span>
                                                        @else
                                                            <a class="custom-badge status-green text-right" href="/kontributor/realisasi/{{ $r->id }}">
                                                                Revisi
                                                            </a>
                                                        @endif
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
                                    <li class="page-item"><a class="page-link" href="{{ $realisasi->url($realisasi->onFirstPage()) }}">First</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ $realisasi->previousPageUrl() }}">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">{{ $realisasi->currentPage() }}</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ $realisasi->nextPageUrl() }}">Next</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ $realisasi->url($realisasi->lastPage()) }}">Last</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
