<?php

session_start();
// var_dump($_SESSION);
if(empty($_SESSION['nisn'])){
    echo "<script>
    alert ('maaf, anda belum login');
    window.location.assign('../index.php');
    </script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa - Aplikasi Pembayaran SPP.</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
       
        <h3>APLIKASI PEMBAYARAN SPP</h3>
        <div class="alert alert-info">
            ANDA LOGIN SEBAGAI SISWA <b><?= $_SESSION['nama'] ?></b> APLIKASI PEMBAYARAN SPP
        </div>
        <a href="siswa.php" class="btn btn-primary"> Siswa </a>
        <a href="siswa.php?url=logout" class="btn btn-primary"> Log Out </a>

        <div class="card mt-2">
            <div class="card-body">
                <!-- isi web -->
                <?php
                    $file = @$_GET['url'];
                    if(empty($file)){
                        echo "<h4> Selamat Datang Di Halaman Siswa </h4>";
                        echo "Aplikasi Pembayaran SPP digunakan  untuk mempermudah dalam mencatat pembayaran siswa(i) di sekolah";
                        echo "<hr>";
                        include 'history-pembayaran.php';
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