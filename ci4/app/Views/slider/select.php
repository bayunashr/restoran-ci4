<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-4"><a class="btn btn-primary" href="<?= base_url('/admin/slider/create') ?>">Tambah</a></div>
    <div class="col"><h3>DATA SLIDER</h3></div>
</div>

<div class="row mt-2">

<div class="col">
<table class="table">
    <tr>
        <th>No</th>
        <th>Slider</th>
        <th>Gambar</th>
        <th>Hapus</th>
    </tr>
    <?php $no=1 ?>
    <?php foreach($slider as $key => $value): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $value['slider'] ?></td>
        <td><img style="width:140px;" src="<?=base_url('/upload/slider/'.$value['slider'])?>" alt=""></td>
        <td><a href="<?=base_url()?>/admin/slider/delete/<?= $value['idslider'] ?>/<?= $value['slider'] ?>"><img src="<?=base_url('/icon/trash.svg')?>" alt=""></a>
        </td>
    </tr>
    <?php endforeach ?>
</table>
</div>
</div>

<?= $this->endSection() ?>