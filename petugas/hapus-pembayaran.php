<?php

$id_pembayaran = $_GET['id_pembayaran'];
// var_dump($_GET)
include'../koneksi.php';
$sql = "delete from pembayaran where id_pembayaran='$id_pembayaran'";
$query = mysqli_query($koneksi, $sql);
if($query){
    echo "<script>
    window.history.go(-1)('?url=pembayaran');
    </script>";
} else {
    echo "<script>
    alert('maaf data tidak terhapus');
    window.history.go(-1)('?url=pembayaran');
    </script>";
}
?>