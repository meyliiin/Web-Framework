<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - SafeNet</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/LogoSafeNet.jpg" rel="icon">
  <link href="assets/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    /* Custom Dashboard Styles */
    .dashboard-header {
      background: linear-gradient(135deg, #4361ee, #3a0ca3);
      color: white;
      padding: 2rem 0;
      margin-bottom: 2rem;
    }
    
    .stat-card {
      border-radius: 10px;
      padding: 1.5rem;
      margin-bottom: 1.5rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }
    
    .stat-card:hover {
      transform: translateY(-5px);
    }
    
    .stat-card i {
      font-size: 2rem;
      margin-bottom: 1rem;
    }
    
    .recent-activity {
      background: white;
      border-radius: 10px;
      padding: 1.5rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .activity-item {
      padding: 0.75rem 0;
      border-bottom: 1px solid #eee;
    }
    
    .sidebar {
      background: #2c3e50;
      color: white;
      min-height: 100vh;
      padding: 1rem;
    }
    
    .sidebar-menu {
      list-style: none;
      padding: 0;
    }
    
    .sidebar-menu li {
      margin-bottom: 0.5rem;
    }
    
    .sidebar-menu a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 0.5rem 1rem;
      border-radius: 5px;
      transition: background 0.3s;
    }
    
    .sidebar-menu a:hover, .sidebar-menu a.active {
      background: #4361ee;
    }
    
    .sidebar-menu i {
      margin-right: 0.5rem;
    }
    
    .main-content {
      padding: 1rem;
    }
    
    .user-profile {
      text-align: center;
      padding: 1rem 0;
      border-bottom: 1px solid rgba(255,255,255,0.1);
      margin-bottom: 1rem;
    }
    
    .user-profile img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 1rem;
      border: 3px solid #4361ee;
    }
  </style>
</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: #2c3e50;">
        <div class="user-profile">
          <img src="https://ui-avatars.com/api/?name=Meylinda&background=4361ee&color=fff" alt="User Profile">
          <h5>Meylinda</h5>
          <p class="text-muted">Admin SafeNet</p>
        </div>
        
        <ul class="sidebar-menu">
          <li><a href="dashboard.html" class="active"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
          <li><a href="content-management.html"><i class="bi bi-file-earmark-text"></i> Kelola Konten</a></li>
          <li><a href="user-management.html"><i class="bi bi-people"></i> Kelola Pengguna</a></li>
          <li><a href="statistics.html"><i class="bi bi-bar-chart"></i> Statistik</a></li>
          <li><a href="testimonials.html"><i class="bi bi-chat-square-quote"></i> Testimoni</a></li>
          <li><a href="settings.html"><i class="bi bi-gear"></i> Pengaturan</a></li>
          <li><a href="index.html"><i class="bi bi-box-arrow-left"></i> Keluar</a></li>
        </ul>
      </div>

      <!-- Main Content -->
      <div class="col-md-9 col-lg-10 ms-sm-auto main-content">
        <div class="dashboard-header text-center">
          <h1><i class="bi bi-shield-lock"></i> Dashboard SafeNet</h1>
          <p class="lead">Sistem Manajemen Konten Pencegahan Judi Online</p>
        </div>

        <!-- Stats Cards -->
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="stat-card bg-primary text-white">
              <i class="bi bi-people"></i>
              <h3>1,254</h3>
              <p>Pengunjung Hari Ini</p>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="stat-card bg-success text-white">
              <i class="bi bi-file-earmark-text"></i>
              <h3>48</h3>
              <p>Artikel Edukasi</p>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="stat-card bg-warning text-dark">
              <i class="bi bi-chat-square-quote"></i>
              <h3>32</h3>
              <p>Testimoni Baru</p>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="stat-card bg-danger text-white">
              <i class="bi bi-question-circle"></i>
              <h3>15</h3>
              <p>Pertanyaan Baru</p>
            </div>
          </div>
        </div>

        <div class="row mt-4">
          <!-- Recent Activities -->
          <div class="col-lg-8">
            <div class="recent-activity">
              <h4><i class="bi bi-list-check"></i> Aktivitas Terkini</h4>
              
              <div class="activity-item">
                <div class="d-flex justify-content-between">
                  <span><strong>Artikel baru ditambahkan</strong> - "Dampak Judi Online pada Remaja"</span>
                  <small class="text-muted">2 jam lalu</small>
                </div>
              </div>
              
              <div class="activity-item">
                <div class="d-flex justify-content-between">
                  <span><strong>Testimoni baru</strong> dari Budi Santoso</span>
                  <small class="text-muted">5 jam lalu</small>
                </div>
              </div>
              
              <div class="activity-item">
                <div class="d-flex justify-content-between">
                  <span><strong>Pembaruan konten</strong> pada halaman "Cara Berhenti Judi Online"</span>
                  <small class="text-muted">1 hari lalu</small>
                </div>
              </div>
              
              <div class="activity-item">
                <div class="d-flex justify-content-between">
                  <span><strong>Pengguna baru mendaftar</strong> - anto@example.com</span>
                  <small class="text-muted">1 hari lalu</small>
                </div>
              </div>
              
              <div class="activity-item">
                <div class="d-flex justify-content-between">
                  <span><strong>Video edukasi baru</strong> diunggah</span>
                  <small class="text-muted">2 hari lalu</small>
                </div>
              </div>
              
              <a href="#" class="btn btn-outline-primary mt-3">Lihat Semua Aktivitas</a>
            </div>
          </div>
          
          <!-- Quick Actions -->
          <div class="col-lg-4">
            <div class="recent-activity">
              <h4><i class="bi bi-lightning"></i> Aksi Cepat</h4>
              
              <div class="d-grid gap-2">
                <button class="btn btn-outline-primary text-start"><i class="bi bi-plus-circle"></i> Tambah Artikel Baru</button>
                <button class="btn btn-outline-success text-start"><i class="bi bi-film"></i> Unggah Video Edukasi</button>
                <button class="btn btn-outline-info text-start"><i class="bi bi-envelope"></i> Kirim Newsletter</button>
                <button class="btn btn-outline-warning text-start"><i class="bi bi-gear"></i> Pengaturan Website</button>
              </div>
              
              <h4 class="mt-4"><i class="bi bi-graph-up"></i> Statistik Singkat</h4>
              <div class="mt-3">
                <p>Total Pengunjung Bulan Ini: <strong>12,345</strong></p>
                <div class="progress mb-2">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                </div>
                
                <p>Artikel Paling Populer: <strong>"10 Tanda Kecanduan Judi Online"</strong></p>
                <div class="progress mb-2">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 82%"></div>
                </div>
                
                <p>Konversi Kontak Bantuan: <strong>42%</strong></p>
                <div class="progress">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 42%"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Recent Testimonials -->
        <div class="row mt-4">
          <div class="col-12">
            <div class="recent-activity">
              <h4><i class="bi bi-chat-square-quote"></i> Testimoni Terbaru</h4>
              
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-3">
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <p>"Berkat SafeNet, saya bisa keluar dari jeratan judi online setelah 2 tahun kecanduan."</p>
                        <footer class="blockquote-footer">Budi Santoso <cite title="Source Title">dari Jakarta</cite></footer>
                      </blockquote>
                    </div>
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="card mb-3">
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <p>"Artikel-artikel di SafeNet sangat membantu saya memahami bahaya judi online."</p>
                        <footer class="blockquote-footer">Ani Wijaya <cite title="Source Title">dari Bandung</cite></footer>
                      </blockquote>
                    </div>
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="card mb-3">
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <p>"Video edukasinya sangat inspiratif, membuat saya sadar akan kerugian judi online."</p>
                        <footer class="blockquote-footer">Doni Pratama <cite title="Source Title">dari Surabaya</cite></footer>
                      </blockquote>
                    </div>
                  </div>
                </div>
              </div>
              
              <a href="testimonials.html" class="btn btn-outline-primary mt-2">Lihat Semua Testimoni</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    // Simple chart for demonstration (would be replaced with real chart library in production)
    document.addEventListener('DOMContentLoaded', function() {
      // This would be replaced with real chart implementation
      console.log('Dashboard ready');
      
      // Example of marking current page in sidebar
      const currentPage = window.location.pathname.split('/').pop();
      document.querySelectorAll('.sidebar-menu a').forEach(link => {
        if (link.getAttribute('href') === currentPage) {
          link.classList.add('active');
        }
      });
    });
  </script>
</body>
</html>