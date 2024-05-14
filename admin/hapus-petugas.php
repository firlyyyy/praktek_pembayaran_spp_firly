<?php

$id_petugas = $_GET['id_petugas'];

include'../koneksi.php';
$sql = "delete from petugas where id_petugas='$id_petugas'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=petugas");
} else {
    echo "<script>
    alert('maaf data tidak terhapus');
    window.location.assign('?url=peutgas');
    </script>";
}
?>