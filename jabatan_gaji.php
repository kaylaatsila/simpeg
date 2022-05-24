<?php
require_once "templates/sidebar.php";
?>
<div class="container-fluid">
    <div class="bread col-md-9 ms-sm-auto col-lg-10 fs-6 pt-4 pb-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Data Jabatan dan Gaji</li>
            </ol>
        </nav>
    </div>

    <!-- DataTales Example -->
    <div class="card col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="card-header flex-shrink-0 py-3">
            <a href="<?= base_url('tambah_jabatan_gaji') ?>" class="btn btn-add btn-sm float-right"><i class='bx bx-plus'></i> Tambah Data</a>
            <a href="<?= base_url('edit_jabatan_gaji') ?>" class="btn btn-edit btn-sm float-right"><i class='bx bx-pencil'></i> Edit Data</a>
            <!-- <a href="" target="_blank" class="btn btn-info btn-sm float-right mr-3"><i class="fas fa-print"></i> Print Pegawai</a> -->
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pegawai</th>
                            <th>NIP</th>
                            <th>Jabatan</th>
                            <th>Gaji</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $kueri =  ("SELECT * 
                                    FROM pegawai, jabatan, gaji, komponen_gaji
                                    WHERE pegawai.id_jabatan = jabatan.id_jabatan 
                                      AND jabatan.id_gaji = gaji.id_gaji 
                                      AND gaji.id_komponen_gaji = komponen_gaji.id_komponen_gaji");
                        $data_p = query($kueri);
                        foreach ($data_p as $p) : ?>
                            <tr>
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td>
                                    <?= ucwords($p['nama_pegawai']) ?>
                                </td>
                                <td>
                                    <?= $p['nip'] ?>
                                </td>
                                <td>
                                    <?= $p['nama_jabatan'] ?>
                                </td>
                                <td>
                                    Rp. <?= $p['pokok'] + $p['tunjangan'] + $p['lembur'] ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>