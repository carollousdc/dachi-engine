<section class="content">
    <div class="row">
        <div class="col-12">
            <form id="form-submit" method="post">
                <div class="card collapsed-card">
                    <div class="card-header">
                        <button class="btn btn-danger float-right" data-card-widget="collapse" type="button">
                            Tambah
                        </button>
                        <h3 class="card-title">
                            <?= ($menu->name) ?>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12">
                                        <label>
                                            Nama
                                        </label>
                                        <input class="form-control" id="name" name="name" type="text">
                                        </input>
                                    </div>
                                    <div class="col-6 col-md-4 text-center">
                                        <label>2A</label>
                                        <div class="row">
                                            <div class="col-6 col-md-6">
                                                <input class="form-control" id="persen2a" name="persen2a" type="text">
                                                </input>
                                            </div>
                                            <div class="col-6 col-md-6">
                                                <input class="form-control" id="hd2a" name="hd2a" type="text">
                                                </input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 text-center">
                                        <label>3A</label>
                                        <div class="row">
                                            <div class="col-6 col-md-6">
                                                <input class="form-control" id="persen3a" name="persen3a" type="text">
                                                </input>
                                            </div>
                                            <div class="col-6 col-md-6">
                                                <input class="form-control" id="hd3a" name="hd3a" type="text">
                                                </input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 text-center">
                                        <label>4A</label>
                                        <div class="row">
                                            <div class="col-6 col-md-6">
                                                <input class="form-control" id="persen4a" name="persen4a" type="text">
                                                </input>
                                            </div>
                                            <div class="col-6 col-md-6">
                                                <input class="form-control" id="hd4a" name="hd4a" type="text">
                                                </input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12">
                                        <label>
                                            Telepon
                                        </label>
                                        <input class="form-control" id="phone" name="phone" type="text">
                                        </input>
                                    </div>
                                    <div class="col-4">
                                        <label>A2</label>
                                        <input class="form-control" id="a2" name="a2" type="text">
                                    </div>
                                    <div class="col-2">
                                        <label>A3</label>
                                        <input class="form-control" id="a3" name="a3" type="text">
                                    </div>
                                    <div class="col-2">
                                        <label>A4</label>
                                        <input class="form-control" id="a4" name="a4" type="text">
                                    </div>
                                    <div class="col-2">
                                        <label>S2</label>
                                        <input class="form-control" id="s2" name="s2" type="text">
                                    </div>
                                    <div class="col-2">
                                        <label>S3</label>
                                        <input class="form-control" id="s3" name="s3" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label>&nbsp;</label>
                                <div class="form-row">
                                    <label>CB</label>
                                    <div class="form-group col-1">
                                        <input class="form-control" id="persencb" name="persencb" type="text">
                                    </div>
                                    <div class="form-group col-1">
                                        <input class="form-control" id="hdcb1" name="hdcb1" type="text">
                                    </div>
                                    <div class="form-group col-1">
                                        <input class="form-control" id="hdcb2" name="hdcb2" type="text">
                                    </div>
                                    <div class="form-group col-1">
                                        <input class="form-control" id="hdcb3" name="hdcb3" type="text">
                                    </div>
                                    <div class="form-group col-1">
                                        <input class="form-control" id="hdcb4" name="hdcb4" type="text">
                                    </div>
                                    <label>CP</label>
                                    <div class="form-group col-1">
                                        <input class="form-control" id="persencp" name="persencp" type="text">
                                    </div>
                                    <div class="form-group col-1">
                                        <input class="form-control" id="hdcp1" name="hdcp1" type="text">
                                    </div>
                                    <div class="form-group col-1">
                                        <input class="form-control" id="hdcp2" name="hdcp2" type="text">
                                    </div>
                                    <div class="form-group col-1">
                                        <input class="form-control" id="hdcp3" name="hdcp3" type="text">
                                    </div>
                                    <label>CK</label>
                                    <div class="col-1">
                                        <input class="form-control" id="persenck" name="persenck" type="text">
                                    </div>
                                    <div class="col-1">
                                        <input class="form-control" id="hdck" name="hdck" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label>&nbsp;</label>
                                <div class="form-row">
                                    <label>CN</label>
                                    <div class="col-1">
                                        <input class="form-control" id="persencn" name="persencn" type="text">
                                    </div>
                                    <div class="col-1">
                                        <input class="form-control" id="hdcn1" name="hdcn1" type="text">
                                    </div>
                                    <div class="col-1">
                                        <input class="form-control" id="hdcn2" name="hdcn2" type="text">
                                    </div>
                                    <div class="col-2">
                                    </div>
                                    <label>CE</label>
                                    <div class="col-1">
                                        <input class="form-control" id="persence" name="persence" type="text">
                                    </div>
                                    <div class="col-1">
                                        <input class="form-control" id="hdce" name="hdce" type="text">
                                    </div>
                                    <div class="col-2">
                                    </div>
                                    <label>Shio</label>
                                    <div class="col-1">
                                        <input class="form-control" id="persensh" name="persensh" type="text">
                                    </div>
                                    <div class="col-1">
                                        <input class="form-control" id="hdsh" name="hdsh" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success" id="tombol-simpan" type="submit">
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Data
                        <?= ($menu->name) ?>
                    </h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 350px;">
                            <input class="form-control float-right" id="searchbox" name="searchbox" placeholder="Search" type="text">
                            </input>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="tbl_data">
                        <?= $tableHeader ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade bd-example-modal-xl" id="editModal" role="dialog">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            Edit Data
                        </h4>
                        <button class="close" data-dismiss="modal" type="button">
                            ×
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="form-edit" method="post">
                            <input class="form-control" id="id_edit" name="id_edit" type="hidden">
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <label>
                                                Nama
                                            </label>
                                            <input class="form-control" id="name_edit" name="name_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-2">
                                            <label>
                                                P2A
                                            </label>
                                            <input class="form-control" id="persen2a_edit" name="persen2a_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-2">
                                            <label>
                                                HD2A
                                            </label>
                                            <input class="form-control" id="hd2a_edit" name="hd2a_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-2">
                                            <label>
                                                P3A
                                            </label>
                                            <input class="form-control" id="persen3a_edit" name="persen3a_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-2">
                                            <label>
                                                HD3A
                                            </label>
                                            <input class="form-control" id="hd3a_edit" name="hd3a_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-2">
                                            <label>
                                                P4A
                                            </label>
                                            <input class="form-control" id="persen4a_edit" name="persen4a_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-2">
                                            <label>
                                                HD4A
                                            </label>
                                            <input class="form-control" id="hd4a_edit" name="hd4a_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-6">
                                            <label>
                                                PCP
                                            </label>
                                            <input class="form-control" id="persencp_edit" name="persencp_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-2">
                                            <label>
                                                HDCP1
                                            </label>
                                            <input class="form-control" id="hdcp1_edit" name="hdcp1_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-2">
                                            <label>
                                                HDCP2
                                            </label>
                                            <input class="form-control" id="hdcp2_edit" name="hdcp2_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-2">
                                            <label>
                                                HDCP3
                                            </label>
                                            <input class="form-control" id="hdcp3_edit" name="hdcp3_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-6">
                                            <label>
                                                PCK
                                            </label>
                                            <input class="form-control" id="persenck_edit" name="persenck_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-6">
                                            <label>
                                                HDCK
                                            </label>
                                            <input class="form-control" id="hdck_edit" name="hdck_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-6">
                                            <label>
                                                PSH
                                            </label>
                                            <input class="form-control" id="persensh_edit" name="persensh_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-6">
                                            <label>
                                                HDSH
                                            </label>
                                            <input class="form-control" id="hdsh_edit" name="hdsh_edit" type="text">
                                            </input>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <label>
                                                Telepon
                                            </label>
                                            <input class="form-control" id="phone_edit" name="phone_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-4">
                                            <label>
                                                PCB
                                            </label>
                                            <input class="form-control" id="persencb_edit" name="persencb_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-2">
                                            <label>
                                                HDCB1
                                            </label>
                                            <input class="form-control" id="hdcb1_edit" name="hdcb1_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-2">
                                            <label>
                                                HDCB2
                                            </label>
                                            <input class="form-control" id="hdcb2_edit" name="hdcb2_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-2">
                                            <label>
                                                HDCB3
                                            </label>
                                            <input class="form-control" id="hdcb3_edit" name="hdcb3_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-2">
                                            <label>
                                                HDCB4
                                            </label>
                                            <input class="form-control" id="hdcb4_edit" name="hdcb4_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-6">
                                            <label>
                                                PCN
                                            </label>
                                            <input class="form-control" id="persencn_edit" name="persencn_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                HDCN1
                                            </label>
                                            <input class="form-control" id="hdcn1_edit" name="hdcn1_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                HDCN2
                                            </label>
                                            <input class="form-control" id="hdcn2_edit" name="hdcn2_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-6">
                                            <label>
                                                PCE
                                            </label>
                                            <input class="form-control" id="persence_edit" name="persence_edit" type="text">
                                            </input>
                                        </div>
                                        <div class="col-6">
                                            <label>
                                                HDCE
                                            </label>
                                            <input class="form-control" id="hdce_edit" name="hdce_edit" type="text">
                                            </input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </input>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" id="btn_update_data" type="button">
                            Update
                        </button>
                        <button class="btn btn-default" data-dismiss="modal" type="button">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>