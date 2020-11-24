<?= $this->extend('fp/template/raw') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-lg-2 order-1 order-lg-2"></div>
    <div class="col-lg-8 order-1 order-lg-2">
        <div id="productMain" class="row">
            <div class="col-md-6">
                <div class="item"> <img src="<?=base_url('/upload/'.$menu['gambar'])?>" alt="" class="img-fluid"></div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="box">
                    <h1 class="text-center"><?= $menu['menu'] ?></h1>
                    <p class="price text-center">Harga : Rp. <?= number_format($menu['harga']) ?> / Porsi</p>
                    <p class="text-center buttons"><a href="<?= base_url('cart/buy/' . $menu['idmenu']) ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</a><a href="<?= base_url() ?>" class="btn btn-outline-primary"><i class="fa fa-arrow-left"></i> Kembali</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>