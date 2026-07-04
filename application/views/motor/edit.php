<div class="container-fluid">

    <h3 class="mb-4">Edit Motor</h3>

    <form method="post">

        <div class="mb-3">

            <label class="form-label">Merk Motor</label>

            <input
                type="text"
                name="merk"
                class="form-control"
                value="<?= $motor->merk; ?>"
                required>

        </div>

        <div class="mb-3">

            <label class="form-label">Tipe Motor</label>

            <input
                type="text"
                name="tipe"
                class="form-control"
                value="<?= $motor->tipe; ?>"
                required>

        </div>

        <div class="mb-3">

            <label class="form-label">Tahun</label>

            <input
                type="number"
                name="tahun"
                class="form-control"
                value="<?= $motor->tahun; ?>"
                required>

        </div>

        <div class="mb-3">

            <label class="form-label">Nomor Polisi</label>

            <input
                type="text"
                name="nomor_polisi"
                class="form-control"
                value="<?= $motor->nomor_polisi; ?>"
                style="text-transform:uppercase"
                required>

        </div>

        <button type="submit" class="btn btn-primary">

            Update

        </button>

        <a href="<?= site_url('motor'); ?>" class="btn btn-secondary">

            Kembali

        </a>

    </form>

</div>