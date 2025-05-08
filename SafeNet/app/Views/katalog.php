<!DOCTYPE html>
<html lang="en">

<?= $this->include('layouts/head') ?>

<body>
    <?= $this->include('layouts/header') ?>

    <div class="container my-5">
        <h2 class="text-center mb-5"><strong>Katalog Edukasi Bahaya Judi Online</strong></h2>
        <div class="row justify-content-center">

            <?php $i = 1 + (5 * ($currentPage - 1)); ?>
            <?php
            $judol = array_reverse($judol);
            foreach ($judol as $item): ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 shadow">
                        <img src="/assets/img/<?= $item['media']; ?>" class="card-img-top" alt="<?= $item['judul']; ?>">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center"><?= $item['judul']; ?></h5>
                            <div class="text-justify mb-2">
                                <p class="card-text text-justify">
                                    <?= word_limiter(strip_tags($item['deskripsi']), 25); ?>
                                </p>
                            </div>
                            <a href="/judol/<?= $item['slug']; ?>" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="d-flex justify-content-center mt-4">
                <?= $pager->links('judol', 'page_judol'); ?>
            </div>
        </div>
    </div>

    <?= $this->include('layouts/footer') ?>
    <?= $this->include('layouts/scripts') ?>
</body>

</html>

<style>
    .text-justify p {
        margin-bottom: 1rem;
        /* jarak antar paragraf */
        text-align: center;
    }
</style>