<?= $this->extend('fp/template/raw') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-lg-2"></div>
    <div id="basket" class="col-lg-8">
        <div class="box">
            <form>
                <h1>Keranjang Belanja</h1>
                <?php if ($cart->totalItems() === 0) : ?>
				<div class="alert alert-danger" role="alert">
					Keranjang anda kosong, cek <a href="<?= base_url() ?>" class="alert-link">daftar menu</a>
				</div>
			    <?php else : ?>
                <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th colspan="2">Menu</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th colspan="2">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($cart->contents() as $item) : ?>
                    <tr>
                        <td><a href="<?= base_url('detail/index/' . $item['id']) ?>"><img style="width:80px;" src="<?= base_url('upload/' . $item['gambar'] . '') ?>" alt="White Blouse Armani"></a></td>
                        <td><a href="<?= base_url('detail/index/' . $item['id']) ?>"><?= $item['name']; ?></a></td>
                        <td>
                            <div>
                            <?php echo anchor('/cart/kurang/' . $item['qty'] . '/' . $item['rowid'], '<i class="fa fa-minus-square" aria-hidden="true"></i>') ?>
                            <input style="width: 30px; margin: 0 5px;" type="text" name="quantity[]" class="input-number" data-min="1" data-max="100" value="<?= $item['qty']; ?>">
                            <?php echo anchor('/cart/tambah/' . $item['qty'] . '/' . $item['rowid'], '<i class="fa fa-plus-square" aria-hidden="true"></i>') ?>
                            </div>
                        </td>
                        <td>Rp. <?php echo number_format($item['price'], 0, 0, '.'); ?></td>
                        <td>Rp. <?php echo number_format($item['qty'] * $item['price'], 0, 0, '.'); ?></td>
                        <td><a href="<?= base_url('/cart/remove/' . $item['rowid']) ?>"><i class="fa fa-trash-o"></i></a></td>
                    </tr>
                    <?php endforeach ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th colspan="4">Total</th>
                        <th colspan="2">Rp. <?php echo number_format($cart->total(), 0, 0, '.'); ?></th>
                    </tr>
                    </tfoot>
                </table>
                </div>
                <!-- /.table-responsive-->
                <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
                <div class="left"><a href="<?= base_url() ?>" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i> Pesan lagi</a></div>
                <div class="right">
                    <a href="<?= base_url('checkout') ?>" type="submit" class="btn btn-primary">Checkout <i class="fa fa-chevron-right"></i></a>
                </div>
                </div>
                <?php endif ?>
            </form>
        </div>
    </div>
    <div class="col-lg-2"></div>
</div>

<?= $this->endSection() ?>