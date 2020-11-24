<?= $this->extend('fp/template/raw') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">

        <?php
        if (!empty(session()->getFlashdata('info'))) {
            echo '<div class="alert alert-danger" role="alert">';
            $error = session()->getFlashdata('info');
            foreach ($error as $key => $value) {
                echo $key . " => " . $value;
                echo "<br>";
            }
            echo '</div>';
        }
        ?>

        <div class="box">
        <h1>Register</h1>
        <p class="lead">Menjadi pelanggan tidak sulit lho</p>
        <hr>
        <form action="<?= base_url('register/insert') ?>" method="post">
            <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" class="form-control" placeholder="John Braon" name="pelanggan" required>
            </div>
            <div class="form-group">
            <label for="alamat">Alamat</label>
            <input id="alamat" type="text" class="form-control" placeholder="Kansas" name="alamat" required>
            </div>
            <div class="form-group">
            <label for="telepon">Telepon</label>
            <input id="telepon" type="tel" class="form-control" placeholder="08xxxxxxxxx" name="telp" required>
            </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" placeholder="johnbraon@johnbraon.johnbraon" name="email" required>
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control" placeholder="secret" name="password" required>
            </div>
            <div class="form-group">
            <label for="konfirmasi">Konfirmasi Password</label>
            <input id="konfirmasi" type="password" class="form-control" placeholder="secret" name="konfirmasi" required>
            </div>
            <div class="text-center">
            <button name="simpan" type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
            </div>
        </form>
        </div>
    </div>
    <div class="col-lg-4"></div>
</div>

<?= $this->endSection() ?>