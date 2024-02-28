@extends('header')

@section('page_title', 'Indikator Peta Jalan')

@section('css')
    <style type="text/css">
        #row-tampilan div label {
            display: block;
        }

        thead {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            background-color: #1A5E51;
            color: white;
            text-align: center;
        }
    </style>
@stop

@section('content')
<div class="row">
    <div class="col-lg-2 col-md-2 col-sm-12 dct-dashbd-lft hidden-xs hidden-sm">
        <div class="dct-dashbd-01 hidden-xs hidden-sm">
            <div class="row" id="row-tampilan">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h4>Pilih Strategi</h4>
                        <form action="/indikator" method="GET" class="d-inline">
                            @foreach ($strat as $str)
                                @php
                                    $checked = [1, 2, 3, 4, 5];
                                    if(isset($_GET['strategi']))
                                    {
                                        $checked = $_GET['strategi'];
                                    }
                                @endphp
                                <label style="width: 100%;">
                                    <input type="checkbox" name="strategi[]" value="{{$str->id}}" onchange="this.form.submit()"
                                    @if(in_array($str->id, $checked)) checked @endif
                                    /> {{$str->strategi}}
                                </label>
                            @endforeach
                        </form>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h4>Jenis Instrumen</h4>
                        <div class="switches"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12 dct-appoinment m-t-10">
            <div class="table-responsive">
                <table id="tbl-data" class="table table-bordered table-striped" style="width:100%; border:0; font-size:12;">
                    <thead>
                        <tr>
                            {{-- <th>Strategi</th> --}}
                            <th>Intervensi</th>
                            <th>Indikator Peta Jalan</th>
                            <th>Pemangku Kepentingan</th>
                            <th>IKU RPJMD Luwu Utara 2021-2026</th>
                            <th>IKK RPJMD Luwu Utara 2021-2026</th>
                            <th id="ubah">Indikator Terpercaya</th>
                            <th id="ubah">Indikator LandScale</th>
                            <th id="ubah">Indikator SourceUp</th>
                            <th id="ubah">Indikator KDSD</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tables as $table)
                            <tr>
                                {{-- <td width="10%">{{ $table->strategi}}</td> --}}
                                <td width="10%">{{ $table->intervensi }}</td>
                                <td width="10%">{{ $table->indikator }}</td>
                                <td width="10%">{{ $table->stakeholder1 }}</td>
                                <td width="10%" data-bs-toggle="modal" data-bs-target="#addnew">{{ $table->iku }}</td>
                                <td width="10%" data-bs-toggle="modal" data-bs-target="#addnew2">{{ $table->ikk }}</td>
                                <td width="10%" data-bs-toggle="modal" data-bs-target="#addnew3">{{ $table->terpercaya }}
                                </td>
                                <td width="10%" data-bs-toggle="modal" data-bs-target="#addnew4">{{ $table->landscale }}
                                </td>
                                <td width="10%" data-bs-toggle="modal" data-bs-target="#addnew5">{{ $table->sourceup }}
                                </td>
                                <td width="10%" data-bs-toggle="modal" data-bs-target="#addnew6">{{ $table->kdsd }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br />
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="{{ $tables->url($tables->onFirstPage()) }}">First</a></li>
                    <li class="page-item"><a class="page-link" href="{{ $tables->previousPageUrl() }}">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">{{ $tables->currentPage() }}</a></li>
                    <li class="page-item"><a class="page-link" href="{{ $tables->nextPageUrl() }}">Next</a></li>
                    <li class="page-item"><a class="page-link" href="{{ $tables->url($tables->lastPage()) }}">Last</a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection

@section('customJS')
var switches = $('.switches');

$('th#ubah').each(function(index) {
    var hide, item, label, text, _switch, checkbox, slider;
    index = index + 6;
    hide = $(this).attr('data-hidden') === 'true';

    if (hide) {
        $('th:nth-child(' + index + '), td:nth-child(' + index + ')').hide();
    }

    item = $('<div class="item"></div>');
    label = $('<label></label>');
    text = $('<span> ' + $(this).text() + '</span> ');
    _switch = $('<span class="switch"></span>');

    checkbox = $('<input type="checkbox" ' + (hide ? '' : 'checked="checked"') + ' value="' + (index) + '"/>').change(function (event) {
        $('th:nth-child(' + this.value + '), td:nth-child(' + this.value + ')')[this.checked ? 'show' : 'hide']();
    });

    switches.append(item.append(label.append(_switch.append(checkbox).append(slider).append(text))));
});
@stop
