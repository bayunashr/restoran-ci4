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
    <div class="col-4"><a class="btn btn-primary" href="<?= base_url('/admin/user/create') ?>">Tambah</a></div>
    <div class="col">
        <h3><?= $judul; ?></h3>
    </div>
</div>

<div class="row mt-2">

    <div class="col">
        <table class="table">
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Email</th>
                <th>Posisi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            <?php $no ?>
            <?php foreach ($user as $key => $value) : ?>
                <?php if ($value['aktif'] == 1) {
                    $status = "Aktif";
                } else {
                    $status = "Nonaktif";
                } ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['user'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= $value['level'] ?></td>
                    <td><a href="<?= base_url() ?>/admin/user/update/<?= $value['iduser'] ?>/<?= $value['aktif'] ?>"><?= $status ?></a></td>
                    <td><a href="<?= base_url() ?>/admin/user/delete/<?= $value['iduser'] ?>"><img src="<?= base_url('/icon/trash.svg') ?>" alt=""></a>
                        <a href="<?= base_url() ?>/admin/user/find/<?= $value['iduser'] ?>"><img src="<?= base_url('/icon/pencil.svg') ?>" alt=""></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>

        <?= $pager->links('g1', 'bootstrap') ?>
    </div>

</div>

<?= $this->endSection() ?>