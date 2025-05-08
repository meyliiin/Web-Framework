<!DOCTYPE html>
<html lang="en">

<?= $this->include('layouts/head') ?>

<body>
  <?= $this->include('layouts/header') ?>

  <div class="container mt-5">
    <h2 class="text-center mb-4"><strong><?= $judol['judul']; ?></strong></h2>
    <hr>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="row align-items-center">
          <!-- Gambar di tengah -->
          <div class="col-md-12 text-center mb-3">
            <img src="/assets/img/<?= $judol['media']; ?>" alt="Ilustrasi Judi Online 1" class="img-fluid rounded">
          </div>

          <!-- Deskripsi dengan text justify -->
          <div class="col-md-12">
            <ul class="list-unstyled">
              <h5 class="text-center mb-3"><strong><?= $judol['judul']; ?></strong></h5>
              <div class="text-justify">
                <p><?= nl2br($judol['deskripsi']); ?></p>
              </div>
              </li>
            </ul>
          </div>
        </div>
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
    text-align: justify;
  }
</style>