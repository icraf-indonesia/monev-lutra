@extends('header')

@section('content')
<div class="container-fluid" style="max-width: 1170px; margin: auto;">
    <div class="row">
    @foreach ($artikel as $news)
        <div class="col-md-4 col-sm-12 mt-4">
            <div class="card">
                <img src="https://www.freyabadi.com/hubfs/aromatic-cocoa-beans-as-background-cocoa-beans-cocoa-fruits-wooden.jpg" class="card-img-top" alt="gambar" >
                <div class="card-body">
                    <h5 class="card-title">{{ $news->judul }}</h5>
                    <a href="/artikel/{{ $news->id }}" class="btn btn-primary">Baca Artikel</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@stop
