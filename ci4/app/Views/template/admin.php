<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>">
    <title>Admin Page</title>
</head>

<body>

    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <nav class="navbar navbar-light bg-light">
                    <a href="<?= base_url('/admin') ?>" class="navbar-brand">Admin Page</a>
                    <div class="div">User : <a href="#"><?php if (!empty(session()->get('user'))) {
                                                            echo session()->get('user');
                                                        } ?></a></div>
                    <div class="div">Email : <?php if (!empty(session()->get('email'))) {
                                                    echo session()->get('email');
                                                } ?></div>
                    <div class="div">Level : <?php if (!empty(session()->get('level'))) {
                                                    echo session()->get('level');
                                                    $level = session()->get('level');
                                                } ?></div>
                    <div class="div"><a href="<?= base_url("admin/login/logout") ?>">Logout</a></div>
                </nav>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <?php if ($level === "Admin") : ?>
                            <li class="list-group-item"><a href="<?= base_url('/admin/kategori') ?>">Kategori</a></li>
                            <li class="list-group-item"><a href="<?= base_url('/admin/menu') ?>">Menu</a></li>
                            <li class="list-group-item"><a href="<?= base_url('/admin/pelanggan') ?>">Pelanggan</a></li>
                            <li class="list-group-item"><a href="<?= base_url('/admin/order') ?>">Order</a></li>
                            <li class="list-group-item"><a href="<?= base_url('/admin/orderdetail') ?>">Order Detail</a></li>
                            <li class="list-group-item"><a href="<?= base_url('/admin/user') ?>">User</a></li>
                            <li class="list-group-item"><a href="<?= base_url('/admin/identitas') ?>">Identitas</a></li>
                            <li class="list-group-item"><a href="<?= base_url('/admin/slider') ?>">Slider</a></li>
                        <?php endif; ?>
                        <?php if ($level === "Koki") : ?>
                            <li class="list-group-item"><a href="<?= base_url('/admin/kategori') ?>">Kategori</a></li>
                            <li class="list-group-item"><a href="<?= base_url('/admin/menu') ?>">Menu</a></li>
                            <li class="list-group-item"><a href="<?= base_url('/admin/order') ?>">Order</a></li>
                            <li class="list-group-item"><a href="<?= base_url('/admin/orderdetail') ?>">Order Detail</a></li>
                        <?php endif; ?>
                        <?php if ($level === "Kasir") : ?>
                            <li class="list-group-item"><a href="<?= base_url('/admin/pelanggan') ?>">Pelanggan</a></li>
                            <li class="list-group-item"><a href="<?= base_url('/admin/order') ?>">Order</a></li>
                            <li class="list-group-item"><a href="<?= base_url('/admin/orderdetail') ?>">Order Detail</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 px-2">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>

</body>

</html>