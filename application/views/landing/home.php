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
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <!-- <h1><a href="index.html">SIG PERSEBARAN MASJID</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="<?= base_url() ?>"><img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#">Home</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('home/data_masjid') ?>">Data Masjid</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('login') ?>">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>SISTEM INFORMASI GEOGRAFIS PERSEBARAN MASJID </br> GORONTALO</h1>
      <h2>Sistem informasi ini merupakan aplikasi persebaran geografis Masjid di wilayah Sulawesi Utara. Aplikasi ini memuat informasi dan lokasi dari masjid yang berada di Gorontalo.</h2>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Persebaran Masjid di Gorontalo</h2>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex align-items-center justify-content-center">
              <div id="map" style="width: 950px; height: 450px"></div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- LeafletJs Maps -->
<!-- <script>         
        var latObject =;
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
		      var marker = L.marker('1.457358378998722, 124.81276759246336').addTo(map);
          }
          console.log(lat);
          
</script> -->
<script>
  var mapOptions = {
    center: [0.588800, 122.803741],
    zoom: 12
  }
          
  var map = new L.map('map', mapOptions);            
  var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
          
  map.addLayer(layer);

  <?php foreach ($all_data as $key => $value) { ?>
    var marker = L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>])
    .bindPopup("<p>Nama Masjid : <?= $value->nama_masjid; ?></p><p>Alamat : <?= $value->alamat; ?></p>")
    .addTo(map);
  <?php } ?>

</script>

</body>

</html>