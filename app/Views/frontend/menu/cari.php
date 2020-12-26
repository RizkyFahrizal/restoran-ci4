<?= $this->extend('frontend/layout/home') ?>

<?= $this->section('content') ?>

<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $jumlah = 4;
    $no = ($jumlah * $page) - $jumlah + 1;
} else {
    $no = 1;
}

?>



<div class="row mt-2 ml-1">
    <div class="col-4">

    </div>
</div>

<div class="row mt-2">
    <div class="col">
        <?php $no ?>
        <?php foreach ($menu as $key => $value) : ?>
            <div class="card" style="width: 15rem; float:left; margin:10px;">
                <img style="height:150px;" src="<?= base_url('/upload/' . $value['gambar'] . '') ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $value['menu'] ?></h5>
                    <p class="card-text"><?= number_format($value['harga']) ?></p>
                    <a class="btn btn-success" href="<?= base_url() ?>/Front/Cart/isi/<?= $value['idmenu'] ?>" role="button">Beli</a>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>
<?= $pager->makeLinks(1, $tampil, $total, 'bootstrap') ?>
<?= $this->endSection() ?>