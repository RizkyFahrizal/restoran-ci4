<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>">
    <title>Login Pelanggan</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-5 mx-auto">
                <?php

                if (!empty($info)) {
                    echo '<div class="alert alert-danger col-12" role="alert">';
                    echo  $info;
                    echo "</div>";
                }
                ?>
                <span>
                    <h1>Login Pelanggan</h1>
                </span>
                <hr>
                <form action="<?= base_url('/Front/Login') ?>" method="POST">
                    <div class="form-group">
                        <label for="Kategori">Email : </label> <input type="email" name="email" required class="form-control">
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Password : </label> <input type="password" name="password" required class="form-control">
                    </div>
                    <a href="<?= base_url('/Front/Daftar') ?>">Buat Akun Disini</a>
                    <div class="form-group mt-5">
                        <input type="submit" class="btn btn-primary" name="login" value="LOGIN">
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