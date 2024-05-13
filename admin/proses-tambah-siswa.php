<?php

$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$id_spp = $_POST['id_spp'];

include'../koneksi.php';
$sql = "insert into siswa(nisn,nis,nama,id_kelas,alamat,no_telp,id_spp) values ('$nisn','$nis','$nama','$id_kelas','$alamat','$no_telp','$id_spp')";
$query = mysqli_query($koneksi, $sql);
var_dump($sql);
if($query){
    header("Location:?url=siswa");
} else {
    echo "<script>
    alert('maaf data tidak tersimpan');
    window.location.assign('?url=siswa');
    </script>";
}
?>