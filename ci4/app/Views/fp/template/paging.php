
                <nav aria-label="<?= lang('Pager.pageNavigation') ?>" class="d-flex justify-content-center">
                  <ul class="pagination">

                    <?php if ($pager->hasPreviousPage()) : ?>
                    <li class="page-item"><a href="<?= $pager->getPreviousPage() ?>" aria-label="<?= lang('Pager.previous') ?>" class="page-link"><span aria-hidden="true">«</span><span class="sr-only"><?= lang('Pager.previous') ?></span></a></li>
                    <?php endif ?>

                    <?php foreach ($pager->links() as $link) : ?>
                    <li class="page-item <?= $link['active'] ? 'class="active"' : '' ?>"><a href="<?= $link['uri'] ?>" class="page-link"><?= $link['title'] ?></a></li>
                    <?php endforeach ?>

                    <?php if ($pager->hasNextPage()) : ?>
                    <li class="page-item"><a href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.next') ?>" class="page-link"><span aria-hidden="true">»</span><span class="sr-only"><?= lang('Pager.next') ?></span></a></li>
                    <?php endif ?>
                  </ul>
                </nav>