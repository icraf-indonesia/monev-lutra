@extends('header')

@section('page_title', 'Strategi 4 (Capaian Tahunan)')

@section('content')
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12 dct-dashbd-lft hidden-xs hidden-sm">
            <div class="dct-dashbd-01 hidden-xs hidden-sm">
                @include('dasbor_sidebar')
            </div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12 dct-appoinment m-t-10">
            <!-- Table section  -->
            <div class="row">
                <div class="col-md-12 patient-app-01">
                    <div class="row">
                        <div class="column" style="width:100%;">
                            <div class="col-md-6">
                                <h5>Tahun:</h5>
                                <form method="GET">
                                    <select name="year" id="year" style="width:150px;" onchange="this.form.submit()">
                                        @foreach ($tahun as $t)
                                            <option {{ ($year == $t->tahun) ? "selected":"" }} value='{{$t->tahun}}'>{{$t->tahun}}</option>
                                        @endforeach
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane active" id="a">
                        <table id="patientfilter" class="table table-striped dt-responsive" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Indikator Peta Jalan</th>
                                    <th>Pemangku Kepentingan</th>
                                    {{-- <th>Alokasi Anggaran</th> --}}
                                    <th>Target Capaian</th>
                                    <th>Satuan</th>
                                    <th>Kondisi Saat Ini</th>
                                    <th>Capaian</th>
                                    <th>Instrumen</th>
                                    <th>Dokumen Pendukung</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($capaian_nilai as $lhn)
                                    <tr>
                                        <td width="15%">{{ $lhn->indikator }}</td>
                                        <td width="15%">{{ $lhn->stakeholder1 }}</td>
                                        <td width="10%">{{ $lhn->target }}</td>
                                        <td width="10%">{{ $lhn->satuan }}</td>
                                        <td width="10%">{{ $lhn->capaian }}</td>
                                        <td width="10%">
                                            @if (is_null($lhn->persen)) 0% @else {{ $lhn->persen }}% @endif
                                        </td>
                                        <td width="30%">
                                            @if ($lhn->id_landscale != 1)
                                                <span class="badge" style="display: unset; color:white; background-color:blue;">LandScale</span>
                                            @endif
                                            @if ($lhn->id_terpercaya != 1)
                                                <span class="badge" style="display: unset; color:white; background-color:orange;">Terpercaya</span>
                                            @endif
                                            @if ($lhn->id_sourceup != 1)
                                                <span class="badge" style="display: unset; color:white; background-color:green;">SourceUp</span>
                                            @endif
                                            @if ($lhn->id_kdsd != 1)
                                                <span class="badge" style="display: unset; color:white; background-color:darkslategray;">KDSD</span>
                                            @endif
                                        </td>
                                        <td width="10%">
                                            <span class="text-red">
                                                <i class="bi bi-download"></i>
                                                <a href="{{url('/dokumen/'.$lhn->dokumen)}}" target="_blank">
                                                    {{$lhn->dokumen}}
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Table section  -->
        </div>
@stop
