<div class="container-fluid">

    <h3 class="mb-4">Edit Booking</h3>

    <form method="post">

        <div class="mb-3">
            <label class="form-label">Motor</label>

            <select name="id_motor" class="form-control" required>

                <?php foreach($motor as $m){ ?>

                    <option value="<?= $m->id_motor; ?>"
                        <?= ($booking->id_motor==$m->id_motor)?'selected':''; ?>>

                        <?= $m->merk; ?> <?= $m->tipe; ?> (<?= $m->nomor_polisi; ?>)

                    </option>

                <?php } ?>

            </select>

        </div>

        <div class="mb-3">
            <label class="form-label">Layanan</label>

            <select name="id_layanan" class="form-control" required>

                <?php foreach($layanan as $l){ ?>

                    <option value="<?= $l->id_layanan; ?>"
                        <?= ($booking->id_layanan==$l->id_layanan)?'selected':''; ?>>

                        <?= $l->nama_layanan; ?> -
                        Rp <?= number_format($l->harga,0,',','.'); ?>

                    </option>

                <?php } ?>

            </select>

        </div>

        <div class="mb-3">
            <label class="form-label">Mekanik</label>

            <select name="id_mekanik" class="form-control" required>

                <?php foreach($mekanik as $mk){ ?>

                    <option value="<?= $mk->id_mekanik; ?>"
                        <?= ($booking->id_mekanik==$mk->id_mekanik)?'selected':''; ?>>

                        <?= $mk->nama_mekanik; ?>

                    </option>

                <?php } ?>

            </select>

        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Booking</label>

            <input type="date"
                   name="tanggal_booking"
                   class="form-control"
                   value="<?= $booking->tanggal_booking; ?>"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jam Booking</label>

            <input type="time"
                   name="jam_booking"
                   class="form-control"
                   value="<?= $booking->jam_booking; ?>"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Keluhan</label>

            <textarea
                name="keluhan"
                class="form-control"
                rows="4"
                required><?= $booking->keluhan; ?></textarea>

        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>

            <select name="status" class="form-control">

                <option value="Menunggu" <?= ($booking->status=='Menunggu')?'selected':''; ?>>Menunggu</option>

                <option value="Diproses" <?= ($booking->status=='Diproses')?'selected':''; ?>>Diproses</option>

                <option value="Selesai" <?= ($booking->status=='Selesai')?'selected':''; ?>>Selesai</option>

                <option value="Dibatalkan" <?= ($booking->status=='Dibatalkan')?'selected':''; ?>>Dibatalkan</option>

            </select>

        </div>

        <button type="submit" class="btn btn-primary">
            Update
        </button>

        <a href="<?= site_url('booking'); ?>" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>