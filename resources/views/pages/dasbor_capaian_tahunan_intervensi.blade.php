@extends('header')

@section('page_title', 'Capaian Tahunan Berdasarkan Intervensi')

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
                        <li><a href="{{url('')}}/capaian/tahunan/strategi">Kembali</a></li>
                        <li class="active"><a href="">Intervensi</a></li>
                    </ul>
                </div>
            </div>
            <!-- Table section  -->
            <div class="row">
                <div class="col-md-12">
                    <h3>Tabel Capaian Intervensi</h3>
                    <h4>Strategi {{ $strategi->strategi }} tahun {{ $tahun }}</h4>

                    <div class="tab-content">
                        <div class="tab-pane active" id="a">
                            {{-- tabel strategi --}}

                            <table  class="table table-striped dt-responsive nowrap" style="width:100%"> {{--id="patientfiltertoday"--}}
                                <thead>
                                    <tr>
                                        <th>Intervensi</th>
                                        <th>Capaian Keberhasilan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($intervensi as $item2)
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
