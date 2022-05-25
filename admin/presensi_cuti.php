<?php
require_once "../templates/sidebar.php";
?>
<div class="container-fluid">
    <div class="bread col-md-9 ms-sm-auto col-lg-10 fs-6 pt-4 pb-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Data Presensi dan Cuti</li>
            </ol>
        </nav>
    </div>

    <!-- DataTales Example -->
    <div class="card col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="card-body">
            <nav>
                <div class="nav nav-tabs mt-2" id="nav-tab" role="tablist">
                    <button class="nav-link" id="nav-presensi-tab" data-bs-toggle="tab" data-bs-target="#nav-presensi" type="button" role="tab" aria-selected="true">Data Presensi</button>
                    <button class="nav-link" id="nav-cuti-tab" data-bs-toggle="tab" data-bs-target="#nav-cuti" type="button" role="tab">Data Cuti</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <!-- tab presensi -->
                <div class="tab-pane fade active" id="nav-presensi" role="tabpanel" aria-labelledby="nav-presensi-tab" tabindex="0">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Pegawai</th>
                                    <th>NIP</th>
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
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- tab cuti -->
                <div class="tab-pane fade" id="nav-cuti" role="tabpanel" aria-labelledby="nav-cuti-tab" tabindex="0">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Pegawai</th>
                                    <th>NIP</th>
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
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>