<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<h3>Update Identitas</h3>

<form action="<?= base_url() ?>/admin/identitas/update" method="post">
    <div class="form-group">
        <label for="title">title</label>
        <input class="form-control" type="text" name="title" value="<?= $identitas['title'] ?>" required>
    </div>
    <div class="form-group">
        <label for="slogan">slogan</label>
        <input class="form-control" type="text" name="slogan" value="<?= $identitas['slogan'] ?>" required>
    </div>
    <div class="form-group">
        <label for="logo">logo</label>
        <input class="form-control" type="text" name="logo" value="<?= $identitas['logo'] ?>" required>
    </div>
    <div class="form-group">
        <label for="favicon">favicon</label>
        <input class="form-control" type="text" name="favicon" value="<?= $identitas['favicon'] ?>" required>
    </div>
    <div class="form-group">
        <label for="telepon">telepon</label>
        <input class="form-control" type="text" name="telepon" value="<?= $identitas['telepon'] ?>" required>
    </div>
    <div class="form-group">
        <label for="alamat">alamat</label>
        <input class="form-control" type="text" name="alamat" value="<?= $identitas['alamat'] ?>" required>
    </div>
    <div class="form-group">
        <label for="facebook">facebook</label>
        <input class="form-control" type="text" name="facebook" value="<?= $identitas['facebook'] ?>" required>
    </div>
    <div class="form-group">
        <label for="twitter">twitter</label>
        <input class="form-control" type="text" name="twitter" value="<?= $identitas['twitter'] ?>" required>
    </div>
    <div class="form-group">
        <label for="instagram">instagram</label>
        <input class="form-control" type="text" name="instagram" value="<?= $identitas['instagram'] ?>" required>
    </div>
    <div class="form-group">
        <label for="email">email</label>
        <input class="form-control" type="text" name="email" value="<?= $identitas['email'] ?>" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">deskripsi</label>
        <input class="form-control" type="text" name="deskripsi" value="<?= $identitas['deskripsi'] ?>" required>
    </div>
    <div class="form-group">
        <label for="sejarah">sejarah</label>
        <input class="form-control" type="text" name="sejarah" value="<?= $identitas['sejarah'] ?>" required>
    </div>
    <input type="hidden" name="idrestoran" value="<?= $identitas['idrestoran'] ?>">
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
    </div>
</form>

<?= $this->endSection() ?>