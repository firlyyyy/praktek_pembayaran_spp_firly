<?php

$id_spp = $_GET['id_spp'];
// var_dump($_GET)
include'../koneksi.php';
$sql = "delete from spp where id_spp='$id_spp'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=spp");
} else {
    echo "<script>
    alert('maaf data tidak terhapus');
    window.location.assign('?url=spp');
    </script>";
}
?>