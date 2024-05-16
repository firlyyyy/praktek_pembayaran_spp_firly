<?php

$id_petugas = $_SESSION['id_petugas'];
$nisn = $_POST['nisn'];
$tgl_bayar = $_POST['tgl_bayar'];
$bulan_dibayar = $_POST['bulan_bayar'];
$tahun_dibayar = $_POST['tahun_dibayar'];
$id_spp = $_POST['id_spp'];
$jumlah_bayar = $_POST['jumlah_bayar'];

include'../koneksi.php';
$sql = "insert into pembayaran(id_petugas,nisn,tgl_bayar,bulan_dibayar,tahun_dibayar,id_spp,jumlah_bayar) values ('$id_petugas','$nisn','$tgl_bayar','$bulan_dibayar','$tahun_dibayar','$id_spp','$jumlah_bayar')";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=pembayaran");
} else {
    echo "<script>
    alert('maaf data tidak tersimpan');
    window.location.assign('?url=pembayaran');
    </script>";
}
?>