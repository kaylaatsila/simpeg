<?php
require_once "../config/config.php";

if (isset($_SESSION['login'])) {

} else {
    echo "
    <script>
        alert('Silakan login terlebih dahulu!');
        window.location='" . base_url('login') . "';
    </script>            
";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistem Informasi Kepegawaian">
    <meta name="author" content="kayla">

    <title>SIMPEG - Admin</title>

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
    <!-- Sidebar -->
    <nav class="sidebar d-flex flex-nowrap col-md-3 col-lg-2">
        <div class="d-flex flex-column flex-shrink-0 p-3">
            <a href="<?= adm_url('pegawai') ?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <span class="sidebar-header fs-4 mx-4"><i class='bx bx-group'></i> SIMPEG</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="<?= adm_url('pegawai') ?>" class="nav-link link-dark btn-toggle"><i class='bx bx-user'></i> Data Pegawai
                    </a>
                </li>
                <li>
                    <a href="<?= adm_url('jabatan_gaji') ?>" class="nav-link link-dark btn-toggle"><i class='bx bx-money'></i> Jabatan dan Gaji
                    </a>
                </li>
                <li>
                    <a href="<?= adm_url('presensi_cuti') ?>" class="nav-link link-dark btn-toggle"><i class='bx bx-fingerprint'></i> Presensi dan Cuti
                    </a>
                </li>
                <li>
                    <a href="<?= adm_url('laporan_kepegawaian') ?>" class="nav-link link-dark btn-toggle"><i class='bx bxs-report'></i> Laporan Kepegawaian
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://avatars.githubusercontent.com/u/79374942?v=4" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>admin</strong>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <!-- <li><a class="dropdown-item" href="<?= peg_url('pegawai') ?>">pegawai</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li> -->
                    <li><a class="dropdown-item" href="<?= base_url('config/proses_log') ?>?logout">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Sidebar -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>