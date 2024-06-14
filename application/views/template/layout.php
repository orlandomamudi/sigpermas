<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo $pageTitle; ?> &mdash; SIGPERMAS</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/modules/fontawesome/css/all.min.css'); ?>">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo base_url('assets/modules/datatables/datatables.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css'); ?>">   
    <link rel="stylesheet" href="<?php echo base_url('assets/modules/chocolat/dist/css/chocolat.css'); ?>">   

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/components.css'); ?>">
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

        <?php $this->load->view('template/header'); ?>

        <div class="main-sidebar sidebar-style-2">
            <?php $this->load->view('template/sidebar'); ?>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <?php echo $pageContent; ?>
        </div>
        
        <?php $this->load->view('template/footer'); ?>

        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-danger" href="<?php echo base_url('login/logout'); ?>">Logout</a>
            </div>
          </div>
        </div>
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
    <script src="<?php echo base_url('assets/modules/datatables/datatables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/modules/jquery-ui/jquery-ui.min.js'); ?>"></script>

    <!-- Page Specific JS File -->
    <script src="<?php echo base_url('assets/js/page/modules-datatables.js'); ?>"></script>
    <script src="<?php echo base_url('assets/modules/chocolat/dist/js/jquery.chocolat.min.js'); ?>"></script>
    
    <!-- Template JS File -->
    <script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
</body>
</html>
