<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="col">
<?php
    if(!empty(session()->getFlashdata('info'))){
        echo '<div class="alert alert-danger" role="alert">';
        echo session()->getFlashdata('info');
        echo '</div>';
    }
?>
</div>

<h3><?=$judul;?></h3>

<form action="<?= base_url() ?>/admin/kategori/update" method="post">
    <div class="form-group">
        <label for="kategori">Kategori</label>
        <input class="form-control" type="text" name="kategori" value="<?= $kategori['kategori'] ?>" required>
    </div>
    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <input class="form-control" type="text" name="keterangan" value="<?= $kategori['keterangan'] ?>" required>
    </div>
    <input type="hidden" name="idkategori" value="<?= $kategori['idkategori'] ?>">
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
    </div>
</form>

<?= $this->endSection() ?>