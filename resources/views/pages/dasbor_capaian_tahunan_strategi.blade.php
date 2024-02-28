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
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs paitent-app-tab" style="margin-bottom: 10px; margin-top: -10px">
                        <li><a href="{{url('')}}/capaian/tahunan">Indikator Makro</a></li>
                        <li class="active"><a href="{{url('')}}/capaian/tahunan/strategi">Strategi</a></li>
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
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="chart" style="min-height: 400px;">
                                <canvas id="lineChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="infobox">
                        <div class="icon bg-teal">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <div class="content">
                            <div class="text">Rataan capaian seluruh strategi tahun {{$selectedYear}}</div>
                            <div class="number">{{ $rataan }}%</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table section  -->
            <div class="row">
                <div class="col-md-12">
                    <h3>Tabel capaian tahun {{ $selectedYear }}</h3>
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
                                                {{ $item->strategi }} <i class="material-icons" style="font-size: 14px">link</i>
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

@section('customJS')
var ctx = document.getElementById('lineChart');
var data = {
    labels: @json($data['labels']),
    datasets: [{
        label: 'persen',
        data: @json($data['data']),
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1,
        fill: false,
        tension: 0.01
    }]
};
var config = {
    type: 'line',
    data: data,
    options: {
        title: {
            text: 'Rata-rata capaian per tahun',
            display: true
        },
        legend: { position: 'bottom' },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    suggestedMax: 0.1,
                    min: 0
                }
            }]
        }
    }
};

var myChart = new Chart(ctx, config);

@stop
