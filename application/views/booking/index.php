<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>Data Booking</h3>

        <a href="<?= site_url('booking/tambah'); ?>" class="btn btn-primary">
            + Tambah Booking
        </a>

    </div>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">

            <tr>

                <th>No</th>
                <th>Motor</th>
                <th>Layanan</th>
                <th>Mekanik</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Status</th>
                <th>Aksi</th>

            </tr>

        </thead>

        <tbody>

        <?php if(empty($booking)){ ?>

            <tr>

                <td colspan="8" class="text-center">
                    Belum ada data booking.
                </td>

            </tr>

        <?php } ?>

        <?php $no=1; foreach($booking as $b){ ?>

            <tr>

                <td><?= $no++; ?></td>

                <td>
                    <?= $b->merk; ?> <?= $b->tipe; ?><br>
                    <small><?= $b->nomor_polisi; ?></small>
                </td>

                <td><?= $b->nama_layanan; ?></td>

                <td><?= $b->nama_mekanik; ?></td>

                <td><?= $b->tanggal_booking; ?></td>

                <td><?= $b->jam_booking; ?></td>

                <td>

                    <?php

                    if($b->status=="Menunggu"){
                        echo '<span class="badge bg-warning">Menunggu</span>';
                    }
                    elseif($b->status=="Diproses"){
                        echo '<span class="badge bg-primary">Diproses</span>';
                    }
                    elseif($b->status=="Selesai"){
                        echo '<span class="badge bg-success">Selesai</span>';
                    }
                    else{
                        echo '<span class="badge bg-danger">Dibatalkan</span>';
                    }

                    ?>

                </td>

                <td>

                    <a href="<?= site_url('booking/edit/'.$b->id_booking); ?>"
                       class="btn btn-warning btn-sm">

                        Edit

                    </a>

                    <a href="<?= site_url('booking/hapus/'.$b->id_booking); ?>"
                       onclick="return confirm('Yakin ingin menghapus booking ini?')"
                       class="btn btn-danger btn-sm">

                        Hapus

                    </a>

                </td>

            </tr>

        <?php } ?>

        </tbody>

    </table>

</div>