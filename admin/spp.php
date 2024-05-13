<h5>halaman data SPP</h5>
<a href="?url=tambah-spp" class="btn btn-primary"> Tambah SPP </a>
<hr>
<table class="table table-striped table-border">
    <tr class="fw-bold">
        <td>No</td>
        <td>Tahun</td>
        <td>Nominal</td>
        <td>Edit</td>
        <td>Hapus</td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "select * from spp order by id_spp desc";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['tahun'] ?></td>
            <td><?= $data['nominal'] ?></td>
            <td>
                <a href="?url=edit-spp&id_spp=<?= $data['id_spp'] ?>" class="btn btn-warning">Edit</a>
            </td>
            <td>
                <a onclick="return confirm('apakah anda yakin ingin menhapus data?')" href="?url=hapus-spp&id_spp=<?= $data['id_spp'] ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php } ?>
    
</table>