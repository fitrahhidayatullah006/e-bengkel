<div class="container-fluid">

    <h3>Edit Mekanik</h3>

    <form method="post">

        <input type="text" name="nama_mekanik" class="form-control mb-3" value="<?= $mekanik->nama_mekanik; ?>" required>

        <input type="text" name="no_hp" class="form-control mb-3" value="<?= $mekanik->no_hp; ?>" required>

        <textarea name="alamat" class="form-control mb-3"><?= $mekanik->alamat; ?></textarea>

        <button class="btn btn-primary">
            Update
        </button>

        <a href="<?= site_url('mekanik'); ?>" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>