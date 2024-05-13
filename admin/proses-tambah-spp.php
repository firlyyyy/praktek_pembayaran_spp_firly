<?php

$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

include'../koneksi.php';
$sql = "insert into spp(tahun,nominal) values ('$tahun','$nominal')";
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