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
                        <li><a href="#c" data-toggle="tab">Verifikasi Target</a></li>
                        <li><a href="#d" data-toggle="tab">Verifikasi Capaian</a></li>
                        {{-- <li><a href="#e" data-toggle="tab">Hapus Data</a></li> --}}
                    </ul>
                    <div class="tab-content" style="padding-top: 10px;">
                        <div class="tab-pane active" id="a">
                            <form class="page-box">
                                <h5 class="page-title" style="padding-bottom: 10px;">Target Capaian</h5>
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
                                        <input name="website_name" class="form-control" placeholder="..." type="text">
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
                                        <input name="website_name" class="form-control" placeholder="..." type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Capaian Indikator</label>
                                    <div class="col-lg-9">
                                        <input name="website_name" class="form-control" placeholder="..." type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Satuan</label>
                                    <div class="col-lg-9">
                                        <input name="keywords" class="form-control" placeholder="harusnya terisi otomatis"
                                            type="text">
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
                        <div class="tab-pane" id="c">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dct-appoinment">
                                <!-- first row -->
                                <div class="row">
                                    <div class="col-sm-4 col-xs-6">
                                        <h3>Verifikasi Target</h3>
                                    </div>
                                    {{-- <div class="col-sm-8 col-xs-6 text-right1">
                                        <a href="#" class="btn-employee" data-toggle="modal"
                                            data-target="#add_employee"><i class="fa fa-plus"></i> Add Employee</a>
                                    </div> --}}
                                </div>
                                <div class="row Employee-grid">
                                    <div class="col-md-3 col-sm-4 col-xs-6 col-lg-3 m-t--60">
                                        <div class="profile-widget">
                                            <h4 class="user-name Employee-name text-ellipsis"><a>Strategi</a></h4>
                                            <div class="small text-muted" style="color: red;">Perlu Diverifikasi</div>
                                            <div class="user-country">intervensi</div>
                                            <div class="row pro-mar hidden-xs hidden-sm">
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-green dropdown-toggle text-right"
                                                        href="#" data-toggle="modal"
                                                        data-target="#add_employee">Ubah</a>
                                                </div>
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-red dropdown-toggle text-left"
                                                        href="#" data-toggle="modal"
                                                        data-target="#delete_employee">Hapus</a>
                                                </div>
                                            </div>
                                            <div class="row pro-mar visible-xs visible-sm nopadding">
                                                <a class="custom-badge status-green dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#add_employee"><i
                                                        class="fa fa-pencil m-5"></i></a><a
                                                    class="custom-badge status-red dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#delete_employee"><i
                                                        class="fa fa-trash-o m-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6 col-lg-3 m-t--60">
                                        <div class="profile-widget">
                                            <h4 class="user-name Employee-name text-ellipsis"><a>Strategi</a></h4>
                                            <div class="small text-muted" style="color: red;">Perlu Diverifikasi</div>
                                            <div class="user-country">intervensi</div>
                                            <div class="row pro-mar hidden-xs hidden-sm">
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-green dropdown-toggle text-right"
                                                        href="#" data-toggle="modal"
                                                        data-target="#add_employee">Ubah</a>
                                                </div>
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-red dropdown-toggle text-left"
                                                        href="#" data-toggle="modal"
                                                        data-target="#delete_employee">Hapus</a>
                                                </div>
                                            </div>
                                            <div class="row pro-mar visible-xs visible-sm nopadding">
                                                <a class="custom-badge status-green dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#add_employee"><i
                                                        class="fa fa-pencil m-5"></i></a><a
                                                    class="custom-badge status-red dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#delete_employee"><i
                                                        class="fa fa-trash-o m-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6 col-lg-3 m-t--60">
                                        <div class="profile-widget">
                                            <h4 class="user-name Employee-name text-ellipsis"><a>Strategi</a></h4>
                                            <div class="small text-muted" style="color: green;">Sudah Diverifikasi</div>
                                            <div class="user-country">intervensi</div>
                                            <div class="row pro-mar hidden-xs hidden-sm">
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-green dropdown-toggle text-right"
                                                        href="#" data-toggle="modal"
                                                        data-target="#add_employee">Ubah</a>
                                                </div>
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-red dropdown-toggle text-left"
                                                        href="#" data-toggle="modal"
                                                        data-target="#delete_employee">Hapus</a>
                                                </div>
                                            </div>
                                            <div class="row pro-mar visible-xs visible-sm nopadding">
                                                <a class="custom-badge status-green dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#add_employee"><i
                                                        class="fa fa-pencil m-5"></i></a><a
                                                    class="custom-badge status-red dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#delete_employee"><i
                                                        class="fa fa-trash-o m-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6 col-lg-3 m-t--60">
                                        <div class="profile-widget">
                                            <h4 class="user-name Employee-name text-ellipsis"><a>Strategi</a></h4>
                                            <div class="small text-muted" style="color: green;">Sudah Diverifikasi</div>
                                            <div class="user-country">intervensi</div>
                                            <div class="row pro-mar hidden-xs hidden-sm">
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-green dropdown-toggle text-right"
                                                        href="#" data-toggle="modal"
                                                        data-target="#add_employee">Ubah</a>
                                                </div>
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-red dropdown-toggle text-left"
                                                        href="#" data-toggle="modal"
                                                        data-target="#delete_employee">Hapus</a>
                                                </div>
                                            </div>
                                            <div class="row pro-mar visible-xs visible-sm nopadding">
                                                <a class="custom-badge status-green dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#add_employee"><i
                                                        class="fa fa-pencil m-5"></i></a><a
                                                    class="custom-badge status-red dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#delete_employee"><i
                                                        class="fa fa-trash-o m-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6 col-lg-3 m-t--60">
                                        <div class="profile-widget">
                                            <h4 class="user-name Employee-name text-ellipsis"><a>Strategi</a></h4>
                                            <div class="small text-muted" style="color: green;">Sudah Diverifikasi</div>
                                            <div class="user-country">intervensi</div>
                                            <div class="row pro-mar hidden-xs hidden-sm">
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-green dropdown-toggle text-right"
                                                        href="#" data-toggle="modal"
                                                        data-target="#add_employee">Ubah</a>
                                                </div>
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-red dropdown-toggle text-left"
                                                        href="#" data-toggle="modal"
                                                        data-target="#delete_employee">Hapus</a>
                                                </div>
                                            </div>
                                            <div class="row pro-mar visible-xs visible-sm nopadding">
                                                <a class="custom-badge status-green dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#add_employee"><i
                                                        class="fa fa-pencil m-5"></i></a><a
                                                    class="custom-badge status-red dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#delete_employee"><i
                                                        class="fa fa-trash-o m-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add employee Modal -->
                                <div id="add_employee" class="modal custom-modal fade" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ubah</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="m-t-30">                                                    
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Strategi</label>
                                                                    <div class="col-lg-10">
                                                                        <input class="form-control" type="text"
                                                                            value="Strategi is automatically generated"
                                                                            disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Intervensi</label>
                                                                    <div class="col-lg-10">
                                                                        <input class="form-control" type="text"
                                                                            value="Intervensi is automatically generated"
                                                                            disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Indikator</label>
                                                                    <div class="col-lg-10">
                                                                        <input class="form-control" type="text"
                                                                            value="Indikator is automatically generated"
                                                                            disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Tahun</label>
                                                                    <div class="col-lg-10">
                                                                        <select class="select">
                                                                            <option>2021</option>
                                                                            <option>2022</option>
                                                                            <option>2023</option>
                                                                            <option>2024</option>
                                                                            <option>2025</option>
                                                                            <option>2026</option>
                                                                            <option>2027</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Capaian</label>
                                                                    <div class="col-lg-10">
                                                                        <input class="form-control" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Satuan</label>
                                                                    <div class="col-lg-10">
                                                                        <input class="form-control" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Nama Pelaksana</label>
                                                                    <div class="col-lg-10">
                                                                        <input class="form-control" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Tipe Pelaksana</label>
                                                                    <div class="col-lg-10">
                                                                        <select class="select">
                                                                            <option>Pemerintah</option>
                                                                            <option>Swasta</option>
                                                                            <option>NGO</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Pilih File</label>
                                                                    <div class="col-lg-10">
                                                                        <input type="file" name="fileToUpload"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Catatan</label>
                                                                    <div class="col-lg-10">
                                                                        <textarea rows="5" cols="5" class="form-control"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>    
                                                    </div>
                                                    <div class="text-center submit-btns">
                                                        <button type="submit" class="btn m-l-5">Simpan</button>
                                                        <button type="submit" class="btn submit-active m-l-15">Verifikasi</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="delete_employee" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Hapus</h4>
                                            </div>
                                            <form>
                                                <div class="modal-body">
                                                    <p>Apakah Anda ingin menghapus ini?</p>
                                                </div>
                                                <div class="modal-footer"> <a href="#" class="btn btn-default"
                                                        data-dismiss="modal">Tutup</a>
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Add employee Modal -->
                                <!-- first row end-->
                            </div>
                        </div>
                        <div class="tab-pane" id="d">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dct-appoinment">
                                <!-- first row -->
                                <div class="row">
                                    <div class="col-sm-4 col-xs-6">
                                        <h3>Verifikasi Capaian</h3>
                                    </div>
                                    {{-- <div class="col-sm-8 col-xs-6 text-right1">
                                        <a href="#" class="btn-employee" data-toggle="modal"
                                            data-target="#add_employee"><i class="fa fa-plus"></i> Add Employee</a>
                                    </div> --}}
                                </div>
                                <div class="row Employee-grid">
                                    <div class="col-md-3 col-sm-4 col-xs-6 col-lg-3 m-t--60">
                                        <div class="profile-widget">
                                            <h4 class="user-name Employee-name text-ellipsis"><a>Strategi</a></h4>
                                            <div class="small text-muted" style="color: green;">Sudah Diverifikasi</div>
                                            <div class="user-country">intervensi</div>
                                            <div class="row pro-mar hidden-xs hidden-sm">
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-green dropdown-toggle text-right"
                                                        href="#" data-toggle="modal"
                                                        data-target="#add_employee">Ubah</a>
                                                </div>
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-red dropdown-toggle text-left"
                                                        href="#" data-toggle="modal"
                                                        data-target="#delete_employee">Hapus</a>
                                                </div>
                                            </div>
                                            <div class="row pro-mar visible-xs visible-sm nopadding">
                                                <a class="custom-badge status-green dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#add_employee"><i
                                                        class="fa fa-pencil m-5"></i></a><a
                                                    class="custom-badge status-red dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#delete_employee"><i
                                                        class="fa fa-trash-o m-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6 col-lg-3 m-t--60">
                                        <div class="profile-widget">
                                            <h4 class="user-name Employee-name text-ellipsis"><a>Strategi</a></h4>
                                            <div class="small text-muted" style="color: red;">Perlu Diverifikasi</div>
                                            <div class="user-country">intervensi</div>
                                            <div class="row pro-mar hidden-xs hidden-sm">
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-green dropdown-toggle text-right"
                                                        href="#" data-toggle="modal"
                                                        data-target="#add_employee">Ubah</a>
                                                </div>
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-red dropdown-toggle text-left"
                                                        href="#" data-toggle="modal"
                                                        data-target="#delete_employee">Hapus</a>
                                                </div>
                                            </div>
                                            <div class="row pro-mar visible-xs visible-sm nopadding">
                                                <a class="custom-badge status-green dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#add_employee"><i
                                                        class="fa fa-pencil m-5"></i></a><a
                                                    class="custom-badge status-red dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#delete_employee"><i
                                                        class="fa fa-trash-o m-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6 col-lg-3 m-t--60">
                                        <div class="profile-widget">
                                            <h4 class="user-name Employee-name text-ellipsis"><a>Strategi</a></h4>
                                            <div class="small text-muted" style="color: green;">Sudah Diverifikasi</div>
                                            <div class="user-country">intervensi</div>
                                            <div class="row pro-mar hidden-xs hidden-sm">
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-green dropdown-toggle text-right"
                                                        href="#" data-toggle="modal"
                                                        data-target="#add_employee">Ubah</a>
                                                </div>
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-red dropdown-toggle text-left"
                                                        href="#" data-toggle="modal"
                                                        data-target="#delete_employee">Hapus</a>
                                                </div>
                                            </div>
                                            <div class="row pro-mar visible-xs visible-sm nopadding">
                                                <a class="custom-badge status-green dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#add_employee"><i
                                                        class="fa fa-pencil m-5"></i></a><a
                                                    class="custom-badge status-red dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#delete_employee"><i
                                                        class="fa fa-trash-o m-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6 col-lg-3 m-t--60">
                                        <div class="profile-widget">
                                            <h4 class="user-name Employee-name text-ellipsis"><a>Strategi</a></h4>
                                            <div class="small text-muted" style="color: red;">Perlu Diverifikasi</div>
                                            <div class="user-country">intervensi</div>
                                            <div class="row pro-mar hidden-xs hidden-sm">
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-green dropdown-toggle text-right"
                                                        href="#" data-toggle="modal"
                                                        data-target="#add_employee">Ubah</a>
                                                </div>
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-red dropdown-toggle text-left"
                                                        href="#" data-toggle="modal"
                                                        data-target="#delete_employee">Hapus</a>
                                                </div>
                                            </div>
                                            <div class="row pro-mar visible-xs visible-sm nopadding">
                                                <a class="custom-badge status-green dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#add_employee"><i
                                                        class="fa fa-pencil m-5"></i></a><a
                                                    class="custom-badge status-red dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#delete_employee"><i
                                                        class="fa fa-trash-o m-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6 col-lg-3 m-t--60">
                                        <div class="profile-widget">
                                            <h4 class="user-name Employee-name text-ellipsis"><a>Strategi</a></h4>
                                            <div class="small text-muted" style="color: red;">Perlu Diverifikasi</div>
                                            <div class="user-country">intervensi</div>
                                            <div class="row pro-mar hidden-xs hidden-sm">
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-green dropdown-toggle text-right"
                                                        href="#" data-toggle="modal"
                                                        data-target="#add_employee">Ubah</a>
                                                </div>
                                                <div class="col-md-6 col-sm-6 dropdown action-label">
                                                    <a class="custom-badge status-red dropdown-toggle text-left"
                                                        href="#" data-toggle="modal"
                                                        data-target="#delete_employee">Hapus</a>
                                                </div>
                                            </div>
                                            <div class="row pro-mar visible-xs visible-sm nopadding">
                                                <a class="custom-badge status-green dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#add_employee"><i
                                                        class="fa fa-pencil m-5"></i></a><a
                                                    class="custom-badge status-red dropdown-toggle text-center m-5"
                                                    href="#" data-toggle="modal" data-target="#delete_employee"><i
                                                        class="fa fa-trash-o m-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add employee Modal -->
                                <div id="add_employee" class="modal custom-modal fade" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ubah</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="m-t-30">                                                    
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Strategi</label>
                                                                    <div class="col-lg-10">
                                                                        <input class="form-control" type="text"
                                                                            value="Strategi is automatically generated"
                                                                            disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Intervensi</label>
                                                                    <div class="col-lg-10">
                                                                        <input class="form-control" type="text"
                                                                            value="Intervensi is automatically generated"
                                                                            disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Indikator</label>
                                                                    <div class="col-lg-10">
                                                                        <input class="form-control" type="text"
                                                                            value="Indikator is automatically generated"
                                                                            disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Tahun</label>
                                                                    <div class="col-lg-10">
                                                                        <select class="select">
                                                                            <option>2021</option>
                                                                            <option>2022</option>
                                                                            <option>2023</option>
                                                                            <option>2024</option>
                                                                            <option>2025</option>
                                                                            <option>2026</option>
                                                                            <option>2027</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Capaian</label>
                                                                    <div class="col-lg-10">
                                                                        <input class="form-control" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Satuan</label>
                                                                    <div class="col-lg-10">
                                                                        <input class="form-control" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Nama Pelaksana</label>
                                                                    <div class="col-lg-10">
                                                                        <input class="form-control" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Tipe Pelaksana</label>
                                                                    <div class="col-lg-10">
                                                                        <select class="select">
                                                                            <option>Pemerintah</option>
                                                                            <option>Swasta</option>
                                                                            <option>NGO</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Pilih File</label>
                                                                    <div class="col-lg-10">
                                                                        <input type="file" name="fileToUpload"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-10">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-lg-2 control-label">Catatan</label>
                                                                    <div class="col-lg-10">
                                                                        <textarea rows="5" cols="5" class="form-control"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>    
                                                    </div>
                                                    <div class="text-center submit-btns">
                                                        <button type="submit" class="btn m-l-5">Simpan</button>
                                                        <button type="submit" class="btn submit-active m-l-15">Verifikasi</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="delete_employee" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Hapus</h4>
                                            </div>
                                            <form>
                                                <div class="modal-body">
                                                    <p>Apakah Anda ingin menghapus ini?</p>
                                                </div>
                                                <div class="modal-footer"> <a href="#" class="btn btn-default"
                                                        data-dismiss="modal">Tutup</a>
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Add employee Modal -->
                                <!-- first row end-->
                            </div>
                        </div>
                        {{-- <div class="tab-pane" id="e">
                            <h4>Hapus Data</h4>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
