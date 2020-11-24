<?= $this->extend('fp/template/raw') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-lg-2"></div>
    <div id="checkout" class="col-lg-8">
        <div class="box">
        <form>
            <h1>Checkout - Review Pesanan</h1>
            <div class="content mt-3">
            <div class="table-responsive">
                <table class="table">
                <thead>
                    <tr>
                    <th colspan="2">Menu</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart->contents() as $item) : ?>
                    <tr>
                    <td><img style="width:80px;" src="<?= base_url('upload/' . $item['gambar'] . '') ?>" alt="White Blouse Armani"></td>
                    <td><?= $item['name'] ?></td>
                    <td><?= $item['qty']; ?></td>
                    <td>Rp. <?php echo number_format($item['price'], 0, 0, '.'); ?></td>
                    <td>Rp. <?php echo number_format($item['qty'] * $item['price'], 0, 0, '.'); ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                    <th colspan="4">Total</th>
                    <th>Rp. <?php echo number_format($cart->total(), 0, 0, '.'); ?></th>
                    </tr>
                </tfoot>
                </table>
            </div>
            <!-- /.table-responsive-->
            </div>
            <!-- /.content-->
            <div class="box-footer d-flex justify-content-between"><a href="<?= base_url('checkout/proceed') ?>" class="btn btn-outline-primary"><i class="fa fa-chevron-right"></i>Pesan</a>
            </div>
        </form>
        </div>
        <!-- /.box-->
    </div>
    <div class="col-lg-2"></div>
</div>

<?= $this->endSection() ?>