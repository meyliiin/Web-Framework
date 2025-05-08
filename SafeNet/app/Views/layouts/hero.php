<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2>Welcome to <span>SafeNet-Tempat Anda Mendapatkan Informasi dan Perlindungan dari Bahaya Judi Online.</span></h2>
                <p>Di era digital yang semakin maju, judi online menjadi ancaman serius bagi masyarakat, terutama generasi muda. SafeNet hadir sebagai sumber informasi terpercaya untuk mengedukasi dan meningkatkan kesadaran akan dampak negatif judi online. Kami berkomitmen untuk memberikan pengetahuan, tips pencegahan, serta dukungan bagi mereka yang ingin terhindar atau keluar dari jerat judi online. Bersama SafeNet, mari kita ciptakan lingkungan yang aman dan bebas dari bahaya judi online. Jelajahi website kami, temukan solusi, dan ambil langkah pertama menuju kehidupan yang lebih sehat dan produktif.
                    #CegahJudiOnline #SelamatkanMasaDepan</p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started">Get Started</a>
                    <a href="assets\video\Cara ampuh berhenti judi online.mp4" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="assets/LogoSafeNet.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
            </div>
        </div>
    </div>

    <div class="icon-boxes position-relative">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">

                <?php $delay = 100; ?>
                <?php foreach ($judol as $item): ?>
                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-journal-text"></i></div>
                            <h4 class="title">
                                <a href="<?= base_url('judol/' . $item['slug']) ?>" class="stretched-link">
                                    <?= esc($item['judul']) ?>
                                </a>
                            </h4>
                        </div>
                    </div>
                    <?php $delay += 100; ?>
                <?php endforeach; ?>

            </div>

            <!-- Tombol Baca Selengkapnya -->
            <div class="text-center mt-4">
                <a href="/katalog" class="btn btn-dark rounded-2 px-4 py-2">
                    <strong>Baca Selengkapnya</strong>
                </a>
            </div>

        </div>
    </div>
</section>
<!-- End Hero Section -->