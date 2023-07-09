@extends('header')

@section('css')
    <style type="text/css">
        #row-tampilan div label {
            display: block;
        }

        thead {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            background-color: #1A5E51;
            color: white;
            text-align: center;
        }
    </style>

@stop

@section('content')
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12 dct-dashbd-lft hidden-xs hidden-sm">
            <div class="dct-dashbd-01 hidden-xs hidden-sm">
                <div class="row" id="row-tampilan">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h4>Pilih Strategi</h4>
                        <label style="width: 100%;">
                            <input type="checkbox" class="tampilan" data-kolom=1> Alokasi dan tata guna lahan
                        </label>
                        <label style="width: 100%;">
                            <input type="checkbox" class="tampilan" data-kolom=2> Akses modal penghidupan​
                        </label>
                        <label style="width: 100%;">
                            <input type="checkbox" class="tampilan" data-kolom=3> Produktivitas dan diversifikasi
                        </label>
                        <label style="width: 100%;">
                            <input type="checkbox" class="tampilan" data-kolom=4> Rantai nilai
                        </label>
                        <label style="width: 100%;">
                            <input type="checkbox" class="tampilan" data-kolom=5> Jasa ekosistem
                        </label>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h4>Jenis Instrumen</h4>
                        <label style="width: 100%;">
                            <input type="checkbox" class="tampilan" data-kolom=1a checked="true"> Terpercaya
                        </label>
                        <label style="width: 100%;">
                            <input type="checkbox" class="tampilan" data-kolom=1b checked="true"> LandScale
                        </label>
                        <label style="width: 100%;">
                            <input type="checkbox" class="tampilan" data-kolom=1c checked="true"> SourceUp
                        </label>
                        <label style="width: 100%;">
                            <input type="checkbox" class="tampilan" data-kolom=1d checked="true"> KDSD
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12 dct-appoinment m-t-10">
            <div class="table-responsive">
                <table id="tabel-data" class="table table-bordered table-striped"
                    style="width:100%; border:0; font-size:12;">
                    <thead>
                        <tr>
                            {{-- <th>Strategi</th> --}}
                            <th>Intervensi</th>
                            <th>Indikator Peta Jalan</th>
                            <th>Pemangku Kepentingan</th>
                            <th>IKU RPJMD Luwu Utara 2021-2026</th>
                            <th>IKK RPJMD Luwu Utara 2021-2026</th>
                            <th>Indikator Terpercaya</th>
                            <th>Indikator LandScale</th>
                            <th>Indikator SourceUp</th>
                            <th>Indikator KDSD</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tables as $table)
                            <tr>
                                {{-- <td width="10%">{{ $table->strategi}}</td> --}}
                                <td width="10%">{{ $table->intervensi }}</td>
                                <td width="10%">{{ $table->indikator_intervensi }}</td>
                                <td width="10%">{{ $table->pemangku_kepentingan1 }}</td>
                                <td width="10%" data-bs-toggle="modal" data-bs-target="#addnew">{{ $table->iku }}</td>
                                <td width="10%" data-bs-toggle="modal" data-bs-target="#addnew2">{{ $table->ikk }}</td>
                                <td width="10%" data-bs-toggle="modal" data-bs-target="#addnew3">{{ $table->terpercaya }}
                                </td>
                                <td width="10%" data-bs-toggle="modal" data-bs-target="#addnew4">{{ $table->landscale }}
                                </td>
                                <td width="10%" data-bs-toggle="modal" data-bs-target="#addnew5">{{ $table->sourceup }}
                                </td>
                                <td width="10%" data-bs-toggle="modal" data-bs-target="#addnew6">{{ $table->kdsd }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br />
            Halaman : {{ $tables->currentPage() }} <br />
            Jumlah Data : {{ $tables->total() }} <br />
            Data Per Halaman : {{ $tables->perPage() }} <br />
            {{ $tables->links() }}
        </div>
    </div>

    <!-- Content-header -->
    {{-- <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Indikator</h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Profil Jurisdiksi</a></li>
                        <li class="breadcrumb-item active">Gambaran Umum</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div> --}}
    <!-- /.content-header -->

    <!-- Main content -->
    {{-- <section class="content" style="padding-top: 0px;">
        <div class="container-fluid">
        </div>
    </section> --}}
@stop

@section('js')
    <script type="text/javascript">
        let list_data = [];
        // let organisasi = $("#filter-organisasi").val()
        // ,bpjs_kesehatan = $("#filter-bpjs-kesehatan").val()
        // ,bpjs_ketenagakerjaan = $("#filter-bpjs-ketenagakerjaan").val()

        const table = $('#tabel-data').DataTable({
            "pageLength": 10,
            "lengthMenu": [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, 'semua']
            ],
            "bLengthChange": true,
            "bFilter": true,
            "bInfo": true,
            "processing": true,
            "bServerSide": true,
            "order": [
                [1, "desc"]
            ],
            "initComplete": function(settings, json) {
                console.log("SUDAH INI DATATABLE")
            },
            columnDefs: [
                // {
                //   "targets": 0,
                //   "class":"text-nowrap",
                //   "sortable":false,
                //   "render": function(data, type, row, meta){
                //     return `<input type="checkbox" class="cb-child" value="${row.id}">`;
                //   }
                // },
                {
                    "targets": 1,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return row.terpercaya;
                    }
                },
                {
                    "targets": 2,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return row.landscale;
                    }
                },
                {
                    "targets": 3,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return row.sourceup;
                    }
                },
                {
                    "targets": 4,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return row.kdsd;
                    }
                }
            ]
        });
    </script>
@stop
