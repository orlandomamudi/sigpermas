
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Amoeba Bootstrap Template - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon/favicon.ico'); ?>" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/landing/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/landing/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/landing/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/landing/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/landing/css/style.css'); ?>" rel="stylesheet">

  <!-- LeafletJs Maps -->
  <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>
  <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="<?= base_url() ?>"><img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto" href="<?= base_url() ?>">Home</a></li>
          <li><a class="nav-link scrollto active" href="<?= base_url('home/data_masjid') ?>">Data Masjid</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('login') ?>">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End #header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Detail Masjid</h2>
          <ol>
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li><a href="<?= base_url('home/data_masjid') ?>">Data Masjid</a></li>
            <li>Detail Masjid</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
              <?php $path = FCPATH .'assets'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.$detail[0]->id_masjid.DIRECTORY_SEPARATOR; ?>
              <?php if (empty(glob($path."*.*")) === true): ?>

                  <img src="<?php echo base_url('assets/img/example-image.jpg'); ?>" style="height: min-content; filter: grayscale(100%);" alt="">

              <?php else: ?>

                <?php $i=0; foreach (glob($path."*.*") as $file): ?>
                    <div class="swiper-slide">
                    <img src="<?= str_replace(FCPATH, base_url(), $file); ?>" alt="" />
                    </div>
                <?php $i++; endforeach ?>

              <?php endif; ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Masjid <?= $detail[0]->nama_masjid; ?></h3>
              <ul>
                <li><strong>Alamat</strong>: <?= $detail[0]->alamat; ?></li>
                <li><strong>Luas Tanah</strong>: <?= $detail[0]->luas_tanah; ?></li>
                <li><strong>Status Tanah</strong>: <?= $detail[0]->status_tanah; ?></li>
                <li><strong>Luas Bangunan</strong>: <?= $detail[0]->luas_bangunan; ?></li>
                <li><strong>Daya Tampung</strong>: <?= $detail[0]->daya_tampung; ?> orang</li>
                <li><strong>Jumlah Pengurus</strong>: <?= $detail[0]->jumlah_pengurus; ?> orang</li>
                <li><strong>Jumlah Imam</strong>: <?= $detail[0]->jumlah_imam; ?> orang</li>
                <li><strong>Fasilitas</strong>: <?= $detail[0]->fasilitas; ?></li>
                <li><strong>Kegiatan</strong>: <?= $detail[0]->kegiatan; ?></li>
              </ul>
            </div>
          </div>

        </div>
        <div class="row mt-5">
          <div class="col-lg-12">
            <div class="d-flex align-items-center justify-content-center">
              <div id="map" style="width: 2040px; height: 450px"></div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2024</span></strong>.
      </div>
    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/landing/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/landing/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/landing/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/landing/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/landing/vendor/php-email-form/validate.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/landing/js/main.js'); ?>"></script>

  <!-- LeafletJs Maps -->
  <script>
  var mapOptions = {
    center: [<?= $detail[0]->latitude ?>, <?= $detail[0]->longitude ?>],
    zoom: 14
  }
          
  var map = new L.map('map', mapOptions);            
  var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
          
  map.addLayer(layer);

    var marker = L.marker([<?= $detail[0]->latitude ?>, <?= $detail[0]->longitude ?>])
    .bindPopup("<p>Nama Masjid : <?= $detail[0]->nama_masjid; ?></p><p>Alamat : <?= $detail[0]->alamat; ?></p>")
    .addTo(map);

</script>
</body>

</html>