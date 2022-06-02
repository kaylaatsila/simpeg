<?php
require_once "../templates/sidebar_pegawai.php";

$nip = $_SESSION['username'];

$data_pegawai = query("SELECT * FROM pegawai WHERE nip='$nip'");
?>

<div class="container-fluid">
    <div class="bread col-md-9 ms-sm-auto col-lg-10 fs-6 pt-4 pb-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Data Diri</li>
            </ol>
        </nav>
    </div>

    <!-- DataTales Example -->
    <div class="card col-md-9 ms-sm-auto col-lg-10 px-4">
        <div class="card-header px-4 py-3">
            <a href="<?= peg_url('edit_pegawai') ?>" class="btn btn-edit btn-sm float-right"><i class='bx bx-pencil'></i> Edit Data</a>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <h2 class="mt-3"><?= ucwords($data_pegawai[0]['nama_pegawai']) ?></h2>
                                <span class="text-muted"><?= $data_pegawai[0]['nip'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless text-dark mt-3">
                                    <tr>
                                        <td class="col-4">NIP</td>
                                        <td>:</td>
                                        <td class="col-8"><?= $data_pegawai[0]['nip'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>:</td>
                                        <td><?= ucwords($data_pegawai[0]['nama_pegawai']) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tempat, Tanggal Lahir</td>
                                        <td>:</td>
                                        <td><?= ucwords($data_pegawai[0]['tempat_lahir']) . ', ' . date('d-m-Y', strtotime($data_pegawai[0]['tgl_lahir'])) ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>:</td>
                                        <td><?= ucwords($data_pegawai[0]['jk']) ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Status Kepegawaian</td>
                                        <td>:</td>
                                        <td><?= strtoupper($data_pegawai[0]['status_pegawai']) ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td><?= ucwords($data_pegawai[0]['alamat']) ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td><?= $data_pegawai[0]['email'] ?> </td>
                                    </tr>
                                    <tr>
                                        <td>No. HP</td>
                                        <td>:</td>
                                        <td><?= $data_pegawai[0]['no_hp'] ?> </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>