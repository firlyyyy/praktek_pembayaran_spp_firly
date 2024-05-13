<?php

$id_kelas = $_GET['id_kelas'];
// var_dump($_GET)
include'../koneksi.php';
$sql = "delete from kelas where id_kelas='$id_kelas'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=kelas");
} else {
    echo "<script>
    alert('maaf data tidak terhapus');
    window.location.assign('?url=kelas');
    </script>";
}
?>