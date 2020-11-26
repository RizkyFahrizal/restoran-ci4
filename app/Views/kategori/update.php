<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<?php

if (!empty(session()->getFlashdata('info'))) {
    echo '<div  class="col">
    <div class="alert alert-danger col-8" role="alert">';
    echo session()->getFlashdata('info');
    echo "</div>";
}
?>
<div class="col">
    <h3>UPDATE DATA</h1>
</div>
<div class="col-8">
    <form action="<?= base_url() ?>/admin/kategori/update" method="POST">
        <div class="form-group">
            <label for="Kategori">kategori : </label> <input type="text" name="kategori" value="<?= $kategori['kategori'] ?>" required class="form-control">
            <br>
        </div>
        <div class="form-group">
            <label for="keterangan">keterangan : </label> <input type="text" name="keterangan" value="<?= $kategori['keterangan'] ?>" required class="form-control">
            <br>
        </div>
        <input type="hidden" name="idkategori" value="<?= $kategori['idkategori'] ?>">
        <div class="form-group ">
            <input class="btn-primary" type="submit" name="simpan" value="Simpan">
        </div>
    </form>
</div>
<?= $this->endsection() ?>