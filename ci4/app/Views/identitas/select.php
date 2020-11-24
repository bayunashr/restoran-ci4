<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="row">
    <?php foreach($identitas as $key => $value) : ?>
    <a class="btn btn-primary" href="<?= base_url('/admin/identitas/find/' . $value['idrestoran']) ?>">Ubah</a>
    <?php endforeach; ?>
    <div class="col text-center"><h3>Identitas Restoran</h3></div>
</div>

<div class="row mt-2">

<div class="col">
<table class="table">
<?php foreach($identitas as $key => $value) : ?>
    <tr>
        <th>Title</th>
        <td><?= $value['title'] ?></td>
    </tr>
    <tr>
        <th>Slogan</th>
        <td><?= $value['slogan'] ?></td>
    </tr>
    <tr>
        <th>Logo</th>
        <td><?= $value['logo'] ?></td>
    </tr>
    <tr>
        <th>Favicon</th>
        <td><?= $value['favicon'] ?></td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td><?= $value['alamat'] ?></td>
    </tr>
    <tr>
        <th>Telepon</th>
        <td><?= $value['telepon'] ?></td>
    </tr>
    <tr>
        <th>Facebook</th>
        <td><?= $value['facebook'] ?></td>
    </tr>
    <tr>
        <th>Twitter</th>
        <td><?= $value['twitter'] ?></td>
    </tr>
    <tr>
        <th>Instagram</th>
        <td><?= $value['instagram'] ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?= $value['email'] ?></td>
    </tr>
    <tr>
        <th>Sejarah</th>
        <td><?= $value['sejarah'] ?></td>
    </tr>
    <tr>
        <th>Deskripsi</th>
        <td><?= $value['deskripsi'] ?></td>
    </tr>
<?php endforeach; ?>
</table>
</div>

</div>

<?= $this->endSection() ?>