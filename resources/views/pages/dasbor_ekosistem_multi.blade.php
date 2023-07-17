@extends('header')


@section('page_title', 'Strategi 5 (Capaian Multi-tahun)')

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
                            <th>Kompensasi Imbal Jasa Lingkungan Hidup</th>
                            <th>Pembayaran jasa lingkungan hidup</th>
                            <th>Label ramah lingkungan hidup</th>
                            <th>Dana penanggulangan</th>
                            <th>Penghargaan kinerja</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ekosistem_multi as $item)
                            <tr>
                                <td>{{ $item->tahun }}</td>
                                <td>
                                    @if (is_null($item->i01))
                                        <span class="badge shade-yellow min-90" style="width: 0%;">0%</span>
                                    @else
                                        <span class="badge shade-yellow min-90"
                                                style="color: #fff; text-align: right; font-weight: 500; line-height: 1.4; width:
                                                {{ $item->i01 }}%;">
                                            {{ $item->i01 }}%
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    @if (is_null($item->i02))
                                        <span class="badge shade-yellow min-90" style="width: 0%;">0%</span>
                                    @else
                                        <span class="badge shade-yellow min-90"
                                                style="color: #fff; text-align: right; font-weight: 500; line-height: 1.4; width:
                                                {{ $item->i02 }}%;">
                                            {{ $item->i02 }}%
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    @if (is_null($item->i03))
                                        <span class="badge shade-yellow min-90" style="width: 0%;">0%</span>
                                    @else
                                        <span class="badge shade-yellow min-90"
                                                style="color: #fff; text-align: right; font-weight: 500; line-height: 1.4; width:
                                                {{ $item->i03 }}%;">
                                            {{ $item->i03 }}%
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    @if (is_null($item->i04))
                                        <span class="badge shade-yellow min-90" style="width: 0%;">0%</span>
                                    @else
                                        <span class="badge shade-yellow min-90"
                                                style="color: #fff; text-align: right; font-weight: 500; line-height: 1.4; width:
                                                {{ $item->i04 }}%;">
                                            {{ $item->i04 }}%
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    @if (is_null($item->i05))
                                        <span class="badge shade-yellow min-90" style="width: 0%;">0%</span>
                                    @else
                                        <span class="badge shade-yellow min-90"
                                                style="color: #fff; text-align: right; font-weight: 500; line-height: 1.4; width:
                                                {{ $item->i05 }}%;">
                                            {{ $item->i05 }}%
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
