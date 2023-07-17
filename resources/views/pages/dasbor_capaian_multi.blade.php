@extends('header')


@section('page_title', 'Capaian Multi-tahun')

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
                <table id="patientfilter" class="table table-striped dt-responsive nowrap" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th>Tahun</th>
                            <th>Alokasi & Tataguna Lahan</th>
                            <th>Akses Modal Penghidupan</th>
                            <th>Produktivitas & Diversifikasi</th>
                            <th>Rantai Nilai</th>
                            <th>Jasa Ekosistem</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($capaian_multi as $item)
                            <tr>
                                <td>{{ $item->tahun }}</td>
                                <td>
                                    @if (is_null($item->s1))
                                        <span class="badge shade-yellow min-90" style="width: 0%;">0%</span>
                                    @else
                                        <span class="badge shade-yellow min-90"
                                                style="color: #fff; text-align: right; font-weight: 500; line-height: 1.4; width:
                                                {{ $item->s1 }}%;">
                                            {{ $item->s1 }}%
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    @if (is_null($item->s2))
                                        <span class="badge shade-yellow min-90" style="width: 0%;">0%</span>
                                    @else
                                        <span class="badge shade-yellow min-90"
                                                style="color: #fff; text-align: right; font-weight: 500; line-height: 1.4; width:
                                                {{ $item->s2 }}%;">
                                            {{ $item->s2 }}%
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    @if (is_null($item->s3))
                                        <span class="badge shade-yellow min-90" style="width: 0%;">0%</span>
                                    @else
                                        <span class="badge shade-yellow min-90"
                                                style="color: #fff; text-align: right; font-weight: 500; line-height: 1.4; width:
                                                {{ $item->s3 }}%;">
                                            {{ $item->s3 }}%
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    @if (is_null($item->s4))
                                        <span class="badge shade-yellow min-90" style="width: 0%;">0%</span>
                                    @else
                                        <span class="badge shade-yellow min-90"
                                                style="color: #fff; text-align: right; font-weight: 500; line-height: 1.4; width:
                                                {{ $item->s4 }}%;">
                                            {{ $item->s4 }}%
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    @if (is_null($item->s5))
                                        <span class="badge shade-yellow min-90" style="width: 0%;">0%</span>
                                    @else
                                        <span class="badge shade-yellow min-90"
                                                style="color: #fff; text-align: right; font-weight: 500; line-height: 1.4; width:
                                                {{ $item->s5 }}%;">
                                            {{ $item->s5 }}%
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
@stop
