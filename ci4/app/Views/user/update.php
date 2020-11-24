<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="col">
    <?php
    if (!empty(session()->getFlashdata('info'))) {
        echo '<div class="alert alert-danger" role="alert">';
        $error = session()->getFlashdata('info');
        foreach ($error as $key => $value) {
            echo $key . "=>" . $value;
            echo "</br>";
        }
        echo '</div>';
    }
    ?>
</div>

<h3><?= $judul ?></h3>


<form action="<?= base_url('/admin/user/ubah') ?>" method="post">
    <div class="form-group">
        <input class="form-control" type="hidden" name="iduser" value="<?= $user['iduser'] ?>" required>
    </div>
    <div class="form-group">
        <label for="keterangan">Email</label>
        <input class="form-control" type="email" name="email" value="<?= $user['email'] ?>" required>
    </div>
    <div class="form-group">
        <label for="">Level</label>
        <select class="form-control" name="level">
            <?php foreach ($level as $key) : ?>
                <option <?php if ($user['level'] == $key) {
                            echo "selected";
                        } ?> value="<?= $key ?>"><?= $key ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
    </div>
</form>

<?= $this->endSection() ?>