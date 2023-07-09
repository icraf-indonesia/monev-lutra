@extends('header')

@section('menu_content')
<div id="map-opt" class="p-1 bg-white">
    <div>
        <button type="button" class="btn btn-secondary btn-sm" onclick="location.reload()" title="{{ __('Muat ulang') }}"><i class="fas fa-sync"></i></button>
        <span id="chevron-opt" class="d-inline-block align-top btn btn-primary btn-sm" onclick="toggleOpt()" title="{{ __('Pengaturan Tampilan') }}"><i class="fas fa-angle-double-right"></i></span>
    </div>
    <div id="map-opt-inner" style="display: none">
        <div id="map-opt-inner2" class="map-inner2">
            <div id="opt-region">
                <span>{{ __('Daerah') }}</span>
                <div id="opt-regions"></div>
            </div>
            <div id="opt-fields"></div>
            <hr>
            <input type="hidden" id="hdn_qry" name="hdn_qry">
            <button id="btnProcess" disabled type="button" class="btn btn-primary" onclick="showMap3(true)">{{ __('Proses') }}</button>
        </div>
    </div>
</div>
<div id="interactive-map" class="embed-responsive">
    <iframe>Your browser isn't compatible</iframe>
</div>
<div id="qry-res" class="p-1 bg-white">
    <span id="chevron-qry" class="d-inline-block align-top btn btn-primary btn-sm" onclick="toggleQry()" title="{{ __('Query & Hasil') }}"><i class="fas fa-angle-double-left"></i></span>
    <div id="qry-res-inner" style="display: none">
        <div id="qry-res-inner2" class="map-inner2">
            {{ __('Query') }}:
            <div id="txt_qry"></div>
            <hr>
            {{ __('Hasil') }}:
            <div id="txt_result"></div>
        </div>
    </div>
</div>
@stop

@section('customJSLibrary')
<script src="https://unpkg.com/shpjs@latest/dist/shp.js"></script>
@stop

@section('customJS')
function toggleOpt() {
    if ($("#map-opt-inner").css("display") == "none") {
        $("#chevron-opt").html('<i class="fas fa-angle-double-left"></i>');
    } else {
        $("#chevron-opt").html('<i class="fas fa-angle-double-right"></i>');
    }
    $("#map-opt-inner").toggle("slide");
}

function toggleQry() {
    if ($("#qry-res-inner").css("display") == "none") {
        $("#chevron-qry").html('<i class="fas fa-angle-double-right"></i>');
    } else {
        $("#chevron-qry").html('<i class="fas fa-angle-double-left"></i>');
    }
    $("#qry-res-inner").toggle("slide");
}

$(".wrapper").css('cursor','wait');
arrRegion = [];
optRegion = '<div><select id="sel_region" name="sel_region" class="form-control" onchange="genQuery()"><option value="all"> {{ __('Semua') }}</option>';
$.getJSON('/shpfile/load/{{ $regional->id }}', function(data) {
    (data.features).forEach(a => arrRegion.push(a.properties.namobj));
    arrRegion.sort().forEach(a => optRegion += '<option value="'+encodeURI(a)+'">'+a+'</option>');
    optRegion += '</select>';
    $('#opt-regions').html(optRegion);
    showMap3();
});

optFields = '';
i = 0;
lstFields = '{{ $map->selected_fields }}'.split(',');
lstFields.forEach(a => {
    b = a.split("__");
    if (b.length > 1) c = b[1].split("_"); else c = b[0].split("_");
    for (i=0; i < c.length; i++) { c[i] = c[i].charAt(0).toUpperCase() + c[i].slice(1); }
    optFields += '<span>' + (c.length > 1 ? c.join(' ') : c[0]) + '</span>';
    optFields += '<div id="opt-'+a+'" name="opt-'+a+'"><select class="form-control" id="sel_'+a+'" name="sel_'+a+'" onchange="genQuery()"><option value=""></option>#opt-'+a+'#</select></div>';
    $.getJSON('/shpfile/fieldvalue/{{ $map->table_name }}/' + a, function(data) {
        opts = '';
        data.forEach(d => {
            if (d[a] !== null && d[a] != '') opts += '<option value="'+encodeURI(d[a])+'">'+d[a]+'</option>';
        });
        optFields = optFields.replace('#opt-'+a+'#', opts);
    });
});
setTimeout(function() {
    $('#opt-fields').html(optFields);
    $(".wrapper").css('cursor','default');
}, 2500 * lstFields.length);
@stop