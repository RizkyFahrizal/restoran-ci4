<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<div class="col">
    <?php

    if (!empty(session()->getFlashdata('info'))) {
        echo '<div class="alert alert-danger col-8" role="alert">';
        echo  session()->getFlashdata('info');
        echo "</div>";
    }
    ?>
</div>
<div class="col">
    <h3>INSERT DATA</h3>
</div>

<div class="col-8">
    <form action="<?= base_url('/admin/kategori/insert') ?>" method="POST">
        <div class="form-group">
            <label for="Kategori">kategori : </label> <input type="text" name="kategori" required class="form-control">
            <br>
        </div>
        <div class="form-group">
            <label for="keterangan">keterangan : </label> <input type="text" name="keterangan" required class="form-control">
            <br>
        </div>
        <div class="form-group">
            <input type="submit" class="btn-primary" name="simpan" value="Simpan">
        </div>

    </form>
</div>
<?= $this->endsection() ?>