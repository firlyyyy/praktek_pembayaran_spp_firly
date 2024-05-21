<?php

session_start();
if(empty($_SESSION['id_petugas'])){
    echo "<script>
    alert ('maaf, anda belum login');
    window.location.assign('../index2.php');
    </script>";
}
if($_SESSION['level']!='petugas'){
    echo "<script>
    alert ('maaf, anda bukan admin');
    window.location.assign('../index2.php');
    </script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas - Aplikasi Pembayaran SPP.</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
       
        <h3>APLIKASI PEMBAYARAN SPP</h3>
        <div class="alert alert-info">
            ANDA LOGIN SEBAGAI PETUGAS <b><?= $_SESSION['nama_petugas']; ?></b> APLIKASI PEMBAYARAN SPP
        </div>
        <a href="petugas.php" class="btn btn-primary"> Petugas </a>
        <a href="petugas.php?url=pembayaran" class="btn btn-primary"> Pembayaran </a>
        <a href="petugas.php?url=logout" class="btn btn-primary"> Log Out </a>

        <div class="card mt-2">
            <div class="card-body">
                <!-- isi web -->
                <?php
                    $file = @$_GET['url'];
                    if(empty($file)){
                        echo "<h4> Selamat Datang Di Halaman Petugas </h4>";
                        echo "Aplikasi Pembayaran SPP digunakan  untuk mempermudah dalam mencatat pembayaran siswa(i) di sekolah";
                    } else {
                        include $file.'.php';
                    }
                ?>
            </div>
        </div>

    </div>    


<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>