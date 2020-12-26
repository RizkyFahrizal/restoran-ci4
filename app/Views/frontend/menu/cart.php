<?= $this->extend('frontend/layout/home') ?>

<?= $this->section('content') ?>

<?php
global $db;
$total = 0;
global $total;
?>
<table class="table table-bordered w-70">
    <tr>
        <th>Menu</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
        <th>Hapus</th>
    </tr>
    <?php
    foreach ($menu as $key => $value) {
        if (is_numeric($key)) { ?>
            <br>
            <tr>
                <td><?= $value['menu'] ?> </td>
                <td><?= $value['harga'] ?></td>
                <td>
                    <div class="product_count d-flex">
                        <a class="mr-2" href=" <?= base_url('Front/Cart/tambah/' . $value['idmenu']) ?>">[+]</a>
                        <h5 class="mt-1">
                            <?= $value['jumlah'] ?>
                        </h5> <a class="ml-2" href="<?= base_url('Front/Cart/kurang/' . $value['idmenu']) ?>">[-]</a>
                    </div>
                </td>
                <td><?= $value['harga'] * $value['jumlah'] ?></td>
                <td>
                    <a href="<?= base_url('Front/Cart/delete/' . $value['idmenu']) ?>">Hapus</a>
                </td>
            </tr>

    <?php
            $total = $total + ($value['jumlah'] * $value['harga']);
        }
    }

    ?>
</table>
<?php if (!empty($total)) : ?>
    <form action="<?= base_url('Front/Chekout') ?>" method="POST">
        <input type="hidden" name="total" value="<?= $total ?>">
        <button class="btn btn-primary mb-3" type="submit"> checkout <i class="fas fa-check-square"></i></button>
    </form>
<?php endif ?>

<?= $this->endSection() ?>