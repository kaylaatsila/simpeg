<?php
require_once "../templates/sidebar_pegawai.php";
$laporan = array('Laporan Kinerja');         
?>

<div class="container-fluid">
    <div class="col-md-9 ms-sm-auto col-lg-10 pt-4 pb-1 px-3 d-flex align-items-center fs-6 bread">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Laporan Kinerja</li>
            </ol>
        </nav>
    </div>

    <div class="card col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="card-body">
            <form method="POST" action="<?= base_url('config/proses_laporan') ?>?pegawai">
                <div class="form-group row mb-2">
                    <label for="jabatan" class="col-sm-3 col-form-label">Pilih Laporan Kinerja</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="laporan" id="laporan" required autocomplete="off" autofocus>
                                <option value="<?= $laporan[0] ?>"><?= $laporan[0] ?></option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="tmt" class="col-sm-3 col-form-label">Dari Tanggal</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" value="<?= date('Y-m-d'); ?>" name="awal" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="sampai_tgl" class="col-sm-3 col-form-label">Sampai Tanggal</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" value="<?= date('Y-m-d'); ?>" name="akhir" required>
                    </div>
                </div>

        </div>
        <div class="card-footer" style="background-color: #ffffff;">
            <button type="submit" class="btn btn-success"><i class='bx bx-printer'></i> Cetak</button>
        </div>
        </form>
    </div>
</div>