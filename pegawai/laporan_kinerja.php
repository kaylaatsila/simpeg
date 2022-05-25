<?php
require_once "../templates/sidebar_pegawai.php";
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
            <form method="POST" action="<?= base_url('config/proses_laporan') ?>?print">
                <div class="form-group row mb-2">
                    <label for="jabatan" class="col-sm-3 col-form-label">Pilih Laporan Kinerja</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="laporan" id="laporan" required autocomplete="off" autofocus>
                            <?php
                            $laporan = array('Data Diri', 'Data Jabatan dan Gaji', 'Rekapitulasi Presensi dan Cuti');

                            for ($x = 0; $x < 3; $x++) : ?>                      
                                <option value="<?= $laporan[$x] ?>"><?= $laporan[$x] ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>
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

        </div>
        <div class="card-footer" style="background-color: #ffffff;">
            <button type="submit" class="btn btn-success"><i class='bx bx-printer'></i> Cetak</button>
        </div>
        </form>
    </div>
</div>