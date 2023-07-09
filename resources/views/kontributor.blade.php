@extends('header')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 dct-appoinment">
            <div class="row">
                <div class="col-md-12">
                    <h3>Penambahan</h3>
                    <ul class="nav nav-tabs paitent-app-tab">
                        <li class="active"><a href="#a" data-toggle="tab">Target Capaian</a></li>
                        <li><a href="#b" data-toggle="tab">Capaian</a></li>
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">
                        <div class="tab-pane active" id="a">

                            <form class="page-box">
                                <h5 class="page-title" style="padding-bottom: 10px;">Target Capaian</h5>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Strategi</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select">
                                            @foreach ($strategi as $s)
                                                <option value="{{$s->id}}">{{$s->strategi}}</option>
                                            @endforeach
                                        </select>
                                        <span class="form-text text-muted">Pilih salah satu <b>strategi</b> yang
                                            sesuai</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Intervensi</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select">
                                            <option>Intervensi 1</option>
                                            <option>Intervensi 2</option>
                                            <option>Intervensi 3</option>
                                        </select>
                                        <span class="form-text text-muted">Pilih salah satu <b>intervensi</b> yang
                                            sesuai</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Indikator</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select">
                                            <option>Indikator 1</option>
                                            <option>Indikator 2</option>
                                            <option>Indikator 3</option>
                                            <option>Indikator 4</option>
                                        </select>
                                        <span class="form-text text-muted">Pilih salah satu <b>indikator</b> yang
                                            sesuai</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Tahun</label>
                                    <div class="col-lg-9">
                                        <input name="website_name" class="form-control" placeholder="..."
                                            type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Capaian Indikator</label>
                                    <div class="col-lg-9">
                                        <input name="keywords" class="form-control" placeholder="..." type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Satuan</label>
                                    <div class="col-lg-9">
                                        <input name="keywords" class="form-control" placeholder="..." type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Catatan</label>
                                    <div class="col-lg-9">
                                        <input name="website description" class="form-control" placeholder="..."
                                            type="text">
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button class="btn">Save as Draft</button>
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="b">
                            <form class="page-box">
                                <h5 class="page-title" style="padding-bottom: 10px;">Capaian</h5>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Strategi</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select">
                                            <option>Strategi 1</option>
                                            <option>Strategi 2</option>
                                        </select>
                                        <span class="form-text text-muted">Pilih salah satu <b>strategi</b> yang
                                            sesuai</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Intervensi</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select">
                                            <option>Intervensi 1</option>
                                            <option>Intervensi 2</option>
                                            <option>Intervensi 3</option>
                                        </select>
                                        <span class="form-text text-muted">Pilih salah satu <b>intervensi</b> yang
                                            sesuai</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Indikator</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select">
                                            <option>Indikator 1</option>
                                            <option>Indikator 2</option>
                                            <option>Indikator 3</option>
                                            <option>Indikator 4</option>
                                        </select>
                                        <span class="form-text text-muted">Pilih salah satu <b>indikator</b> yang
                                            sesuai</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Tahun</label>
                                    <div class="col-lg-9">
                                        <input name="website_name" class="form-control" placeholder="..."
                                            type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Capaian Indikator</label>
                                    <div class="col-lg-9">
                                        <input name="website_name" class="form-control" placeholder="..."
                                            type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Satuan</label>
                                    <div class="col-lg-9">
                                        <input name="keywords" class="form-control"
                                            placeholder="harusnya terisi otomatis" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Nama Pelaksana</label>
                                    <div class="col-lg-9">
                                        <input name="website_name" class="form-control" placeholder="..."
                                            type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Tipe Pelaksana</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select">
                                            <option>Pemerintah</option>
                                            <option>Swasta</option>
                                            <option>NGO</option>
                                        </select>
                                        <span class="form-text text-muted">Pilih salah satu <b>intervensi</b> yang
                                            sesuai</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Upload Dokumen</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="file">
                                        <span class="form-text text-muted">Ukuran file max. 5 mb</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Catatan</label>
                                    <div class="col-lg-9">
                                        <input name="website description" class="form-control" placeholder="..."
                                            type="text">
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button class="btn">Save as Draft</button>
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
