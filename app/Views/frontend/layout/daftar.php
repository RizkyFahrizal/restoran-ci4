<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>">
    <title>Daftar Pelanggan</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-5 mx-auto">

                <div class="col">
                    <?php
                    if (!empty(session()->getFlashdata('info'))) {
                        echo '
    <div class="alert alert-danger " role="alert">';
                        $error = session()->getFlashdata('info');
                        foreach ($error as $key => $value) {
                            echo  $key . '=>' . $value;
                            echo "</br>";
                        }
                    }
                    ?>
                </div>
                <span>
                    <h1><?= $judul ?> </h1>
                </span>
                <hr>
                <form action="<?= base_url('Front/Daftar/insert') ?>" method="POST">
                    <div class="form-group">
                        <label for="Kategori">Nama : </label> <input type="text" name="pelanggan" placeholder="Nama" required class="form-control">
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="Kategori">Email : </label> <input type="email" name="email" placeholder="Email" required class="form-control">
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="Kategori">Alamat : </label> <input type="text" name="alamat" placeholder="Alamat" required class="form-control">
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="Kategori">No Telepon : </label> <input type="text" name="telpon" placeholder="No telpon" required class="form-control">
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Password : </label> <input type="password" name="password" placeholder="Password" required class="form-control">
                        <br>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="daftar" value="Daftar">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-8">
            <?= $this->renderSection('content') ?>
        </div>
    </div>
</body>

</html>