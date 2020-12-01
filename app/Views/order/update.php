<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col">
        <h2><?= $judul ?></h2>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <p>
            Pelanggan : <?= $order[0]['pelanggan'] ?>
        </p>
    </div>
    <div class="col-4">
        <p>
            Tgl Order : <b> <?= date("d-m-Y", strtotime($order[0]['tglorder'])) ?></b>
        </p>
    </div>
    <div class="col-2">
        <p>
            Total : <b> <?= number_format($order[0]['total'])  ?></b>
        </p>
    </div>
</div>
<hr>
<div class="row">
    <div class="col">
        <?php

        if (!empty(session()->getFlashdata('info'))) {
            echo '<div class="alert alert-danger col-8" role="alert">';
            echo  session()->getFlashdata('info');
            echo "</div>";
        }
        ?>
    </div>
</div>
<div class="row">
    <div class="col-7">
        <form action="<?= base_url('/admin/order/update') ?>" method="POST">
            <div class="form-group">
                <label for="Kategori">Bayar : </label> <input type="number" name="bayar" required class="form-control">
                <br>
            </div>
            <input type="hidden" name="total" value="<?= $order[0]['total'] ?>" required class="form-control">
            <input type="hidden" name="idorder" value="<?= $order[0]['idorder'] ?>" required class="form-control">
            <input type="submit" class="btn-primary" name="simpan" value="Simpan">
    </div>
    </form>
</div>

<div class="row mt-4">
    <div class="col">
        <h2>Rincian Order</h2>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table">
            <tr>
                <th>NO</th>
                <th>Menu</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
            <?php
            $no = 1;
            foreach ($detail as $value) : ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['menu'] ?></td>
                    <td><?= $value['hargajual'] ?></td>
                    <td><?= $value['jumlah'] ?></td>
                    <td><?= $value['jumlah'] * $value['hargajual'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>

<?= $this->endsection() ?>