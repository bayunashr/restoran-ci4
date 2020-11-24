<?= $this->extend('fp/template/raw') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <div class="box">
            <h1 class="text-center">Pesanan Berhasil Diterima</h1>
            <hr>
            <p class="lead text-center"><a href="<?= base_url() ?>">Kembali ke menu</a></p>
        </div>
    </div>
    <div class="col-lg-4"></div>
</div>

<?= $this->endSection() ?>