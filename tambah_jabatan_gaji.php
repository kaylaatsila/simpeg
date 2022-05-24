<?php
require_once "templates/sidebar.php";
?>

<div class="container-fluid">
    <div class="col-md-9 ms-sm-auto col-lg-10 pt-4 pb-1 px-3 d-flex align-items-center fs-6 bread">
        <nav aria-label="breadcrumb fs-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('jabatan_gaji') ?>">Data Jabatan dan Gaji</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
            </ol>
        </nav>
    </div>

    <div class="card col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="card-body align-items-center">Semua pegawai sudah terdata!</div>
        <!-- <div class="card-body">
            <form method="POST" action="<?= base_url('config/proses_jabatan') ?>?add">
                <div class="form-group row mb-2">
                    <label for="nip" class="col-sm-3 col-form-label">Pilih Pegawai</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="nip" id="nip" required autocomplete="off" autofocus>
                            <?php
                            $data_pegawai = query("SELECT * FROM pegawai GROUP BY nama_pegawai asc");
                            foreach ($data_pegawai as $pegawai) : ?>
                                <option value="<?= $pegawai['nip'] ?>"><?= $pegawai['nama_pegawai'] . ' - ' . $pegawai['nip'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="jabatan" class="col-sm-3 col-form-label">Pilih Jabatan</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="jabatan" id="jabatan" required autocomplete="off" autofocus>
                            <?php
                            $data_jabatan = query("SELECT * FROM jabatan GROUP BY id_jabatan asc");

                            foreach ($data_jabatan as $jabatan) : ?>
                                <option value="<?= $jabatan['id_jabatan'] ?>"><?= $jabatan['nama_jabatan'] ?></option>
                            <?php endforeach; ?>
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
        <div class="card-footer">
            <button type="submit" class="btn btn-success"><i class='bx bx-save'></i> Simpan</button>
        </div>
        </form> -->
    </div>
</div>