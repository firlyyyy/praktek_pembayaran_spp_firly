<h5>halaman data siswa</h5>
<a href="?url=tambah-siswa" class="btn btn-primary"> Tambah Siswa </a>
<hr>
<table class="table table-striped table-border">
    <tr class="fw-bold">
        <td>No</td>
        <td>NISN</td>
        <td>NIS</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Alamat</td>
        <td>No Telepon</td>
        <td>SPP</td>
        <td>Edit</td>
        <td>Hapus</td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "select * from siswa,spp,kelas where siswa.id_kelas=kelas.id_kelas and siswa.id_spp=spp.id_spp order by nama ASC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nisn'] ?></td>
            <td><?= $data['nis'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['nama_kelas'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['no_telp'] ?></td>
            <td><?= $data['tahun'] ?> -<?= number_format($data['nominal'],2,',','.'); ?></td>
            <td>
                <a href="?url=edit-siswa&nisn=<?= $data['nisn'] ?>" class="btn btn-warning">Edit</a>
            </td>
            <td>
                <a onclick="return confirm('apakah anda yakin ingin menhapus data?')" href="?url=hapus-siswa&nisn=<?= $data['nisn'] ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php } ?>
    
</table>