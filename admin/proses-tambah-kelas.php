<?php

$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];

include'../koneksi.php';
$sql = "insert into kelas(nama_kelas, kompetensi_keahlian) values ('$nama_kelas','$kompetensi_keahlian')";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=kelas");
} else {
    echo "<script>
    alert('maaf data tidak tersimpan');
    window.location.assign('?url=kelas');
    </script>";
}
?>