
@extends('header')

@section('page_title', 'Luas Alokasi Lahan Kakao')

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
                        <li><a href="{{url('')}}/admin">Kembali</a></li>
                        <li><a href="{{url('')}}/admin/lahan">Kelola Tahun</a></li>
                        <li><a href="{{url('')}}/admin/agroforestri/kakao">Luas Agroforestri Kakao</a></li>
                        <li class="active"><a href="{{url('')}}/admin/alokasi/kakao">Luas Alokasi Lahan Kakao</a></li>
                        <li><a href="{{url('')}}/admin/kawasan/hutan">Luas Kawasan Hutan</a></li>
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">
                        <div class="row">
                            <div class="col-lg-9">
                                <form method='get'>
                                    <select class="form-control select" name="tahun" id="periode" style="margin-bottom: 10px;" onchange="this.form.submit()">
                                        @foreach ($tahun as $t)
                                            <option {{ ($selectedPeriode == $t->tahun) ? "selected":"" }} value="{{$t->tahun}}">{{$t->tahun}}</option>
                                            {{-- <option value="{{$p->id}}">{{$p->periode}}</option> --}}
                                        @endforeach
                                    </select>
                                </form>
                            </div>
                            <div class="col-lg-3" style="margin-top: 10px">
                                <a class="custom-badge bg-primary status-blue text-right" href="/admin/alokasi/kakao/tambah/{{$selectedPeriode}}" style="padding: 10px">Tambah Kecamatan</a>
                            </div>
                        </div>

                        <div class="tab-pane active">
                            <div class="table-responsive">
                                <table id="tabel-data" class="table table-bordered table-striped"
                                    style="width:100%; border:0; font-size:12;">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kecamatan</th>
                                            <th>Luas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($luas as $l)
                                            <tr>
                                                <td width="1%">{{ $loop->iteration }}</td>
                                                <td width="2%">{{ $l->kecamatan }}</td>
                                                <td width="5%">{{ $l->luas }}</td>
                                                <td width="5%">
                                                    <a class="custom-badge status-green bg-success text-right" href="/admin/alokasi/kakao/{{ $l->id }}">Ubah</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

