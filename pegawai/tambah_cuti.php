<?php
require_once "../templates/sidebar_pegawai.php";
?>

<div class="container-fluid">
    <div class="col-md-9 ms-sm-auto col-lg-10 pt-4 pb-1 px-3 d-flex align-items-center fs-6 bread">
        <nav aria-label="breadcrumb fs-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= peg_url('cuti') ?>">Cuti</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah</li>
            </ol>
        </nav>
    </div>

    <div class="card col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <form method="POST" action="<?= base_url('config/proses_pegawai') ?>?add" enctype="multipart/form-data">
            <div class="card-body">
            <div class="form-group row mb-2">
                    <label for="tmt" class="col-sm-3 col-form-label">Dari Tanggal</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" value="<?= date('Y-m-d'); ?>" name="tmt" placeholder="TMT" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="sampai_tgl" class="col-sm-3 col-form-label">Sampai Tanggal</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" value="<?= date('Y-m-d'); ?>" name="sampai_tgl" placeholder="Tanggal Ijazah" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="alasan" class="col-sm-3 col-form-label">Alasan Cuti</label>
                    <div class="col-sm-9">
                        <textarea name="alasan" class="form-control" id="alasan" cols="10" rows="3" placeholder="Alasan mengambil cuti" required autocomplete="off"></textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer" style="background-color: #ffffff;">
                <button type="submit" class="btn btn-success"><i class='bx bx-save'></i> Simpan</button>
                <a href="<?= peg_url('pegawai') ?>" class="btn btn btn-outline-danger"> Batal</a>
            </div>
        </form>
    </div>
</div>