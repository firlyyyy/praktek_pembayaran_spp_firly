<?php

$id_spp = $_GET['id_spp'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

include'../koneksi.php';
$sql = "update spp set tahun='$tahun', nominal='$nominal' where id_spp='$id_spp'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=spp");
} else {
    echo "<script>
    alert('maaf data tidak tersimpan');
    window.location.assign('?url=spp');
    </script>";
}
?>