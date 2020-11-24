<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<h3>INSERT SLIDER</h3>


<form method="post" action="<?php echo base_url('admin/slider/insert');?>" enctype="multipart/form-data">
      <div class="form-group">
        <label>Gambar</label>
        <input type="file" name="file" class="form-control">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-danger">Simpan</button>
      </div>
</form>

<?= $this->endSection() ?>