<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<div class="col">
    <?php
    if (!empty(session()->getFlashdata('info'))) {
        echo '<div  class="col">
    <div class="alert alert-danger col-8" role="alert">';
        $error = session()->getFlashdata('info');
        foreach ($error as $key => $value) {
            echo  $key . '=>' . $value;
            echo "</br>";
        }
        echo "</div>";
    }
    ?>
</div>
<div class="col">
    <h3>INSERT DATA</h3>
</div>

<div class="col-8">
    <form action="<?= base_url('/admin/menu/insert') ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group ">
            <label for="katgeori">Kategori : </label>
            <select class="form-control col-5" name="idkategori" id="idkategori">
                <?php foreach ($kategori as $key => $value) : ?>
                    <option><?= $value['kategori'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="menu">Menu : </label> <input type="text" name="menu" required class="form-control">
            <br>
        </div>
        <div class="form-group">
            <label for="harga">Harga : </label> <input type="text" name="harga" required class="form-control">
            <br>
        </div>
        <div class="form-group">
            <label for="harga">Gambar : </label>
            <input type="file" name="gambar" required>
            <br>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
        </div>

    </form>
</div>
<?= $this->endsection() ?>