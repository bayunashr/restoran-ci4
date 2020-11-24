<?= $this->extend('fp/template/raw') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
            <?php
            if (!empty($info)) {
                echo '<div class="alert alert-danger" role="alert">';
                echo $info;
                echo '</div>';
            }
            ?>
        <div class="box">
        <h1>Login</h1>
        <p class="lead">Sudah menjadi pelanggan kami?</p>
        <hr>
        <form action="<?= base_url('loginpelanggan/index') ?>" method="post">
            <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" name="email" placeholder="youremail@service.domain" required>
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control" name="password" placeholder="secret" required>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
            </div>
            <p class="text-muted text-center mt-3">Belum jadi pelanggan? <a href="<?= base_url('register') ?>">KLIK DISINI!</a></p>
        </form>
        </div>
    </div>
    <div class="col-lg-4"></div>
</div>

<?= $this->endSection() ?>