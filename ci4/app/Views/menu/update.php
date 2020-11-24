<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="col">
<?php
    if(!empty(session()->getFlashdata('info'))){
        echo '<div class="alert alert-danger" role="alert">';
        $error = session()->getFlashdata('info');
        foreach ($error as $key => $value) {
            echo $key."=>".$value;
            echo "</br>";
        }
        echo '</div>';
    }
?>
</div>

<h3>UPDATE MENU</h3>


<form action="<?= base_url('/admin/menu/update') ?>" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="">Kategori</label>
<select class="form-control" name="idkategori" id="idkategori">
    <?php foreach($kategori as $key => $value) : ?>
    <option <?php if($value['idkategori']==$menu['idkategori']) echo "selected" ?> value="<?= $value['idkategori'] ?>"><?= $value['kategori'] ?></option>
    <?php endforeach; ?>
</select>
</div>
<div class="form-group">
    <label for="menu">Menu</label>
    <input class="form-control" type="text" name="menu" value="<?=$menu['menu']?>" required>
</div>
<div class="form-group">
    <label for="harga">Harga</label>
    <input class="form-control" type="number" name="harga" value="<?=$menu['harga']?>" required>
</div>
<div class="form-group">
    <label for="gambar">Gambar</label>
    <input class="form-control" type="file" name="gambar">
</div>
<input class="form-control" type="hidden" value="<?=$menu['gambar']?>" name="gambar" required>
<input class="form-control" type="hidden" value="<?=$menu['idmenu']?>" name="idmenu" required>
<div class="form-group">
    <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
</div>
</form>

<?= $this->endSection() ?>