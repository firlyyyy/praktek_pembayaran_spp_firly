<?php

$id_kelas = $_GET['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];

include'../koneksi.php';
$sql = "update kelas set nama_kelas='$nama_kelas', kompetensi_keahlian='$kompetensi_keahlian' where id_kelas='$id_kelas'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=kelas");
} else {
    echo "<script>
    alert('maaf data tidak tersimpan');
    window.location.assign('?url=spp');
    </script>";
}
?>