<?php
require_once "../../config/config.php";
$nip = $_SESSION["username"];

$awal = $_GET["awal"];
$akhir = $_GET["akhir"];

$x = mysqli_query($koneksi, "SELECT * FROM pegawai INNER JOIN jabatan_gaji, presensi, cuti WHERE pegawai.id_jabatan_gaji = jabatan_gaji.id_jabatan_gaji AND pegawai.nip = '$nip' AND cuti.nip = '$nip' AND presensi.nip = '$nip' ");
$data_pegawai = mysqli_fetch_assoc($x);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laporan Data Diri, Jabatan, dan Gaji</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link href="../assets/styles.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap');

        body {
            font-family: 'Rubik', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <header>
            <h3 class="text-center mt-5">Laporan Kinerja</h3>
            <h5 class="text-center mb-5">PT. ABC</h5>
        </header>
        <h5 class="mx-5">Periode Laporan: <?= $awal ?> s.d. <?= $akhir ?></h5>

        <h6 class="mx-5">Profil</h6>
        <div class="table-responsive mx-5">
            <table class="table table-borderless text-dark mt-3">
                <tr>
                    <td class="col-4">NIP</td>
                    <td>:</td>
                    <td class="col-8"><?= $data_pegawai['nip'] ?></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?= ucwords($data_pegawai['nama_pegawai']) ?></td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>:</td>
                    <td><?= ucwords($data_pegawai['tempat_lahir']) . ', ' . date('d-m-Y', strtotime($data_pegawai['tgl_lahir'])) ?> </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?= ucwords($data_pegawai['jk']) ?> </td>
                </tr>
                <tr>
                    <td>Status Kepegawaian</td>
                    <td>:</td>
                    <td><?= strtoupper($data_pegawai['status_pegawai']) ?> </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= ucwords($data_pegawai['alamat']) ?> </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?= $data_pegawai['email'] ?> </td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><?= $data_pegawai['no_hp'] ?> </td>
                </tr>
            </table>
        </div>
        <button onclick="window.print()">Print this page</button>
    </div>
</body>

</html>