<?php
require_once "../templates/sidebar.php";

//simpan data id(nip) yang dikirim dari halaman pegawai ke dalam variabel nip
$id = $_GET['id'];

// hasil dari proses result akan disimpan ke variabel data
$data = query("SELECT * FROM pegawai INNER JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan WHERE nip='$id'");
?>

<div class="container-fluid">
    <div class="col-md-9 ms-sm-auto col-lg-10 pt-4 pb-1 px-3 d-flex align-items-center fs-6 bread">
        <nav aria-label="breadcrumb fs-3">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= adm_url('jabatan_gaji') ?>">Data Jabatan dan Gaji</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
            </ol>
        </nav>
    </div>

    <div class="card col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="card-body">
            <form method="POST" action="<?= base_url('config/proses_jabatan') ?>?edit">
                <div class="form-group row mb-2">
                    <label for="id" class="col-sm-3 col-form-label">Pegawai</label>
                    <div class="col-sm-9">
                        <input type="hidden" name="id" id="id" class="form-control" value="<?= $data[0]['id_jabatan'] ?>">
                        <input type="hidden" name="nip" id="nip" class="form-control" value="<?= $data[0]['nip'] ?>">
                        <input type="text" name="id2" id="id2" class="form-control" value="<?= ucwords($data[0]['nama_pegawai']) .' - '.$data[0]['nip'] ?>" readonly>
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
        <div class="card-footer" style="background-color: #ffffff;">
            <button type="submit" class="btn btn-success"><i class='bx bx-save'></i> Simpan</button>
        </div>
        </form>
    </div>
</div>