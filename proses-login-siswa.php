<?php
var_dump($_POST);
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];

include 'koneksi.php';
$sql = "select * from siswa where nisn='$nisn' and nis='$nis'";
$query = mysqli_query($koneksi, $sql);
if(mysqli_num_rows($query)>0){
    $data = mysqli_fetch_array($query);
    session_start();
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['nisn'] = $data['nisn'];

    header('Location:siswa/siswa.php');
}else {
    echo "<script>
    alert('maaf anda gagal login, silahkan ulangi lagi');
    window.Location.assign('index.php');
    </script>";
}
?>