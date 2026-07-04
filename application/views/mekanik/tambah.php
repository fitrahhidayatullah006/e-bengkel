<div class="container-fluid">

    <h3>Tambah Mekanik</h3>

    <form method="post">

        <input type="text" name="nama_mekanik" class="form-control mb-3" placeholder="Nama Mekanik" required>

        <input type="text" name="no_hp" class="form-control mb-3" placeholder="No HP" required>

        <textarea name="alamat" class="form-control mb-3" placeholder="Alamat"></textarea>

        <button class="btn btn-success">
            Simpan
        </button>

        <a href="<?= site_url('mekanik'); ?>" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>