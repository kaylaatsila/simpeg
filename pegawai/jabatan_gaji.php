<?php
require_once "../templates/sidebar_pegawai.php";

$nip = $_SESSION['username'];

$base = query("SELECT * 
                FROM pegawai
                WHERE nip='$nip'");

$data = query("SELECT * 
                FROM pegawai, jabatan, gaji
                WHERE pegawai.id_jabatan = jabatan.id_jabatan AND jabatan.id_gaji = gaji.id_gaji AND nip='$nip'");
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
    <div class="card col-md-9 ms-sm-auto col-lg-10 py-3 px-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless text-dark mt-3">
                    <tr>
                        <td class="col-4">Nomor Induk</td>
                        <td>:</td>
                        <td class="col-8"><?= $base[0]['nip'] ?></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><?= ucwords($base[0]['nama_pegawai']) ?></td>
                    </tr>
                    <tr>
                        <td><strong>Jabatan</strong></td>
                        <td>:</td>
                        <td><?= ucwords($data[0]['nama_jabatan']) ?> </td>
                    </tr>
                    <tr>
                        <td><strong>Gaji Total</strong></td>
                        <td>:</td>
                        <td>Rp. <?= $data[0]['pokok'] + $data[0]['lembur'] ?> </td>
                    </tr>
                    <div class="table">
                        <tr>
                            <td class="px-5">- Pokok</td>
                            <td>:</td>
                            <td>Rp. <?= $data[0]['pokok'] ?> </td>
                        </tr>
                        <tr>
                            <td class="px-5">- Lembur</td>
                            <td>:</td>
                            <td>Rp. <?= $data[0]['lembur'] ?> </td>
                        </tr>
                    </div>
                </table>
            </div>
        </div>
    </div>