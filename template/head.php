<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{title}</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>template/assets/css/sb-admin-2.css" rel="stylesheet">
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>template/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>template/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>template/assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url();?>template/vendor/chart.js/Chart.min.js"></script>
  <link href="<?php echo base_url();?>template/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url();?>template/assets/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url();?>template/assets/js/demo/chart-pie-demo.js"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url();?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-cloud"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><b style="text-transform:lowercase;">e</b>PROCLOUD</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>dashboard/index">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#workflows-" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Workflows</span>
        </a>
        <div id="workflows-tab" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-transparent py-2 collapse-inner rounded">

          </div>
        </div>
      </li>
    <hr class="sidebar-divider">
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#contracts-tab" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Contracts</span>
        </a>
        <div id="contracts-tab" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-transparent py-2 collapse-inner rounded">
            <h6 class="collapse-header">Contracts:</h6>
            <a class="collapse-item <?php if($this->uri->segment(1)=="contrcts"){echo "active";}?>" href="<?php echo base_url('contracts/add');?>">Add Contract</a>
            <a class="collapse-item" href="<?php echo base_url();?>contracts/list">List Contracts</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed <?php if($this->uri->segment(1)=="bidding"){echo "active";}?>" href="#" data-toggle="collapse" data-target="#contractbidding-tab" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Contract Bidding</span>
        </a>
        <div id="contractbidding-tab" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-transparent py-2 collapse-inner rounded">
            <h6 class="collapse-header">Contract Bidding:</h6>
            <a class="collapse-item" href="<?php echo base_url();?>bidding/current">Active (Approved) Bids</a>
            <a class="collapse-item" href="<?php echo base_url();?>bidding/pending">Bids Pending Approval</a>
            <a class="collapse-item" href="<?php echo base_url();?>bidding/bid">Bid Contract(s)</a>

          </div>
        </div>
      </li>
    <hr class="sidebar-divider">
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#events-tab" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Events</span>
        </a>
        <div id="events-tab" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-transparent py-2 collapse-inner rounded">
            <h6 class="collapse-header">Events:</h6>
            <a class="collapse-item" href="<?php echo base_url();?>events/add">Add Event</a>
            <a class="collapse-item" href="<?php echo base_url();?>events/list">List Events</a>
            </div>
        </div>
      </li>

    <hr class="sidebar-divider">
      <!-- Nav Item - Tables -->

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>dashboard/partners">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Business Partners</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-transparent topbar mb-4 static-top shadow">

              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>

              <!-- Topbar Search -->


              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">
                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{name}</span>
                    <img class="img-profile rounded-circle" src="<?php echo base_url();?>template/assets/img/xlabs.png">
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?php echo base_url();?>dashboard/profile">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Logout
                    </a>
                  </div>
                </li>

              </ul>

            </nav>
            <!-- End of Topbar -->
            <script>
              $(function() {
              $('nav li a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
            });
            </script>
