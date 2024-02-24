@extends('header')

@section('page_title', 'Capaian Tahunan')

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
                    <h3>Tabel Capaian</h3>
                    <label for="year">Tahun:</label>
                    <form method='get'>
                        <select class="form-control select" name="tahun" style="margin-bottom: 10px;" onchange="this.form.submit()">
                            @foreach ($tahun as $p)
                                <option {{ ($selectedYear == $p->tahun) ? "selected":"" }} value="{{$p->tahun}}">{{$p->tahun}}</option>
                            @endforeach
                        </select>
                    </form>
                    <ul class="nav nav-tabs paitent-app-tab">
                        <li><a href="{{url('')}}/capaian/tahunan">Indikator Makro</a></li>
                        <li class="active"><a href="{{url('')}}/capaian/tahunan/strategi">Strategi</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="a">
                            {{-- tabel strategi --}}
                            <table class="table table-striped dt-responsive nowrap" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Strategi</th>
                                        <th>Capaian Keberhasilan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($capaian_by_strategi as $item)
                                    <tr>
                                        <td width="50%">
                                            <a href="{{url('')}}/capaian/tahunan/strategi/{{ $selectedYear}}/{{ $item->id }}/intervensi">
                                                {{ $item->strategi }}
                                            </a>
                                        </td>
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
                    </div>
                </div>
            </div>
            <!-- Table section  -->
        </div>
    @stop
