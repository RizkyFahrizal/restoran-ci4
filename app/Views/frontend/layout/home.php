<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>" />

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet" />

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />

    <title>Restoran | Rzl</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/') ?>">Resto Rzl</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link bb" href="<?= base_url('Front/Cart/isi') ?>">Cart</a>
                    <div class="nav-item nav-link">Email : <?php
                                                            if (!empty(session()->get('email'))) {
                                                                echo session()->get('email');
                                                            }
                                                            ?> </div>
                    <a class="nav-item btn tombol" href="<?= base_url('Front/login') ?>">LogIn</a>
                    <a class="nav-item btn tombol" href="<?= base_url('Front/login/logout') ?>">LogOut</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">
                Keep calm and <span>eat strong</span> <br />
                Listen to <span> your </span>palate
            </h1>

            <div class="row">
                <div class=" mx-auto col-7">
                    <form action="<?= base_url('/admin/menu/readp') ?>" method="get">
                        <?= view_cell('\App\Controllers\Admin\Menu::optionp') ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row-8 px-1">
            <?= $this->renderSection('content') ?>
        </div>
    </div>
    <footer>
        <footer id="footer" class="footer-1">
            <div class="main-footer widgets-dark typo-light">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="widget subscribe no-box">
                                <h5 class="widget-title">COMPANY NAME<span></span></h5>
                                <p>About the company, little discription will goes here.. </p>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="widget no-box">
                                <h5 class="widget-title">Quick Links<span></span></h5>
                                <ul class="thumbnail-widget">
                                    <li>
                                        <div class="thumb-content"><a href="#.">Get Started</a></div>
                                    </li>
                                    <li>
                                        <div class="thumb-content"><a href="#.">Top Leaders</a></div>
                                    </li>
                                    <li>
                                        <div class="thumb-content"><a href="#.">Success Stories</a></div>
                                    </li>
                                    <li>
                                        <div class="thumb-content"><a href="#.">Event/Tickets</a></div>
                                    </li>
                                    <li>
                                        <div class="thumb-content"><a href="#.">News</a></div>
                                    </li>
                                    <li>
                                        <div class="thumb-content"><a href="#.">Lifestyle</a></div>
                                    </li>
                                    <li>
                                        <div class="thumb-content"><a href="#.">About</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="widget no-box">
                                <h5 class="widget-title">Get Started<span></span></h5>
                                <p>Get access to your full Training and Marketing Suite.</p>
                                <a class="btn" href="#." target="_blank">Register Now</a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">

                            <div class="widget no-box">
                                <h5 class="widget-title">Contact Us<span></span></h5>

                                <p><a href="mailto:info@domain.com" title="glorythemes">m.rizkyfahrizal1410@gmail.com</a></p>
                                <ul class="social-footer2">
                                    <li class=""><a title="youtube" target="_blank" href="https://www.youtube.com/"><img alt="youtube" width="30" height="30" src="<?= base_url('icon/youtube-brands.svg') ?>"></a></li>
                                    <li class=""><a href="https://www.facebook.com/" target="_blank" title="Facebook"><img alt="Facebook" width="30" height="30" src="<?= base_url('icon/facebook-brands.svg') ?>"></a></li>
                                    <li class=""><a href="https://twitter.com" target="_blank" title="Twitter"><img alt="Twitter" width="30" height="30" src="<?= base_url('icon/twitter-brands.svg') ?>"></a></li>
                                    <li class=""><a title="instagram" target="_blank" href="https://www.instagram.com/"><img alt="instagram" width="30" height="30" src="<?= base_url('icon/instagram-brands.svg') ?>"></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p>Copyright Resto Rzl © 2020. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </footer>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>