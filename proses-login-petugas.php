<?php

$username = $_POST['username'];
$password = $_POST['password'];

include 'koneksi.php';
$sql = "select * from petugas where username='$username' and password='$password'";
$query = mysqli_query($koneksi, $sql);
if(mysqli_num_rows($query)>0){
    $data = mysqli_fetch_array($query);
    session_start();
    $_SESSION['id_petugas'] = $data['id_petugas'];
    $_SESSION['nama_petugas'] = $data['nama_petugas'];
    $_SESSION['level'] = $data['level'];
    if($data['level'] == 'admin'){
        header('Location:admin/admin.php');
    } else if ($data['level'] == 'petugas'){
        header('Location:petugas/petugas.php');
    }
} else {
    echo "<script>
    alert ('maaf, login anda gagal, silahkan ulangi lagi');
    window.location.assign('index2.php');
    </script>";
}


?>