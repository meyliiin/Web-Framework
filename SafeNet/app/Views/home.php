<!DOCTYPE html>
<html lang="en">

<?= $this->include('layouts/head') ?>

<body>

  <?= $this->include('layouts/header') ?>
  <?= $this->include('layouts/hero') ?>

  <main id="main">
    <?= $this->include('layouts/about') ?>

    <!-- ======= Clients Section ======= -->
    <?= $this->include('layouts/motivasi') ?>
    <?= $this->include('layouts/faq') ?>
    <?= $this->include('layouts/team') ?>
    <?= $this->include('layouts/contact') ?>

  </main><!-- End #main -->

  <?= $this->include('layouts/footer') ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <?= $this->include('layouts/scripts') ?>

</body>

</html>