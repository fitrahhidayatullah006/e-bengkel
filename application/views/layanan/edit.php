<div class="container-fluid">

    <h3>Edit Layanan</h3>

    <form method="post">

        <div class="mb-3">

            <label>Nama Layanan</label>

            <input
                type="text"
                name="nama_layanan"
                class="form-control"
                value="<?= $layanan->nama_layanan; ?>"
                required>

        </div>

        <div class="mb-3">

            <label>Harga</label>

            <input
                type="number"
                name="harga"
                class="form-control"
                value="<?= $layanan->harga; ?>"
                required>

        </div>

        <button class="btn btn-primary">
            Update
        </button>

        <a href="<?= site_url('layanan'); ?>" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>