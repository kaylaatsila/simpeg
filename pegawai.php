<?php
require_once "templates/sidebar.php";
?>
<div class="container-fluid">
    <div class="bread col-md-9 ms-sm-auto col-lg-10 fs-6 pt-4 pb-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Data Pegawai</li>
            </ol>
        </nav>
    </div>

    <!-- DataTales Example -->
    <div class="card col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="card-header flex-shrink-0 py-3">
            <a href="<?= base_url('tambah_pegawai') ?>" class="btn btn-add btn-sm float-right"><i class='bx bx-plus'></i> Tambah Data</a>
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
                            <th>Email</th>
                            <th>No. HP</th>
                            <th>Aktif/Nonaktif</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data_p = query("SELECT * FROM pegawai GROUP BY nip asc");
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
                                    <?= $p['email'] ?>
                                </td>
                                <td>
                                    <?= $p['no_hp'] ?>
                                </td>
                                <td>
                                    <?= ucwords($p['status_pegawai']) ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('detail_pegawai') ?>?id=<?= $p['nip'] ?>" class="btn btn-detail btn-sm"><i class='bx bx-info-circle'></i> Detail</a>
                                    <a href="" class="btn btn-edit btn-sm"><i class='bx bx-pencil'></i> Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>