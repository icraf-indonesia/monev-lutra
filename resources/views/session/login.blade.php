@extends('no_layout')

@section('css')
<style>

</style>
@stop

@section('content')
<div class="w-50 center border rounded px-3 py-3 mx-auto">
    <a class="web-logo1" href="{{url('')}}/" style="text-align: -webkit-center;"><img src="dist/assets/img/header-small.png" class="img-responsive" alt=""></a>
    <h3>Masuk</h3>
    <form action="/session/login" method="POST">
    @csrf
    <div class="mb-3">
        <label for="username" class="form-label">Username<span class="text-danger">*</span></label>
        <input type="username" name="username" value="{{ Session::get('username') }}" class="form-control">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3 d-grid m-t-20">
        <button name="submit" type="submit" class="btn btn-primary">Login</button>
    </div>
    </form>
</div>

{{-- <a class="web-logo1" href="{{url('')}}/" style="text-align: -webkit-center;"><img src="dist/assets/img/header-small.png" class="img-responsive" alt=""></a>
<h3 class="page-title">Masuk ke Dashboard</h3>
<form class="page-box">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Email <span class="text-danger">*</span></label>
                    <input class="form-control" placeholder="ininamasaya@gmail.com" type="email">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Kata Sandi <span class="text-danger">*</span></label>
                    <input class="form-control" value="" type="password">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center m-t-20">
                <button type="button" class="btn btn-primary submit-btn">Masuk</button>
            </div>
        </div>
</form> --}}
@stop
