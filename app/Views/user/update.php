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
    <h3><?= $judul ?></h3>
</div>

<div class="col-8">
    <form action="<?= base_url('/admin/user/ubah') ?>" method="POST">
        <div class="form-group"> <input type="hidden" name="iduser" value="<?= $user['iduser'] ?>" required class="form-control">
            <br>
        </div>
        <div class="form-group">
            <label for="keterangan">Email : </label> <input type="email" name="email" value="<?= $user['email'] ?>" required class="form-control">
            <br>
        </div>
        <div class="form-group "> <label for="level">Level</label>
            <select class="form-control col-5" name="level" id="idkategori">
                <?php foreach ($level as $key) : ?>
                    <option <?php if ($user['level'] == $key) {
                                echo "selected";
                            } ?> value="<?= $key ?>"> <?= $key ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn-primary" name="simpan" value="Simpan">
        </div>

    </form>
</div>
<?= $this->endsection() ?>