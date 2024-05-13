<?php

$nisn = $_GET['nisn'];


include'../koneksi.php';
$sql = "delete from siswa where nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
var_dump($sql);
if($query){
    header("Location:?url=siswa");
} else {
    echo "<script>
    alert('maaf data tidak terhapus');
    window.location.assign('?url=siswa');
    </script>";
}
?>