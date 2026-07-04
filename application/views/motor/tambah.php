<div class="container-fluid">

    <h3 class="mb-4">Tambah Motor</h3>

    <form method="post">

        <div class="mb-3">

            <label class="form-label">Merk Motor</label>

            <input
                type="text"
                name="merk"
                class="form-control"
                placeholder="Contoh : Honda"
                required>

        </div>

        <div class="mb-3">

            <label class="form-label">Tipe Motor</label>

            <input
                type="text"
                name="tipe"
                class="form-control"
                placeholder="Contoh : Beat Deluxe"
                required>

        </div>

        <div class="mb-3">

            <label class="form-label">Tahun</label>

            <input
                type="number"
                name="tahun"
                class="form-control"
                placeholder="Contoh : 2023"
                minlength="4"
                maxlength="4"
                required>

        </div>

        <div class="mb-3">

            <label class="form-label">Nomor Polisi</label>

            <input
                type="text"
                name="nomor_polisi"
                class="form-control"
                placeholder="Contoh : KB 1234 AA"
                style="text-transform:uppercase"
                required>

        </div>

        <button type="submit" class="btn btn-success">

            Simpan

        </button>

        <a href="<?= site_url('motor'); ?>" class="btn btn-secondary">

            Kembali

        </a>

    </form>

</div>