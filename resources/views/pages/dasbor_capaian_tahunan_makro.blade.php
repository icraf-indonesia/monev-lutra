@extends('header')

@section('page_title', 'Capaian Tahunan Indikator Makro')

@section('content')
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12 dct-dashbd-lft hidden-xs hidden-sm">
            <div class="dct-dashbd-01 hidden-xs hidden-sm">
                @include('dasbor_sidebar')
            </div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12 dct-appoinment m-t-10">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs paitent-app-tab" style="margin-bottom: 10px; margin-top: -10px">
                        {{-- <li class="active"><a href="#a" data-toggle="tab">Strategi</a></li>
                        <li><a href="#b" data-toggle="tab">Intervensi</a></li> --}}
                        <li class="active"><a href="{{url('')}}/capaian/tahunan">Indikator Makro</a></li>
                        <li><a href="{{url('')}}/capaian/tahunan/strategi">Strategi</a></li>
                    </ul>
                    {{-- <label for="year">Tahun:</label> --}}
                    <form method='get'>
                        <select class="form-control select" name="tahun" style="margin-bottom: 10px;" onchange="this.form.submit()">
                            @foreach ($tahun as $p)
                                <option {{ ($selectedYear == $p->tahun) ? "selected":"" }} value="{{$p->tahun}}">{{$p->tahun}}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
            </div>
            <!-- Table section  -->
            <div class="row">
                <div class="col-md-12">
                    <h3>Tabel indikator makro tahun {{$selectedYear}}</h3>
                    <div class="tab-content">
                        <div class="tab-pane active" id="indikatormakro">
                            {{-- tabel indikator kunci --}}
                            <table class="table table-striped dt-responsive nowrap" cellspacing="0"
                                width="100%">
                                <thead>
                                    <tr>
                                        {{-- <th>No.</th> --}}
                                        <th>Strategi</th>
                                        <th>Indikator Makro</th>
                                        <th>Target</th>
                                        <th>Satuan</th>
                                        <th>Capaian Saat Ini</th>
                                        <th>Tingkat Capaian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($indikator_makro as $makro)
                                        <tr>
                                            {{-- <td width="1%">{{ $loop->iteration }}</td> --}}
                                            <td width="5%">{{ $makro->strategi }}</td>
                                            <td width="5%">
                                                <a href="{{url('')}}/capaian/tahunan/{{$makro->id_indikator}}/indikator">
                                                    {{ $makro->indikator }} <i class="material-icons" style="font-size: 14px">link</i>
                                                </a>
                                            </td>
                                            <td width="1%">{{ $makro->target }}</td>
                                            <td width="1%">{{ $makro->satuan }}</td>
                                            <td width="1%">{{ $makro->capaian }}</td>
                                            <td width="4%">
                                                @if ($makro->tingkat_capaian < 2)
                                                    <span class="badge shade-yellow min-90" style="color: #fff;width: 10%;font-weight: 500; line-height: 1.4;">0%</span>
                                                @else
                                                    <span class="badge shade-yellow min-90" style="color: #fff;text-align: right; line-height: 1.7; width: {{ $makro->tingkat_capaian }}%;">
                                                        {{ $makro->tingkat_capaian }}%
                                                    </span>
                                                @endif
                                                {{-- <td width="4%">{{ $makro->tingkat_capaian }}</td> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table section  -->
        </div>
@stop
