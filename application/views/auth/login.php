<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Sigpermas</title>

  <!-- favicon -->
  <link href="<?php echo base_url('assets/img/favicon/favicon.ico'); ?>" rel="icon">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/fontawesome/css/all.min.css'); ?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap-social/bootstrap-social.css'); ?>">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/components.css'); ?>">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
            <a href="<?= base_url() ?>"><img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="logo" width="100" class=""></a>
            </div>
            <h2 class="d-flex align-items-center justify-content-center">SIGPERMAS</h2>

            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
              </div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('login/aksi_login'); ?>" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your username
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>

              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; 2024
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

    <!-- General JS Scripts -->
    <script src="<?php echo base_url('assets/modules/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/modules/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/modules/tooltip.js'); ?>"></script>
    <script src="<?php echo base_url('assets/modules/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/modules/nicescroll/jquery.nicescroll.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/modules/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/stisla.js'); ?>"></script>
    
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->    
    
    <!-- Template JS File -->
    <script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
</body>
</html>