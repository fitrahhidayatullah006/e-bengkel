<div class="container-fluid">

    <h3>Tambah Layanan</h3>

    <form method="post">

        <div class="mb-3">

            <label>Nama Layanan</label>

            <input type="text" name="nama_layanan" class="form-control" required>

        </div>

        <div class="mb-3">

            <label>Harga</label>

            <input type="number" name="harga" class="form-control" required>

        </div>

        <button class="btn btn-success">
            Simpan
        </button>

        <a href="<?= site_url('layanan'); ?>" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>