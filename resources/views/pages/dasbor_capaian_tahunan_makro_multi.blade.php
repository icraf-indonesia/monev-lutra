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
                        <li><a href="{{url('')}}/capaian/tahunan">Kembali</a></li>
                        <li class="active"><a href="{{url('')}}/capaian/tahunan/{{$indikator->id}}/indikator">Grafik</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <h3>Grafik Capaian Indikator Makro</h3>
                    <h4><strong>{{$indikator->indikator}}</strong> @if($indikator->satuan) dengan satuan <strong>{{$indikator->satuan}}</strong> @endif <h4>
                    <div class="card">
                        <div class="card-body">
                            <div class="chart" style="min-height: 400px;">
                                <canvas id="lineChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="infobox">
                        <div class="icon bg-teal">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <div class="content">
                            <div class="text">Rataan capaian seluruh strategi tahun {{$selectedYear}}</div>
                            <div class="number">{{ $rataan }}%</div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
@stop

@section('customJS')
var ctx = document.getElementById('lineChart');
var data = {
    labels: @json($data_label),
    datasets: [
        {
            label: 'target',
            data: @json($data_target),
            borderColor: 'red',
            borderWidth: 1,
            fill: false,
            tension: 0
        },
        {
            label: 'capaian',
            data: @json($data_capaian),
            borderColor: 'blue',
            borderWidth: 1,
            fill: false,
            tension: 0
        },
    ]
};
var config = {
    type: 'line',
    data: data,
    options: {
        title: {
            text: 'Target vs capaian per tahun',
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
