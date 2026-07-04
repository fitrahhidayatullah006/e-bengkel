<div class="container-fluid">

    <h3>Data Layanan</h3>

    <a href="<?= site_url('layanan/tambah'); ?>" class="btn btn-primary mb-3">
        Tambah Layanan
    </a>

    <table class="table table-bordered">

        <thead class="table-dark">

            <tr>

                <th>No</th>

                <th>Nama Layanan</th>

                <th>Harga</th>

                <th width="180">Aksi</th>

            </tr>

        </thead>

        <tbody>

        <?php
        $no=1;
        foreach($layanan as $l):
        ?>

            <tr>

                <td><?= $no++; ?></td>

                <td><?= $l->nama_layanan; ?></td>

                <td>Rp <?= number_format($l->harga,0,',','.'); ?></td>

                <td>

                    <a href="<?= site_url('layanan/edit/'.$l->id_layanan); ?>" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <a href="<?= site_url('layanan/hapus/'.$l->id_layanan); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')">
                        Hapus
                    </a>

                </td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>