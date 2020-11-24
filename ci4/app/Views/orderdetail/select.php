<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<?php
if (isset($_GET['page_g1'])) {
    $page = $_GET['page_g1'];
    $jumlah = 4;
    $no = ($jumlah * $page) - $jumlah + 1;
} else {
    $no = 1;
}
?>

<div class="row">
    <div class="col">
        <h3><?= $judul; ?></h3>
    </div>
</div>

<div class="row">
    <div class="col">
        <form action="<?= base_url() ?>/admin/orderdetail/cari" method="post">
            <div class="form-group col-5 float-left">
                <label for="awal">Mulai Tanggal</label>
                <input class="form-control" type="date" name="awal" required>
            </div>
            <div class="form-group col-5 float-left">
                <label for="sampai">Sampai Tanggal</label>
                <input class="form-control" type="date" name="sampai" required>
            </div>
            <div class="form-group col-2 float-left">
                <input class="btn btn-primary" type="submit" name="cari" value="Cari">
            </div>
        </form>
    </div>
</div>

<div class="row mt-2">

    <div class="col">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Tanggal</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
            <?php $no ?>
            <?php foreach ($orderdetail as $key => $value) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['menu'] ?></td>
                    <td><?= $value['tglorder'] ?></td>
                    <td><?= $value['harga'] ?></td>
                    <td><?= $value['jumlah'] ?></td>
                    <td><?= $value['jumlah'] * $value['harga'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>

        <?= $pager->links('g1', 'bootstrap') ?>
    </div>

</div>

<?= $this->endSection() ?>