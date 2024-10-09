@extends('header')

@section('page_title', 'Artikel')

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
                        <li class="active"><a href="{{url('')}}/admin/artikel">Daftar Artikel</a></li>
                        <li><a href="{{url('')}}/admin/artikel/tambah">Tambah Artikel</a></li>
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">
                        <div class="table-responsive">
                            <table id="tabel-data" class="table table-bordered table-striped"
                                style="width:100%; border:0; font-size:12;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Judul</th>
                                        <th>Isi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($artikel))
                                        @foreach ($artikel as $table)
                                            <tr>
                                                <td width="1%">{{ (($artikel->currentPage() * 10) - 10) + $loop->iteration }}</td>
                                                <td width="1%">{{ $table->judul }}</td>
                                                <td width="10%">{{ $table->deskripsi }}</td>
                                                <td width="1%">
                                                    <a class="custom-badge status-green text-right bg-success" href="/admin/artikel/{{ $table->id }}">Ubah</a>
                                                    <form action="/admin/artikel/{{ $table->id }}" method="post" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="custom-badge status-red text-right" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                    </form>
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
                                <li class="page-item"><a class="page-link" href="{{ $artikel->url($artikel->onFirstPage()) }}">First</a></li>
                                <li class="page-item"><a class="page-link" href="{{ $artikel->previousPageUrl() }}">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">{{ $artikel->currentPage() }}</a></li>
                                <li class="page-item"><a class="page-link" href="{{ $artikel->nextPageUrl() }}">Next</a></li>
                                <li class="page-item"><a class="page-link" href="{{ $artikel->url($artikel->lastPage()) }}">Last</a></li>
                            </ul>
                        </nav>
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


