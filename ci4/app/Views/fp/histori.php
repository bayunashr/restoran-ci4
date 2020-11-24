<?= $this->extend('fp/template/raw') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-lg-2"></div>
    <div id="checkout" class="col-lg-8">
        <div class="box">
        <form>
            <h1>Histori Pesanan</h1>
            <?php if ($count == 0) : ?>
                <div class="alert alert-primary" role="alert">
					Anda belum pernah pesan disini, <a href="<?= base_url('home') ?>" class="alert-link">mulai pesan!</a>
				</div>
            <?php else : ?>
            <div class="content mt-3">
            <div class="table-responsive">
                <table class="table">
                <thead>
                    <tr>
                    <th colspan="2">Menu</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Tanggal Beli</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($histori as $item) : ?>
                    <tr>
                    <td><img style="width:80px;" src="<?= base_url('upload/' . $item['gambar'] . '') ?>" alt="White Blouse Armani"></td>
                    <td><?= $item['menu'] ?></td>
                    <td><?= $item['jumlah']; ?></td>
                    <td>Rp. <?php echo number_format($item['harga'], 0, 0, '.'); ?></td>
                    <td><?= $item['tglorder']; ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
                </table>
            </div>
            <!-- /.table-responsive-->
            <?php endif ?>
        </form>
        </div>
        <!-- /.box-->
    </div>
    <div class="col-lg-2"></div>
</div>

<?= $this->endSection() ?>