@extends('header')

@section('page_title', 'Kelola Kegiatan')

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
                        <li class="active"><a href="{{url('')}}/admin/kegiatan">Manajemen Kegiatan</a></li>
                        <li><a href="{{url('')}}/admin/realisasi">Verifikasi Realisasi Kegiatan</a></li>
                        <li><a href="{{url('')}}/admin/lahan">Luas Alokasi Lahan</a></li>
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">
                        <div class="row">
                            <div class="col-lg-9">
                                <form method='get'>
                                    <select class="form-control select" name="periode" id="periode" style="margin-bottom: 10px;" onchange="this.form.submit()">
                                        @foreach ($periode as $p)
                                            <option {{ ($selectedPeriode == $p->id) ? "selected":"" }} value="{{$p->id}}">{{$p->periode}}</option>
                                            {{-- <option value="{{$p->id}}">{{$p->periode}}</option> --}}
                                        @endforeach
                                    </select>
                                </form>
                            </div>
                            <div class="col-lg-3" style="padding: 10px 0px;">
                                <a class="custom-badge status-green text-right" style="padding: 9px;" href="/admin/kegiatan/periode/tambah">Kelola Periode</a>
                            </div>
                        </div>
                        <div class="row">
                            <form method='get' action="{{url('')}}/admin/kegiatan/cari">
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="kata" placeholder="Cari Kegiatan .." value="{{ old('kata') }}">
                                </div>
                                <div class="col-md-1" style="padding-left: 0px;margin-bottom: 10px;">
                                    <input class="form-control" type="submit" value="Cari">
                                </div>
                            </form>
                        </div>
                        {{-- tab daftar kegiatan --}}
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
                                            <th>Target Anggaran (Rp)</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kegiatan as $k)
                                            <tr>
                                                <td width="1%">{{ (($kegiatan->currentPage() * 10) - 10) + $loop->iteration }}</td>
                                                <td width="5%">{{ $k->kegiatan }}</td>
                                                <td width="5%">{{ $k->nomenklatur }}</td>
                                                <td width="2%">{{ $k->indikator_kegiatan }}</td>
                                                <td width="1%">{{ $k->periode }}</td>
                                                <td width="1%">{{ $k->target_volume }}</td>
                                                <td width="1%">{{ $k->target_anggaran }}</td>
                                                <td width="2%">
                                                    <a class="custom-badge status-green text-right bg-success" href="/admin/kegiatan/{{ $k->id }}">Ubah</a>
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
                                    {{-- {{ $kegiatan->links() }} --}}
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
