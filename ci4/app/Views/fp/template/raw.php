<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $identitas['title'] ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url('asset/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?= base_url('asset/vendor/font-awesome/css/font-awesome.min.css') ?>">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="<?= base_url('https://fonts.googleapis.com/css?family=Roboto:100,300,400,700') ?>">
    <!-- owl carousel-->
    <link rel="stylesheet" href="<?= base_url('asset/vendor/owl.carousel/assets/owl.carousel.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/vendor/owl.carousel/assets/owl.theme.default.css') ?>">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?= base_url('asset/css/style.red.css') ?>" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?= base_url('asset/css/custom.css') ?>">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?= base_url('upload') ?>/<?= $identitas['favicon'] ?>">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header mb-5">
      <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
      <div id="top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-danger btn-sm"><?= $identitas['slogan'] ?></a></div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="menu list-inline mb-0">
                <?php if (!empty(session()->get('pelanggan'))) : ?>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-user"></i><?= session()->get('pelanggan'); ?></a></li>
                  <li class="list-inline-item"><a href="<?= base_url('loginpelanggan/logout') ?>">Keluar <i class="fa fa-sign-out"></i></a></li>
                <?php endif ?>
                <?php if (empty(session()->get('pelanggan'))) : ?>
                <li class="list-inline-item"><a href="<?= base_url('loginpelanggan') ?>"><i class="fa fa-sign-in"></i> Masuk</a></li>
                <li class="list-inline-item"><a href="<?= base_url('register') ?>">Daftar <i class="fa fa-id-card"></i></a></li>
                <?php endif ?>
              </ul>
            </div>
          </div>
        </div>
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Customer login</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form action="customer-orders.html" method="post">
                  <div class="form-group">
                    <input id="email-modal" type="text" placeholder="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password-modal" type="password" placeholder="password" class="form-control">
                  </div>
                  <p class="text-center">
                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                  </p>
                </form>
                <p class="text-center text-muted">Not registered yet?</p>
                <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
              </div>
            </div>
          </div>
        </div>
        <!-- *** TOP BAR END ***-->
        
        
      </div>
      <nav class="navbar navbar-expand-lg navbar-fluid">
        <div class="container"><a href="<?= base_url() ?>" class="navbar-brand home"><img src="<?= base_url('upload') ?>/<?= $identitas['logo'] ?>" alt="Sayap Ksatria logo" class="d-none d-md-inline-block"><img src="<?= base_url('upload') ?>/<?= $identitas['logo'] ?>" alt="Obaju logo" class="d-inline-block d-md-none"><span class="sr-only">Obaju - go to homepage</span></a>
          <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
          </div>
          <div id="navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
            <?php if (!empty(session()->get('pelanggan'))) : ?>
              <li class="nav-item"><a href="<?= base_url() ?>" class="nav-link active">Beranda</a></li>
              <li class="nav-item"><a href="<?= base_url('histori/index/' . session()->get('idpelanggan')) ?>" class="nav-link">Histori</a></li>
            <?php endif ?>
            <?php if (empty(session()->get('pelanggan'))) : ?>
              <li class="nav-item"><a href="<?= base_url() ?>" class="nav-link active">Beranda</a></li>
            <?php endif ?>
            </ul>
            <div class="navbar-buttons d-flex justify-content-end">
              <!-- /.nav-collapse-->
              <?php if (!empty(session()->get('pelanggan'))) : ?>
              <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="<?= base_url('cart') ?>" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span>Keranjang ( <?= $cart->totalItems() ?> item )</span></a></div>
              <?php endif ?>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <!-- CONTENT AREA -->
    <?= $this->renderSection('content') ?>
    <!-- CONTENT AREA -->

    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Laman</h4>
            <ul class="list-unstyled">
              <li><a href="text.html">Tentang kami</a></li>
              <li><a href="text.html">Kebijakan privasi</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="contact.html">Kontak kami</a></li>
            </ul>
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Hubungi kami !</h4>
            <ul class="list-unstyled">
              <li><?= $identitas['telepon'] ?></li>
              <li><?= $identitas['email'] ?></li>
            </ul>
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Temukan kami !</h4>
            <p><?= $identitas['alamat'] ?></p>
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Sosial Media</h4>
            <p class="social"><a href="<?= $identitas['facebook'] ?>" class="facebook external"><i class="fa fa-facebook"></i></a><a href="<?= $identitas['twitter'] ?>" class="twitter external"><i class="fa fa-twitter"></i></a><a href="<?= $identitas['instagram'] ?>" class="instagram external"><i class="fa fa-instagram"></i></a><a href="<?= $identitas['email'] ?>" class="email external"><i class="fa fa-envelope"></i></a></p>
          </div>
          <!-- /.col-lg-3-->
        </div>
        <!-- /.row-->
      </div>
      <!-- /.container-->
    </div>
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->
    
    
    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-2 mb-lg-0">
            <p class="text-center text-lg-left">© 2020 <?= $identitas['title'] ?>.</p>
          </div>
          <div class="col-lg-6">
            <p class="text-center text-lg-right">Desain templat oleh <a href="https://bootstrapious.com/">Bootstrapious</a>
              <!-- If you want to remove this backlink, pls purchase an Attribution-free License @ https://bootstrapious.com/p/obaju-e-commerce-template. Big thanks!-->
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src="<?= base_url('asset/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('asset/vendor/jquery.cookie/jquery.cookie.js') ?>"> </script>
    <script src="<?= base_url('asset/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('asset/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js') ?>"></script>
    <script src="<?= base_url('asset/js/front.js') ?>"></script>
  </body>
</html>