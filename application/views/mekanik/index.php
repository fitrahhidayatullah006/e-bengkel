<div class="container-fluid">

    <h3>Data Mekanik</h3>

    <a href="<?= site_url('mekanik/tambah'); ?>" class="btn btn-primary mb-3">
        Tambah Mekanik
    </a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1;
        foreach ($mekanik as $m): ?>

            <tr>

                <td>
                    <?= $no++; ?>
                </td>

                <td><?= $m->nama_mekanik; ?></td>

                <td><?= $m->no_hp; ?></td>

                <td><?= $m->alamat; ?></td>

                <td>

                    <a href="<?= site_url('mekanik/edit/' . $m->id_mekanik); ?>" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <a href="<?= site_url('mekanik/hapus/' . $m->id_mekanik); ?>" class="btn btn-danger btn-sm"
                        onclick="return confirm('Hapus data?')">
                        Hapus
                    </a>

                </td>

            </tr>

        <?php endforeach; ?>

    </table>

</div>