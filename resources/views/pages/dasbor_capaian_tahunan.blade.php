@extends('header')

@section('page_title', 'Capaian Tahunan')

@section('content')
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12 dct-dashbd-lft hidden-xs hidden-sm">
            <div class="dct-dashbd-01 hidden-xs hidden-sm">
                @include('dasbor_sidebar')
            </div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 dct-appoinment m-t-10">
            <!-- Table section  -->
            <div class="row">
                <div class="col-md-12 patient-app-01">
                    <h3>Tabel Capaian</h3>
                    <label for="year">Tahun:</label>
                    <form method="GET">
                        <select name="year" id="year" style="margin-left:10px; width:150px;" onchange="this.form.submit()">
                            @foreach ($tahun as $t)
                                <option {{ ($year == $t->tahun) ? "selected":"" }} value='{{$t->tahun}}'>{{$t->tahun}}</option>
                            @endforeach
                        </select>
                    </form>
                    <ul class="nav nav-tabs paitent-app-tab">
                        <li class="active"><a href="#strategi" data-toggle="tab">Strategi</a></li>
                        <li><a href="#intervensi" data-toggle="tab">Intervensi</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="strategi">
                            <table id="patientfilter" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Strategi</th>
                                        <th>Capaian Keberhasilan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($capaian_by_strategi as $item)
                                        <tr>
                                            <td width="50%">{{ $item->strategi }}</td>
                                            <td>
                                                @if (is_null($item->persen))
                                                    <span class="badge shade-yellow min-90" style="width: 0%;">0%</span>
                                                @else
                                                    <span class="badge shade-yellow min-90" style="color: #fff; text-align: right; font-weight: 500; line-height: 1.4; width: {{ $item->persen }}%;">
                                                        {{ $item->persen }}%
                                                    </span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="intervensi">
                            <table id="patientfiltertoday" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Intervensi</th>
                                        <th>Capaian Keberhasilan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($capaian_by_intervensi as $item2)
                                        <tr>
                                            <td width="50%">{{ $item2->intervensi }}</td>
                                            <td>
                                                @if (is_null($item2->persen))
                                                    <span class="badge shade-yellow min-90" style="width: 0%;">0%</span>
                                                @else
                                                    <span class="badge shade-yellow min-90" style="color: #fff; text-align: right; font-weight: 500; line-height: 1.4; width: {{ $item2->persen }}%;">
                                                        {{ $item2->persen }}%
                                                    </span>
                                                @endif
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
