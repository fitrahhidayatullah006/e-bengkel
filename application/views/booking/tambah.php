<div class="container-fluid">

    <h3 class="mb-4">Tambah Booking</h3>

    <form method="post">

        <div class="mb-3">
            <label class="form-label">Motor</label>

            <select name="id_motor" class="form-control" required>

                <option value="">-- Pilih Motor --</option>

                <?php foreach($motor as $m){ ?>

                    <option value="<?= $m->id_motor; ?>">

                        <?= $m->merk; ?> <?= $m->tipe; ?> (<?= $m->nomor_polisi; ?>)

                    </option>

                <?php } ?>

            </select>

        </div>

        <div class="mb-3">

            <label class="form-label">Layanan</label>

            <select name="id_layanan" class="form-control" required>

                <option value="">-- Pilih Layanan --</option>

                <?php foreach($layanan as $l){ ?>

                    <option value="<?= $l->id_layanan; ?>">

                        <?= $l->nama_layanan; ?> -
                        Rp <?= number_format($l->harga,0,',','.'); ?>

                    </option>

                <?php } ?>

            </select>

        </div>

        <div class="mb-3">

            <label class="form-label">Mekanik</label>

            <select name="id_mekanik" class="form-control" required>

                <option value="">-- Pilih Mekanik --</option>

                <?php foreach($mekanik as $mk){ ?>

                    <option value="<?= $mk->id_mekanik; ?>">

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
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label">Jam Booking</label>

            <input type="time"
                   name="jam_booking"
                   class="form-control"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label">Keluhan</label>

            <textarea
                name="keluhan"
                class="form-control"
                rows="4"
                required></textarea>

        </div>

        <div class="mb-3">

            <label class="form-label">Status</label>

            <select name="status" class="form-control">

                <option value="Menunggu">Menunggu</option>
                <option value="Diproses">Diproses</option>
                <option value="Selesai">Selesai</option>
                <option value="Dibatalkan">Dibatalkan</option>

            </select>

        </div>

        <button type="submit" class="btn btn-primary">

            Simpan

        </button>

        <a href="<?= site_url('booking'); ?>" class="btn btn-secondary">

            Kembali

        </a>

    </form>

</div>