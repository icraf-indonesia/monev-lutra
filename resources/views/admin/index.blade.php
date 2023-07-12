@extends('header')

@section('content')
    <div class="row">
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
                        <li class="active"><a href="#daftar-target-capaian" data-toggle="tab">Manajemen Target Capaian</a></li>
                        <li><a href="#tambah-target" data-toggle="tab">Tambah Target Capaian</a></li>
                        <li><a href="#verifikasi" data-toggle="tab">Verifikasi Capaian</a></li>
                        {{-- <li><a href="#e" data-toggle="tab">Hapus Data</a></li> --}}
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
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Upload Dokumen</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="file">
                                        <span class="form-text text-muted">Ukuran file max. 5 mb</span>
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane" id="verifikasi">
                            <div class="col-lg-10 col-md-10 col-sm-12 dct-appoinment m-t-10">
                                <div class="table-responsive">
                                    <table id="tabel-data" class="table table-bordered table-striped"
                                        style="width:100%; border:0; font-size:12;">
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
                                            @foreach ($tables as $table)
                                                <tr>
                                                    <td width="1%">{{ (($tables->currentPage() * 10) - 10) + $loop->iteration }}</td>
                                                    <td width="10%">{{ $table->indikator }}</td>
                                                    <td width="1%">{{ $table->tahun }}</td>
                                                    <td width="1%">{{ $table->target }}</td>
                                                    <td width="2%">{{ $table->capaian }}</td>
                                                    <td width="2%">{{ $table->satuan }}</td>
                                                    <td width="1%">
                                                        @if($table->status === 0)
                                                            <span class="badge rounded-pill" style="background-color: #0d6efd !important; color: #fff;">Menunggu</span>
                                                        @elseif($table->status === 1)
                                                            <span class="badge rounded-pill" style="background-color: #198754 !important; color: #fff;">Diterima</span>
                                                        @else
                                                            <span class="badge rounded-pill" style="background-color: #dc3545 !important; color: #fff;">Revisi</span>
                                                        @endif
                                                    </td>
                                                    <td width="2%">{{ $table->verified_by }}</td>
                                                    <td width="2%">
                                                        <input style="min-width: 75px;" class="toggle-class" data-id="{{$table->id}}" data-ver="{{Auth::user()->name}}"  type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Terverifikasi" data-off="Belum" {{ $table->status ? 'checked' : '' }} >
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <br />
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="{{ $tables->url($tables->onFirstPage()) }}">First</a></li>
                                        <li class="page-item"><a class="page-link" href="{{ $tables->previousPageUrl() }}">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">{{ $tables->currentPage() }}</a></li>
                                        <li class="page-item"><a class="page-link" href="{{ $tables->nextPageUrl() }}">Next</a></li>
                                        <li class="page-item"><a class="page-link" href="{{ $tables->url($tables->lastPage()) }}">Last</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>


                        <div class="tab-pane active" id="daftar-target-capaian">
                            <div class="col-lg-10 col-md-10 col-sm-12 dct-appoinment m-t-10">
                                <div class="table-responsive">
                                    <table id="tabel-data" class="table table-bordered table-striped"
                                        style="width:100%; border:0; font-size:12;">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Indikator</th>
                                                <th>Target</th>
                                                <th>Satuan</th>
                                                <th>Dokumen</th>
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
                                                        <td width="2%"><a href="{{url('/dokumen/'.$t->dokumen)}}" target="_blank">{{$t->dokumen}}</a></td>
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
                                        <li class="page-item"><a class="page-link" href="{{ $tables->url($tables->onFirstPage()) }}">First</a></li>
                                        <li class="page-item"><a class="page-link" href="{{ $tables->previousPageUrl() }}">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">{{ $tables->currentPage() }}</a></li>
                                        <li class="page-item"><a class="page-link" href="{{ $tables->nextPageUrl() }}">Next</a></li>
                                        <li class="page-item"><a class="page-link" href="{{ $tables->url($tables->lastPage()) }}">Last</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        {{-- <div class="tab-pane" id="e">
                            <h4>Hapus Data</h4>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function() {
          $('.toggle-class').change(function() {
              var verified = $(this).prop('checked') == true ? 1 : 2;
              console.log(verified);
              var id = $(this).data('id');
              var verified_by = $(this).data('ver');

              $.ajax({
                  type: "POST",
                  dataType: "json",
                  url: '/admin/verification',
                  headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                  data: {'verified': verified, 'id': id, 'verified_by':verified_by},
                  success: function(data){
                    alert(data.success);
                    toastr.options.closeButton = true;
                    toastr.options.closeMethod = 'fadeOut';
                    toastr.options.closeDuration = 100;
                    toastr.success(data.success);
                    location.reload();
                  }
              });
          });
        });
    </script>
@endsection
