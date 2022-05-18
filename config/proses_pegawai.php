<?php 
    require_once "config.php";

    if(isset($_GET['add'])){
        $nip = mysqli_real_escape_string($koneksi, $_POST['nip']);
        $nama_pegawai = strip_tags($_POST['nama_pegawai']);
        $tempat_lahir = strip_tags($_POST['tempat_lahir']);
        $tgl_lahir = strip_tags($_POST['tgl_lahir']);
        $jk = strip_tags($_POST['jk']);
        $no_hp = strip_tags($_POST['no_hp']);
        $email = strip_tags($_POST['email']);
        $alamat = strip_tags($_POST['alamat']);
        $status_pegawai = strip_tags($_POST['status_pegawai']);
    
        // $ekstensi  = ['png', 'jpeg', 'jpg'];
        // $namaFile    = strtolower($_FILES['foto']['name']);
        // $tipe   = pathinfo($namaFile, PATHINFO_EXTENSION);
        // $ukuranFile    = $_FILES['foto']['size'];
        // $sumber   = $_FILES['foto']['tmp_name'];
        // $foto = uniqid();
        // $foto .= '.';
        // $foto .= $tipe;

        create("INSERT INTO pegawai VALUES ('$nip', '$nama_pegawai', '$tempat_lahir', '$tgl_lahir', '$jk', '$no_hp', '$email', '$alamat', '$status_pegawai')");

        echo '<script>
        alert("Data Berhasil Ditambah")
        window.location = "' . base_url('pegawai') . '";
        </script>';
    }
?>