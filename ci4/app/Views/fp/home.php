<?= $this->extend('fp/template/raw') ?>

<?= $this->section('content') ?>

    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="main-slider" class="owl-carousel owl-theme">
                <?php foreach($slider as $key => $value) : ?>
                <div class="item"><img src="<?=base_url('upload/slider')?>/<?= $value['slider'] ?>" alt="" class="img-fluid"></div>
                <?php endforeach; ?>
              </div>
              <!-- /#main-slider-->
            </div>
          </div>
        </div>

        <!-- *** TITLE BAR *** -->
        <div id="hot">
          <div class="box py-4">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-0">Menu</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- *** TITLE BAR END *** -->

        <!-- *** PRODUCT AREA *** -->
        <div class="container">
          <div class="row">                       
            <div class="col-lg-12">
              <div class="row products">
                <?php foreach($menu as $key => $value) : ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                  <div class="product">
                    <a href="<?= base_url('/detail/index/'.$value['idmenu']) ?>"><img src="<?= base_url('upload') ?>/<?= $value['gambar'] ?>" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3><a href="<?= base_url('/detail/index/'.$value['idmenu']) ?>"><?= $value['menu'] ?></a></h3>
                      <p class="price"> 
                        <del></del>Rp. <?= number_format($value['harga']) ?>
                      </p>
                      <?php if (!empty(session()->get('pelanggan'))) : ?>
                      <p class="buttons"><a href="<?= base_url('/detail/index/'.$value['idmenu']) ?>" class="btn btn-outline-secondary"><i class="fa fa-eye"></i></a>
                      <a href="<?= base_url('cart/buy/' . $value['idmenu']) ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></a></p>
                      <?php endif ?>
                      <?php if (empty(session()->get('pelanggan'))) : ?>
                      <p class="buttons"><a href="<?= base_url('/detail/index/'.$value['idmenu']) ?>" class="btn btn-outline-secondary"><i class="fa fa-eye"></i></a>
                      <a href="<?= base_url('loginpelanggan') ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></a></p>
                      <?php endif ?>
                    </div>
                    <!-- /.text-->
                  </div>
                  <!-- /.product -->
                </div>
                <?php endforeach; ?>
                <div class="pages ml-3">
                <?= $pager->links('g1','frontpager') ?>
                </div>
              </div>

              <!-- PAGINATION STYLE -->
              <!-- <div class="pages">
                <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                  <ul class="pagination">
                    <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                  </ul>
                </nav>
              </div> -->
              <!-- PAGINATION STYLE -->

            </div>
            <!-- /.col-lg-9-->
          </div>
        </div>
        <!-- *** PRODUCT AREA END *** -->

        <!--
        *** ADVANTAGES HOMEPAGE ***
        _________________________________________________________
        -->
        <div id="advantages">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-heart"></i></div>
                  <h3><a href="#">We love our customers</a></h3>
                  <p class="mb-0">We are known to provide best possible service ever</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-tags"></i></div>
                  <h3><a href="#">Best prices</a></h3>
                  <p class="mb-0">You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                  <h3><a href="#">100% satisfaction guaranteed</a></h3>
                  <p class="mb-0">Free returns on everything for 3 months.</p>
                </div>
              </div>
            </div>
            <!-- /.row-->
          </div>
          <!-- /.container-->
        </div>
        <!-- /#advantages-->
        <!-- *** ADVANTAGES END ***-->
        <!-- /.container-->
      </div>
    </div>

<?= $this->endSection() ?>