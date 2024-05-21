<?php
$nisn = $_GET['nisn'];
?>
<h5>history pembayaran</h5>
<hr>
<table class="table table-striped table-border">
    <tr class="fw-bold">
        <td>No</td>
        <td>NISN</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Tahun SPP</td>
        <td>Nominal Dibayar</td>
        <td>Sudah Dibayar</td>
        <td>Tanggal Bayar</td>
        <td>Petugas</td>
        <td>Hapus</td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "select * from pembayaran,siswa,kelas,spp,petugas where pembayaran.nisn=siswa.nisn and siswa.id_kelas=kelas.id_kelas and pembayaran.id_spp=spp.id_spp and pembayaran.id_petugas=petugas.id_petugas and pembayaran.nisn='$nisn' order by tgl_bayar desc";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ 
        
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nisn'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['nama_kelas'] ?></td>
            <td><?= $data['tahun'] ?></td>
            <td><?= number_format($data['nominal'],2,',','.'); ?></td>
            <td><?= number_format($data['jumlah_bayar'],2,',','.'); ?></td>
            <td><?= $data['tgl_bayar'] ?></td>
            <td><?= $data['nama_petugas'] ?></td>
            <td>
                <a href="?url=hapus-pembayaran&id_pembayaran=<?= $data['id_pembayaran'] ?>" class="btn btn-danger"> Hapus </a>
            </td>
        </tr>
    <?php } ?>
    
</table>