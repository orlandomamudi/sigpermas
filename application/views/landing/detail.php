
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Amoeba Bootstrap Template - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/landing/img/favicon.png'); ?>" rel="icon">
  <link href="<?php echo base_url('assets/landing/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

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
        <h1><a href="index.html">Amoeba</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="<?php echo base_url('assets/landing/img/logo.png'); ?>" alt="" class="img-fluid"></a>-->
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

                <div class="swiper-slide">
                  <img src="<?php echo base_url('assets/landing/img/portfolio/portfolio-1.jpg'); ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?php echo base_url('assets/landing/img/portfolio/portfolio-2.jpg'); ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?php echo base_url('assets/landing/img/portfolio/portfolio-3.jpg'); ?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Web design</li>
                <li><strong>Client</strong>: ASU Company</li>
                <li><strong>Project date</strong>: 01 March, 2020</li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>This is an example of portfolio detail</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
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
        var latObject = <?php echo JSON_encode($lat); ?>;
        var lat = [];
          for (var i = 0; i < latObject.length; i++) {
              lat.push(latObject[i].latitude);
              lat.push(latObject[i].longitude);
          }
          console.log(lat);
        var mapOptions = {
            center: [-6.2293796, 106.6647002],
            zoom: 10
         }
                  
         var map = new L.map('map', mapOptions);            
         var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
                  
         map.addLayer(layer);
         for (var i = 0; i < latObject.length; i++) {
		      var marker = L.marker('0.600655, 122.867311').addTo(map);
          }
          console.log(lat);
          
</script>
</body>

</html>