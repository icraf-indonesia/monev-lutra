<table id="patientfilter" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Strategi</th>
            <th>Intervensi</th>
            <th>Indikator</th>
            <th>Tahun</th>
            <th>Capaian Indikator</th>
            <th>Satuan</th>
            <th>Catatan</th>
            <th class="text-right">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Strategi 1</td>
            <td>Intervensi 1</td>
            <td>Indikator</td>
            <td>2022</td>
            <td>200.000</td>
            <td>Hektar</td>
            <td>Catatan...</td>
            <td class="text-right">
                <a href="#" data-toggle="modal" data-target="#add_patient"><i class="fa fa-pencil m-r-5"></i></a>
                <a href="#" data-toggle="modal" data-target="#delete_patient"><i
                        class="fa fa-trash-o m-r-5"></i></a>
            </td>
        </tr>
        <tr>
            <td>Strategi 2</td>
            <td>Intervensi 2</td>
            <td>Indikator</td>
            <td>2022</td>
            <td>200.000</td>
            <td>Hektar</td>
            <td>Catatan...</td>
            <td class="text-right">
                <a href="#" data-toggle="modal" data-target="#add_patient"><i class="fa fa-pencil m-r-5"></i></a>
                <a href="#" data-toggle="modal" data-target="#delete_patient"><i
                        class="fa fa-trash-o m-r-5"></i></a>
            </td>
        </tr>
        <tr>
            <td>Strategi 3</td>
            <td>Intervensi 3</td>
            <td>Indikator</td>
            <td>2022</td>
            <td>200.000</td>
            <td>Hektar</td>
            <td>Catatan...</td>
            <td class="text-right">
                <a href="#" data-toggle="modal" data-target="#add_patient"><i class="fa fa-pencil m-r-5"></i></a>
                <a href="#" data-toggle="modal" data-target="#delete_patient"><i
                        class="fa fa-trash-o m-r-5"></i></a>
            </td>
        </tr>
        <tr>
            <td>Strategi 4</td>
            <td>Intervensi 4</td>
            <td>Indikator</td>
            <td>2022</td>
            <td>200.000</td>
            <td>Hektar</td>
            <td>Catatan...</td>
            <td class="text-right">
                <a href="#" data-toggle="modal" data-target="#add_patient"><i class="fa fa-pencil m-r-5"></i></a>
                <a href="#" data-toggle="modal" data-target="#delete_patient"><i
                        class="fa fa-trash-o m-r-5"></i></a>
            </td>
        </tr>
        <tr>
            <td>Strategi 5</td>
            <td>Intervensi 5</td>
            <td>Indikator</td>
            <td>2022</td>
            <td>200.000</td>
            <td>Hektar</td>
            <td>Catatan...</td>
            <td class="text-right">
                <a href="#" data-toggle="modal" data-target="#add_patient"><i class="fa fa-pencil m-r-5"></i></a>
                <a href="#" data-toggle="modal" data-target="#delete_patient"><i
                        class="fa fa-trash-o m-r-5"></i></a>
            </td>
        </tr>
    </tbody>
</table>
<!-- Add Client Modal -->
<div id="add_patient" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Bagian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Strategi</label>
                                        <select class="form-control select">
                                            <option>Strategi 1</option>
                                            <option>Strategi 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Intervensi</label>
                                        <select class="form-control select">
                                            <option>Intervensi 1</option>
                                            <option>Intervensi 2</option>
                                            <option>Intervensi 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Indikator</label>
                                        <select class="form-control select">
                                            <option>Indikator 1</option>
                                            <option>Indikator 2</option>
                                            <option>Indikator 3</option>
                                            <option>Indikator 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Tahun</label>
                                        <select class="form-control select">
                                            <option>2021</option>
                                            <option>2022</option>
                                            <option>2023</option>
                                            <option>2024</option>
                                            <option>2025</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Capaian Indikator</label>
                                        <input type="text" class="form-control ">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Satuan</label>
                                        <input type="text" class="form-control ">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Catatan</label>
                                        <textarea cols="30" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
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
<div id="delete_patient" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Hapus Bagian</h4>
            </div>
            <form>
                <div class="modal-body">
                    <p>Apakah Anda yakin menghapus ini?</p>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Catatan</label>
                        <textarea cols="30" rows="4" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer"> <a href="#" class="btn btn-default" data-dismiss="modal">Tutup</a>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Add Client Modal -->
