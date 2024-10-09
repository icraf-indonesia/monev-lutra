@extends('header')

@section('content')
<div class="container-fluid" style="max-width: 1170px; margin: auto;">
    <div class="row">
    <a href="/artikel">
        <button class="btn btn-info text-white w-100">Kembali</button>
    </a>
    <h2 style="padding-bottom:20px;">{{$artikel->judul}}</h2>
    <img src="https://www.freyabadi.com/hubfs/aromatic-cocoa-beans-as-background-cocoa-beans-cocoa-fruits-wooden.jpg" class="card-img-top" alt="gambar" width="300px">
    <br>
    <p>
        {{$artikel->deskripsi}}
    </p>
    </div>
</div>
@stop
