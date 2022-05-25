<?php
require_once "../templates/sidebar_pegawai.php";
?>

<div class="container-fluid">
    <div class="bread col-md-9 ms-sm-auto col-lg-10 fs-6 pt-4 pb-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Data Cuti</li>
            </ol>
        </nav>
    </div>

    <!-- DataTales Example -->
    <div class="card col-md-9 ms-sm-auto col-lg-10 px-4">
        <div class="card-header px-4 py-3">
            <label class="mt-2 float-left"><strong>Sisa Kredit Cuti</strong></label> : 
            <label>
                <?php 
                    $total = query("SELECT COUNT(1329010001) as total FROM cuti WHERE nip=1329010001"); 
                    echo 3 - $total[0]['total']; ?>
            </label>
            <a href="<?= peg_url('edit_pegawai') ?>" class="btn btn-add btn-sm float-right"><i class='bx bx-plus'></i> Tambah Cuti</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal Mulai Cuti</th>
                            <th>Tanggal Akhir Cuti</th>
                            <th>Alasan Cuti</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data = query("SELECT * FROM cuti WHERE nip=1329010001");
                        foreach ($data as $p) : ?>
                            <tr>
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td>
                                    <?= $p['tanggal_mulai_cuti'] ?>
                                </td>
                                <td>
                                    <?= $p['tanggal_akhir_cuti'] ?>
                                </td>
                                <td>
                                    <?= $p['alasan_cuti'] ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>