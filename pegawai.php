<?php
    require_once "sidebar.php";
?>

    <!-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Data Pegawai</li>
        </ol>
    </nav> -->

    <!-- DataTales Example -->
    <div class="card mb-4 col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="card-header py-3">
            <a href="" class="btn btn-primary btn-sm float-right"><i class="fas fa-user-plus"></i> Tambah Pegawai</a>
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
                            <th>Status Kepegawaian</th>
                            <th>Aktif/Nonaktif</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
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
                                    <?= strtoupper($p['status_kepegawaian']) ?>
                                </td>
                                <td>
                                    <?= ucwords($p['status_user']) ?>
                                </td>
                                <td>
                                    <a href="" class="btn btn-success btn-sm"><i class="fas fa-eye"></i> Detail</a>
                                    <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                    <a href="" target="_blank" class="btn btn-info btn-sm"><i class="fas fa-print"></i> Print</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>