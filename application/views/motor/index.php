<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>Data Motor</h3>

        <a href="<?= site_url('motor/tambah'); ?>" class="btn btn-primary">
            + Tambah Motor
        </a>

    </div>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">

            <tr>

                <th width="50">No</th>

                <th>Merk</th>

                <th>Tipe</th>

                <th>Tahun</th>

                <th>No Polisi</th>

                <th width="180">Aksi</th>

            </tr>

        </thead>

        <tbody>

        <?php if(empty($motor)){ ?>

            <tr>

                <td colspan="7" class="text-center">
                    Data motor belum ada.
                </td>

            </tr>

        <?php } ?>

        <?php
        $no=1;
        foreach($motor as $m):
        ?>

            <tr>

                <td><?= $no++; ?></td>

                <td><?= $m->merk; ?></td>

                <td><?= $m->tipe; ?></td>

                <td><?= $m->tahun; ?></td>

                <td><?= $m->nomor_polisi; ?></td>

                <td>

                    <a href="<?= site_url('motor/edit/'.$m->id_motor); ?>"
                       class="btn btn-warning btn-sm">

                        Edit

                    </a>

                    <a href="<?= site_url('motor/hapus/'.$m->id_motor); ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus data ini?')">

                        Hapus

                    </a>

                </td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>