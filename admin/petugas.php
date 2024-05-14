<h5>halaman data petugas</h5>
<a href="?url=tambah-petugas" class="btn btn-primary"> Tambah petugas </a>
<hr>
<table class="table table-striped table-border">
    <tr class="fw-bold">
        <td>No</td>
        <td>Username</td>
        <td>Password</td>
        <td>Nama Petugas</td>
        <td>Level</td>
        <td>Edit</td>
        <td>Hapus</td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "select * from petugas order by id_petugas desc";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['username'] ?></td>
            <td><?= $data['password'] ?></td>
            <td><?= $data['nama_petugas'] ?></td>
            <td><?= $data['level'] ?></td>
            <td>
                <a href="?url=edit-petugas&id_petugas=<?= $data['id_petugas'] ?>" class="btn btn-warning">Edit</a>
            </td>
            <td>
                <a onclick="return confirm('apakah anda yakin ingin menhapus data?')" href="?url=hapus-petugas&id_petugas=<?= $data['id_petugas'] ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php } ?>
    
</table>