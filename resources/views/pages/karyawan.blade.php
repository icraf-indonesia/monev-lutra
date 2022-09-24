@extends('layout')

@section('css')
<style type="text/css">
  #row-tampilan div label{
    display: block;
  }

.CellWithComment{
  position:relative;
}

.CellComment{
  display:none;
  position:absolute; 
  z-index:100;
  border:1px;
  background-color:white;
  border-style:solid;
  border-width:1px;
  border-color:rgb(0, 0, 0);
  padding:3px;
  color:rgb(0, 0, 0); 
  top:20px; 
  left:220px;
  width: 400px;
}

.CellWithComment:hover span.CellComment{
  display:block;
}
</style>
    
@stop

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Indikator</h1>
        </div><!-- /.col -->
        {{-- <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Modul 2</li>
          </ol>
        </div><!-- /.col --> --}}
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            {{-- <div class="card-header">
              <h3 class="card-title">Tabel Indikator</h3>
            </div> --}}
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row" id="row-tampilan">
                <div class="column" style="width:25%">
                  <div class="col-md-12">
                    <h4>Pilih Aspek</h4>
                  </div>
                  <div class="col-md-12">
                    <label>
                      <input type="checkbox" class="tampilan" data-kolom=1> Alokasi dan tata guna lahan

                    </label>
                  </div>
                  <div class="col-md-12">
                    <label>
                      <input type="checkbox" class="tampilan" data-kolom=2> Akses modal penghidupan​
                    </label>
                  </div>
                  <div class="col-md-12">
                    <label>
                      <input type="checkbox" class="tampilan" data-kolom=3> Produktivitas dan diversifikasi
                    </label>
                  </div>
                  <div class="col-md-12">
                    <label>
                      <input type="checkbox" class="tampilan" data-kolom=4> Rantai nilai
                    </label>
                  </div>
                  <div class="col-md-12">
                    <label>
                      <input type="checkbox" class="tampilan" data-kolom=1> Jasa ekosistem
                    </label>
                  </div>
                </div>
                <div class="column" style="width:25%">
                  <div class="col-md-12">
                    <h4>Jenis Instrumen</h4>
                  </div>
                  <div class="col-md-12">
                    <label>
                      <input type="checkbox" class="tampilan" data-kolom=1> Terpercaya
                    </label>
                  </div>
                  <div class="col-md-12">
                    <label>
                      <input type="checkbox" class="tampilan" data-kolom=2> LandScale
                    </label>
                  </div>
                  <div class="col-md-12">
                    <label>
                      <input type="checkbox" class="tampilan" data-kolom=3> SourceUp
                    </label>
                  </div>
                  {{-- <div class="col-md-12">
                    <label>
                      <input type="checkbox" class="tampilan" data-kolom=4> PHBM LEI
                    </label>
                  </div> --}}
                  <div class="col-md-12">
                    <label>
                      <input type="checkbox" class="tampilan" data-kolom=5> KDSD
                    </label>
                  </div> 
                  {{-- <div class="col-md-12">
                    <label>
                      <input type="checkbox" class="tampilan" data-kolom=6> Kinerja Daerah
                    </label>
                  </div>  --}}
                </div>
              </div>             
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Aspek</th>
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
                @foreach($tables as $table)
                <tr>
                  {{-- <td>{{ $tag->strategi }}</td>
                  <td>{{ $tag->intervensi }}</td> --}}
                  {{-- <td class="CellWithComment" width="12.5%">{{ $tag->petajalan }}
                    <span class="CellComment">
                      <b>Kriteria/Goal:</b> Konversi ekosistem alami menjadi penggunaan lahan lain, didisagregasi berdasarkan tipe tutupan lahan <br>
                      <b>Deskripsi:</b> Konversi ekosistem alami menjadi penggunaan lahan lain, didisagregasi berdasarkan tipe tutupan lahan <br>
                      <b>Level:</b> Kabupaten, Provinsi <br>
                      <b>Metode Pengukuran:</b> Konversi ekosistem alami menjadi penggunaan lahan lain, didisagregasi berdasarkan tipe tutupan lahan
                    </span>
                    <br>
                  <a href="www.google.com"><u>Selengkapnya...</u></a>
                  </td> --}}
                  <td width="10%">{{ $table->strategi}}</td>
                  <td width="10%">{{ $table->intervensi}}</td>
                  <td width="10%">{{ $table->indikator_intervensi}}</td>
                  <td width="10%">{{ $table->pemangku_kepentingan1}}</td>
                  <td width="10%">{{ $table->iku}}</td>
                  <td width="10%">{{ $table->ikk}}</td>
                  <td width="10%">{{ $table->terpercaya}}</td>
                  <td width="10%">{{ $table->landscale}}</td>
                  <td width="10%">{{ $table->sourceup}}</td>
                  <td width="10%">{{ $table->kdsd}}</td>
                </tr>
                @endforeach
                </thead>
                <tbody> 
                  
                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        </div>
      </div>

    </div>
  </section>
@stop

@section('js')
    <script type="text/javascript"> 
    const table = $('#table').DataTable({
    "pageLength": 100,
    "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, 'semua']],
    "bLengthChange": true,
    "bFilter": true,
    "bInfo": true,
    "processing":true,
    "bServerSide": true,
    // "order": [[ 1, "desc" ]],
    // "autoWidth": false,
    "ajax":{
      url: "{{url('')}}/",
      type: "POST"
    },
    columnDefs: [
      {targets: '_all', visible: true},
      {
        "targets": 0,
        "class":"text-nowrap",
        "sortable":false,
        "render": function(data, type, row, meta){
          return row.strategi;
        }
      }],
      });
    </script>
@stop